<?php

namespace spread\casher\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;
use Overtrue\Pinyin\Pinyin;

class BusinessOrder extends SpreadModel
{
	public $company_id;
	public $import;
	public $export;
	public $order_diff;

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
            [['status', 'order_range', 'import'], 'default', 'value' => 0],
			[['sort', 'sort_big'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'sort_big' => '一级分类',
			'sort' => '分类',
            'name' => '商家名称',
			'groupon_id' => '团购会ID',
            'order_num' => '四联单本数',
            'order_range' => '四联单号段',
            'order_diff' => '四联单号数量',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
			'status' => '状态',
			'export' => '导出',
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

	public function export()
	{
		$id = intval(\Yii::$app->request->get('id'));
		if ($id) {
			$where = ['id' => $id];
		} else {
    		$grouponId = intval(\Yii::$app->request->get('groupon_id'));
    		if (empty($grouponId)) {
				exit('参数错误');
    			return ['status' => 400, 'message' => '参数错误'];
    		}
    
    		//$grouponInfo = Groupon::findOne(['groupon_id' => $grouponId]);
			$grouponInfo = isset($this->grouponInfos[$grouponId]) ? $this->grouponInfos[$grouponId] : false;
    		if (empty($grouponInfo)) {
				exit('团购会信息有误');
    			$this->addError('error', '指定的团购会不存在');
    			return false;
    		}			
			$where = ['groupon_id' => $grouponId];
		}

		$infos = self::find()->where($where)->all();
		if (empty($infos)) {
			exit('没有要导出的信息');
		}

		$datas = [];
		foreach ($infos as $info) {
			$orderRange = explode('-', $info['order_range']);
			$orderStart = isset($orderRange[0]) ? $orderRange[0] : 0;
			$orderEnd = isset($orderRange[1]) ? $orderRange[1] : 0;
			if (empty($orderStart) || empty($orderEnd) || $orderEnd - $orderStart > 500) {
				continue;
			}
			for ($order = $orderStart; $order <= $orderEnd; $order++) {
			    $data = [
				    'name' => $info['name'],
					'order' => $order,
					'sort_code' => '01',
					'depart_code' => '01',
					'code' => str_replace(' ', '', Pinyin::letter($info['name'])) . substr($order, -3),
			    ];
				$datas[] = $data;
			}
		}

		//$title = isset($grouponInfo['groupon_name']) ? $grouponInfo['groupon_name'] : '';
		$title = isset($grouponInfo) ? $grouponInfo : '';
		$this->exportDatas($datas, "{$title}商家四联单");
		return ;
	}

	public function import()
	{
		$grouponId = $this->groupon_id;
		$aId = $this->import;
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

		$file = $attachment->getPathBase($attachment->path_prefix) . '/' . $attachment->filepath;
		if (!file_exists($file)) {
			$this->addError('error', '指定的文件不存在，请重新上传');
			return false;
		}

		$datas = $this->importDatas($file);

		$i = 0;
		foreach ($datas as $key => $data) {
			if ($key == 1 || empty($data['A']) || empty($data['B']) || empty($data['C'])) {
				continue;
			}
			$data = [
				'groupon_id' => $grouponId,
				'sort_big' => trim($data['B']),
				'sort' => trim($data['C']),
				'name' => trim($data['D']),
				'order_num' => intval(trim($data['E'])),
				'order_range' => trim($data['F']),
			];
			$info = $this->findOne(['groupon_id' => $grouponId, 'order_range' => $data['order_range']]);
			if (!empty($info)) {
				continue;
			}
			$self = new self($data);
			$r = @ $self->save();
			$i++;
		}

		return $i;
	}

	public function _formatExportDatas($objPHPExcel, $datas)
	{
		$i = 1;
		foreach ($datas as $data) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $data['name'])
                    ->setCellValue('B' . $i, $data['order'])
                    ->setCellValue('C' . $i, $data['code'])
                    ->setCellValue('D' . $i, $data['sort_code'])
                    ->setCellValue('E' . $i, $data['depart_code'])
                    ->setCellValue('F' . $i, $data['depart_code'])
                    ->setCellValue('G' . $i, '部类商品');
			$i++;
		}
        
		return $objPHPExcel;
	}
}
