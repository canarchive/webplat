<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Merchant extends MerchantModel
{
	public $companyInfo;
	public $aptitude;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant}}';
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
            [['name'], 'required'],
			[['logo', 'picture'], 'integer'],
			[['logo', 'picture', 'company_id', 'category_id', 'status'], 'default', 'value' => '0'],
			[['aptitude', 'sort', 'hotline', 'postcode', 'brief', 'address', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '商家ID',
            'name' => '名称',
            'breif' => '简介',
			'company_id' => '所属公司',
			'category_id' => '分类',
			'sort' => '类别',
            'logo' => 'LOGO',
            'picture' => '描述配图',
            'aptitude' => '资质',
			'hotline' => '电话',
			'postcode' => '邮编',
			'address' => '地址',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}	

	protected function getSortInfos()
	{
		$datas = [
			'focus' => '关注',
			'discuss' => '洽谈',
			'cooperation' => '合作',
			'deepco' => '深度合作',
		];
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['logo', 'picture'];
		$this->_updateSingleAttachment('merchant', $fields);
		$this->_updateMulAttachment('merchant', 'aptitude');

		return true;
	}	

	protected function getCompanyInfos()
	{
		$infos = ArrayHelper::map(Company::find()->all(), 'id', 'name');
		return $infos;
	}

	protected function getCategoryInfos()
	{
		$infos = ArrayHelper::map(Category::find()->all(), 'id', 'name');
		return $infos;
	}

	public function getInfo($id)
	{
        /*$key = "decorationsem_decoration_info_{$id}";
        $info = false;// \Yii::$app->cacheRedis->get($key);
        if ($info) {
			$info['signup_number'] = $this->getSignupNumber($id);
            return $info;
		}*/

		$info = static::find()->where(['id' => $id])->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);

        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	protected function _formatInfo($info)
	{
		$info['logo'] = $info->getAttachmentUrl($info['logo']);
		$info['picture'] = $info->getAttachmentUrl($info['picture']);
		$info['companyInfo'] = Company::findOne($info['company_id'])->toArray();

        $condition = [ 
            'info_table' => 'merchant',
            'info_field' => 'aptitude',
            'info_id' => $info->id,
            'in_use' => 1,
        ];  
        $infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
        $aptitudeInfos = []; 
        foreach ($infos as $attachment) {
            $url = $attachment->getUrl();
            $aptitudeInfos[] = [ 
                'url' => $url,
                'name' => $attachment['filename'],
                'description' => $attachment['description'],
            ];  
        }    
        $info->aptitude = $aptitudeInfos;

		return $info;
	}

	public function getRealcaseInfos()
	{
		$model = new MerchantRealcase();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function getWorkingInfos()
	{
		$model = new MerchantWorking();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}

	public function getDesignerInfos()
	{
		$model = new MerchantDesigner();
		$infos = $model->getInfos(['merchant_id' => $this->id]);

		return $infos;
	}
}
