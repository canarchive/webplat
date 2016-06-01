<?php

namespace spread\casher\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

class Orderinfo extends SpreadModel
{
	public $company_id;
	public $import;
	public $import_business;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%orderinfo}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderid', 'groupon_id'], 'required'],
            [['money', 'status', 'pos_machine_id', 'business_id'], 'default', 'value' => 0],
			[['groupon_name', 'business_name', 'business_sort_big', 'business_sort', 'import', 'import_business', 'sn_pos', 'mobile'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'sn_pos' => 'POS流水号',
            'orderid' => '订单号',
			'pos_machine_id' => '收银机ID',
			'groupon_id' => '团购会ID',
			'groupon_name' => '团购会名字',
			'business_id' => '商家ID',
			'business_sort_big' => '一级分类',
			'business_sort' => '分类',
			'business_name' => '商家名字',
            'mobile' => '业主手机号',
            'status' => '状态',
            'created_day' => '下单日期',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
			'import' => 'POS汇总订单',
			'import_business' => 'POS商家订单',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '测试',
			'1' => '正常',
			'99' => '异常',
		];	
		return $datas;
	}	

	public function getGrouponInfos()
	{
		$datas = [];
		if ($this->company_id > 0) {
		    $datas = \spread\casher\models\Groupon::getInfosByCompanyId($this->company_id);
		}

		return $datas;
	}

	public function getGrouponInfo($grouponId = null)
	{
		$grouponId = is_null($grouponId) ? $this->groupon_id : $grouponId;
		$info = \spread\casher\models\Groupon::findOne($grouponId);

		return $info;
	}	

	public function getCompanyInfos()
	{
		$infos = ArrayHelper::map(\spread\casher\models\Company::find()->all(), 'company_id', 'company_name');
		return $infos;
	}

	public function getPosMachineInfos()
	{
		$infos = ArrayHelper::map(\spread\casher\models\PosMachine::find()->all(), 'id', 'name');
		return $infos;
	}

	public function export()
	{
		$grouponId = intval(\Yii::$app->request->get('groupon_id'));
		if (empty($grouponId)) {
			return ['status' => 400, 'message' => '参数错误'];
		}
		$grouponInfo = ['groupon_name' => '20160528-29北京团购会'];//Groupon::findOne(['groupon_id' => $grouponId]);

		$infos = self::find()->where(['groupon_id' => $grouponId])->all();
		//print_r($infos);exit();

		$this->exportDatas($infos, $grouponInfo['groupon_name']);
		return $datas;
	}

	public function import()
	{
		//print_r($this);
		//print_r($_POST);
		$grouponId = 2474;//$this->groupon_id;
		$aId = $this->import;
		$aIdBusiness = $this->import_business;
		if (empty($grouponId) || empty($aId) || empty($aIdBusiness)) {
			$this->addError('error', '参数错误');
			return false;
		}

		$grouponInfo = ['groupon_name' => '20160528-29北京团购会'];//Groupon::findOne(['groupon_id' => $grouponId]);
		if (empty($grouponInfo)) {
			$this->addError('error', '指定的团购会不存在');
			return false;
		}

		$attachment = \spread\models\Attachment::findOne($aId);
		$attachmentBusiness = \spread\models\Attachment::findOne($aIdBusiness);
		if (empty($attachment) || empty($attachmentBusiness)) {
			$this->addError('error', '指定的文件参数有误，请重新上传');
			return false;
		}

		$file = $attachment->getPathBase($attachment->path_prefix) . '/' . $attachment->filepath;
		$fileBusiness = $attachmentBusiness->getPathBase($attachmentBusiness->path_prefix) . '/' . $attachmentBusiness->filepath;
		if (!file_exists($file) || !file_exists($fileBusiness)) {
			$this->addError('error', '指定的文件不存在，请重新上传');
			return false;
		}

		$datas = $this->importDatas($file);
		$datasBusiness = $this->importDatas($fileBusiness);
		if (empty($datas) || empty($datasBusiness)) {
			$this->addError('error', '没有要录入的信息');
			return false;
		}

		$businessSortInfos = \spread\casher\models\BusinessOrder::find(['groupon_id' => $grouponId])->indexBy('name')->asArray()->all();
		//print_r($datas);
		//print_r($datasBusiness);exit();

		$infos = [];
		foreach ($datas as $data) {
			if (empty($data['A']) || $data['A'] == 'POS机交易流水') {
				continue;
			}
			$infos[$data['A']] = [
				'note' => (string) $data['F'],
			];
		}

		$i = 0;
		foreach ($datasBusiness as $data) {
			if (empty($data['A']) || ($data['A'] == '流水号')) {
				continue;
			}
			$sn = $data['A'];
			$info = $this->findOne(['sn_pos' => $sn, 'orderid' => $data['D']]);
			if (!empty($info)) {
				//continue;
			}
			$businessName = $data['F'];
			$insertData = [
				'sn_pos' => $sn,
				'orderid' => $data['D'],
				'groupon_id' => $grouponId,
				'groupon_name' => $grouponInfo['groupon_name'],
				'business_sort_big' => isset($businessSortInfos[$businessName]) ? $businessSortInfos[$businessName]['sort_big'] : '',
				'business_sort' => isset($businessSortInfos[$businessName]) ? $businessSortInfos[$businessName]['sort'] : '',
				'business_name' => $businessName,
				'mobile' => isset($infos[$sn]) ? $infos[$sn]['note'] : '',
				'money' => $data['H'],
				'created_day' => date('Ymd', strtotime($data['B'])),
				'created_at' => strtotime($data['B']),
				'updated_at' => strtotime($data['B']),
			];
			$self = new self($insertData);
			$r = $self->save();
			$i++;
		}

		return $i;
	}

	public function _formatExportDatas($objPHPExcel, $datas)
	{
		static $grouponInfos = [];
		$i = 1;

		$data = [
			'orderid' => '四联单号',
			'business_sort_big' => '项目',
			'business_sort' => '品类',
			'business_name' => '商家名称',
			'mobile' => '业主手机号',
			'money' => '订金',
			'created_day' => '下单日期',
		];
		//print_r($datas);exit();
		array_unshift($datas, $data);
		foreach ($datas as $data) {
			//$grouponId = $data['groupon_id'];
			//$grouponInfo = isset($grouponInfos[$grouponId]) ? $grouponInfos[$grouponId] : null;
			//$grouponInfo = is_null($grouponInfo) ? $this->getGrouponInfo($grouponId) : $grouponInfo;
			//$grouponName = isset($grouponInfo['groupon_name']) ? $grouponInfo['groupon_name'] : '';
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $data['orderid'])
                    //->setCellValue('B' . $i, $grouponName)
                    ->setCellValue('B' . $i, $data['business_sort_big'])
                    ->setCellValue('C' . $i, $data['business_sort'])
                    ->setCellValue('D' . $i, $data['business_name'])
                    ->setCellValue('E' . $i, $data['mobile'])
                    ->setCellValue('F' . $i, $data['money'])
                    ->setCellValue('G' . $i, $data['created_day']);
			$i++;
		}
        
		return $objPHPExcel;
	}

	public function getMobiles($grouponId)
	{
		$infos = $this->find()->where(['groupon_id' => $grouponId])->select('mobile')->asArray()->limit(5000)->all();
		$datas = [];
		foreach ($infos as $info) {
			$datas[] = $info['mobile'];
		}
		$datas = array_unique(array_filter($datas));

		return $datas;
	}
}
