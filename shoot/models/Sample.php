<?php

namespace shoot\models;

use common\models\ShootModel;

class Sample extends ShootModel
{
	public $picture;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sample}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'photographer_id'], 'required'],
			['picture', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
			'name_ext' => '名称-预留',
			'type' => '类型',
			'url' => 'URL',
			'orderlist' => '排序',
			'picture' => '图片',
			'picture_mobile' => '图片-H5',
			'picture_ext' => '图片-预留',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
			'description' => '描述',
            'status' => '状态',
        ];
    }

	public function save($runValidation = true, $attributeNames = NULL)
	{
		$this->afterSave(false, []);
		return true;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$this->deleteAttachment = false;
		$extData = [
			'photographer_id' => $this->photographer_id,
			'goods_id' => $this->goods_id,
		];
		$this->id = 0;
		$this->_updateMulAttachment('sample', 'picture', $extData);

		return true;
	}	

	public function getAttachmentModel()
	{
		return new \shoot\models\AttachmentSample();
	}

	public function getInfos($goodsId, $number)
	{
		//$infos = $this->find()->where(['goods_id' => $goodsId, 'in_use' => 1])->orderBy(['orderlist' => SORT_DESC])->limit($number)->all();
		$where = ['goods_id' => $goodsId, 'in_use' => 1];
		$infos = $this->getAttachmentModel()->find()->where($where)->orderBy(['orderlist' => SORT_DESC])->limit($number)->all();
		$datas = [];
		foreach ($infos as $attachment) {
			$url = $attachment->getUrl();
			$datas[] = [
				'url' => $url,
				'name' => $attachment['filename'],
				'description' => $attachment['description'],
			];
		}		
		return $datas;
	}
}
