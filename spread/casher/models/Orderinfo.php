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
            [['orderid', 'groupon_id', 'mobile'], 'required'],
            [['money', 'status', 'pos_machine_id', 'business_id'], 'default', 'value' => 0],
			[['groupon_name', 'business_name', 'import', 'import_business', 'sn_pos'], 'safe'],
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
			'business_name' => '商家名字',
            'mobile' => '业主手机号',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
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

		$infos = self::find()->where(['groupon_id' => $grouponId])->all();

		$this->exportDatas($infos);
		return $datas;
	}

	public function import()
	{
		print_r($this);
		print_r($_POST);
		$grouponId = $this->groupon_id;
		$aId = $this->import;
		$aIdBusiness = $this->import_business;
		if (empty($grouponId) || empty($aId) || empty($aIdBusiness)) {
			$this->addError('error', '参数错误');
			return false;
		}

		$grouponInfo = Groupon::findOne(['groupon_id' => $grouponId]);
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
		print_r($datas);

		foreach ($datas as $data) {
			$data = [
				'groupon_id' => $grouponId,
				'name' => $data['A'],
				'order_prefix' => $data['B'],
				'order_start' => $data['C'],
				'order_end' => $data['D'],
			];
			$self = new self($data);
			$r = $self->save();
		}

		return true;
	}

	public function _formatExportDatas($objPHPExcel, $datas)
	{
		static $grouponInfos = [];
		$i = 1;

		foreach ($datas as $data) {
			$grouponId = $data['groupon_id'];
			$grouponInfo = isset($grouponInfos[$grouponId]) ? $grouponInfos[$grouponId] : null;
			$grouponInfo = is_null($grouponInfo) ? $this->getGrouponInfo($grouponId) : $grouponInfo;
			$grouponName = isset($grouponInfo['groupon_name']) ? $grouponInfo['groupon_name'] : '';
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $data['orderid'])
                    ->setCellValue('B' . $i, $grouponName)
                    ->setCellValue('C' . $i, $data['id']);
			$i++;
		}
        
		return $objPHPExcel;
	}
}
