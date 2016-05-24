<?php

namespace spread\casher\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

class BusinessOrder extends SpreadModel
{
	public $company_id;
	public $import;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%business_order}}';
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
            [['name', 'groupon_id'], 'required'],
            [['status', 'order_prefix', 'order_start', 'order_end', 'import'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '商家名称',
			'groupon_id' => '团购会ID',
            'order_prefix' => '四联单前缀',
            'order_start' => '四联单首号',
            'order_end' => '四联单尾号',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
			'status' => '状态',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '隐藏',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function getCompanyInfos()
	{
		$infos = ArrayHelper::map(\spread\casher\models\Company::find()->all(), 'company_id', 'company_name');
		return $infos;
	}

	public function getGrouponInfos()
	{
		$datas = [];
		if ($this->company_id > 0) {
		    $datas = \spread\casher\models\Groupon::getInfosByCompanyId($this->company_id);
		}

		return $datas;
	}

	public function getGrouponInfo()
	{
		$info = \spread\casher\models\Groupon::findOne($this->groupon_id);

		return $info;
	}	

	public function export()
	{
		$grouponId = intval(\Yii::$app->request->get('groupon_id'));
		if (empty($grouponId)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		$infos = self::find()->where(['groupon_id' => $grouponId])->all();

		//print_r($infos);
		$datas = [];
		foreach ($infos as $info) {
			for ($i = $info['order_start']; $i <= $info['order_end']; $i++) {
			    $data = [
				    'name' => $info['name'],
					'order' => $info['order_prefix'] * 100 + $i,
			    ];
				$datas[] = $data;
			}
		}

		$this->exportDatas($datas);
		return $datas;
	}

	public function import()
	{
		print_r($this);
		print_r($_POST);exit();
		$grouponId = $this->groupon_id;
		$aId = $this->import;
		echo $aId;exit();
		if (empty($grouponId) || empty($aId)) {
			$this->addError('error', '参数错误');
			return false;
		}

		$grouponInfo = Groupon::findOne(['groupon_id' => $grouponId]);
		if (empty($grouponInfo)) {
			$this->addError('error', '指定的团购会不存在');
			return false;
		}

		$attachment = \spread\models\Attachment::findOne($aId);
		if (empty($attachment)) {
			$this->addError('error', '指定的文件参数有误，请重新上传');
			return false;
		}
		//print_r($attachment);exit();

		$file = $attachment->getPathBase($attachment->path_prefix) . '/' . $attachment->filepath;
		if (!file_exists($file)) {
			$this->addError('error', '指定的文件不存在，请重新上传');
			return false;
		}

		$datas = $this->importDatas($file);

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
		$i = 1;
		foreach ($datas as $data) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $data['name'])
                    ->setCellValue('B' . $i, $data['order']);
			$i++;
		}
        
		return $objPHPExcel;
	}
}
