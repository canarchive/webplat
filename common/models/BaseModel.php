<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;
use common\helpers\Tree;
use merchant\models\Merchant;
use merchant\house\models\Owner;
use merchant\models\Company;

class BaseModel extends ActiveRecord
{
    /**
     * 附件类型的字段信息更新时，是否删除旧的附件，默认删除
     */
    public $deleteAttachment = true;

    protected function getTimestampBehaviorComponent($createField = 'created_at', $updateField = 'updated_at')
    {
        return [
            'class' => TimestampBehavior::className(),
            'attributes' => [
                ActiveRecord::EVENT_BEFORE_INSERT => [$createField, $updateField],
                ActiveRecord::EVENT_BEFORE_UPDATE => [$updateField],
            ],
        ];        
    }

    protected function getTreeInfos($infos, $key, $parentKey, $name, $parentValue = 0)
    {
        foreach ($infos as $id => $info) {
            $parentId = isset($infos[$info[$parentKey]][$key]) ? $infos[$info[$parentKey]][$key] : '';
            $parentNode = $parentId ? 'child-of-node-' . $parentId : '';
            $info['parentNode'] = $parentNode;
            $level = $this->getLevel($id, $infos, $parentKey);
            $info['level'] = $level;
            $infos[$id] = $info;
        }

        $tree = new Tree($infos, $key, $parentKey, $name);
        $formatedInfos = $tree->getTree($parentValue);

        return $formatedInfos;
    }

    protected function getLevelInfos($infos, $key, $parentKey, $name, $parentValue = 0)
    {
        $tree = new Tree($infos, $key, $parentKey, $name);
        $formatedInfos = $tree->getTree($parentValue);
        $datas = [];
        foreach ($formatedInfos as $code => $info) {
            $nameShow = str_replace('&nbsp;', '-', $info[$name]);
            $datas[$code] = $nameShow;
        }

        return $datas;
    }

    /**
     * Get the level of a multi level infos
     *
     * @return int
     */
    protected function getLevel($currentKey, $infos, $parentField = 'parentid', $level = 0)
    {
        foreach($infos as $key => $info){
            if ($currentKey == $key) {
                if (empty($info[$parentField])) {
                    return $level;
                }
                $level++;
                return $this->getLevel($info[$parentField], $infos, $parentField, $level);
            }
        }
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $this->writeManagerLog();
        return true;
    }

    public function afterDelete()
    {
        parent::afterDelete();

        $this->writeManagerLog();
        return true;
    }

    protected function writeManagerLog()
    {
        if (\Yii::$app->id != 'app-backend' || \Yii::$app->controller->id == 'site') {
            return true;
        }

        $attributes = $this->attributes;
        $infos = get_object_vars($this);

        $infos = array_merge($attributes, $infos);
        $data = [];
        foreach ($infos as $key => $value) {
            if (is_array($value)) {
                $value = implode(',', $value);
            }

            $data[$key] = $value;
        }
        $managerInfo = \Yii::$app->params['managerInfo'];
        $menuInfo = \Yii::$app->params['currentMenu'];

        $infos = [
            'manager_id' => $managerInfo['id'],
            'manager_username' => $managerInfo['username'],
            'roles' => $managerInfo['roles'],
            'menu_code' => $menuInfo['code'],
            'menu_name' => $menuInfo['name'],
            'data' => serialize($data),
            'ip' => \Yii::$app->request->userIP,
            'created_at' => time(),
        ];

        $managerlogModel = new \backend\models\Managerlog($infos);
        \Yii::$app->params['managerlogModel'] = $managerlogModel;
        $managerlogModel->insert();

        return true;
    }

    public function getAttachmentImg($id, $pointSize = true, $options = [])
    {
        $model = $this->getAttachmentModel();
        $info = $model->findOne($id);
        if ($info) {
            $info->getUrl();
            $optionsDefault = [
                'style' => ['width' => '80px', 'height' => '40px'],
                'onclick' => 'window.open(this.src);',
            ];
            $options = $pointSize && empty($options) ? $optionsDefault : $options;
            return \Yii::$app->formatter->asImage($info->getUrl(), $options);
        }
        return '';
    }

    public function getAttachmentUrl($id)
    {
        $model = $this->getAttachmentModel();
        $info = $model->findOne($id);
        return empty($info) ? '' : $info->getUrl();
    }

    protected function getAttachmentModel()
    {}

    protected function _updateSingleAttachment($table, $fields, $extData = [])
    {
        $attachment = $this->getAttachmentModel();
        foreach ($fields as $field) {
            $attachment->updateInfo($this->$field, $this->id, $extData);

            $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
            $this->deleteAttachment && $attachment->deleteInfo($where, $this->$field);
        }

        return ;
    }

    protected function _updateMulAttachment($table, $field, $extData = [])
    {
        $attachment = $this->getAttachmentModel();
        $ids = array_filter(explode(',', $this->$field));
        foreach ($ids as $id) {
            $attachment->updateInfo($id, $this->id, $extData);
        }

        $where = ['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id];
        $this->deleteAttachment && $attachment->deleteInfo($where, $ids);

        return ;
    }    

    public function checkMobile($mobile)
    {
        $validator = new \common\validators\MobileValidator();
        $valid =  $validator->validate($mobile);
        if (empty($valid)) {
            return ['status' => 400, 'message' => '手机号码格式有误'];
        }

        return true;
    }

    /**
     * 验证邮箱格式
     *
     * @param $email string
     * @return boolean
     */
    public function checkEmail($email)
    {
        $validator = new \yii\validators\EmailValidator();
        $valid =  $validator->validate($email);
        if (empty($valid)) {
            return ['status' => 400, 'message' => '邮箱有误'];
        }

        return true;
    }

    /**
     * 获取省级地区信息
     *
     * @param $haveSub 是否返回地区的辖区信息
     * @return array
     */
    public function getRegionSubInfos($parentCode = '')
    {
        $region = new \common\models\Region();
        $datas = $region->getSubInfos($parentCode, false);
        $datas = ArrayHelper::map($datas, 'code', 'name');

        return $datas;
    }

    public function getRegionInfo($code = '')
    {
        $region = new \common\models\Region();
        $info = $region->getInfoByCode($code);

        return $info;
    }

    public function getHouseTypeInfos()
    {
        $datas = [
            'one' => '一居',
            'two' => '二居',
            'three' => '三居',
            'four' => '四居',
            'solo' => '小户型',
            'lodging' => '公寓',
            'double' => '复式',
            'villa' => '别墅',
        ];

        return $datas;
    }

    public function getStyleInfos()
    {
        $datas = [
            'simple' => '简约',
            'modern' => '现代',
            'EN' => '欧式',
            'CN' => '中式',
            'rural' => '田园',
            'mediterranean' => '地中海',
            'US' => '美式',
            'mashup' => '混搭',
            'family' => '宜家',
            'simple-EN' => '简欧',
            'new-classics' => '新古典',
            'SE-asia' => '东南亚',
        ];

        return $datas;
    }

    public function getAreaInfos()
    {
        $datas = [
			'30' => '30㎡',
			'40' => '40㎡',
			'50' => '50㎡',
			'60' => '60㎡',
			'70' => '70㎡',
			'80' => '80㎡',
			'90' => '90㎡',
			'100' => '100㎡',
			'110' => '110㎡',
			'120' => '120㎡',
			'130' => '130㎡以上',
        
        ];
        return $datas;
    }

    public function getColorInfos()
    {
        $datas = [
            'white' => '白色',
            'beige' => '米色',
            'yellow' => '黄色',
            'orange' => '橙色',
            'red' => '红色',
            'pink' => '粉色',
            'green' => '绿色',
            'blue' => '蓝色',
            'purple' => '紫色',
            'black' => '黑色',
            'grey' => '灰色',
            'wood' => '原木色',
            'colour' => '彩色',
            'tan' => '褐色',
        ];
        return $datas;
    }

	public function getMerchantInfo()
	{
		if (empty($this->merchant_id)) {
			return [];
		}

		$model = new Merchant();
		$info = $model->getInfo(['id' => $this->merchant_id]);
		return $info;
	}

	public function getCompanyInfo()
	{
		if (!isset($this->city_code) || empty($this->city_code)) {
			return [];
		}

		$model = new Company();
		$info = $model->getInfoByCodeShort($this->city_code);
		return $info;
	}

	public function getOwnerInfo()
	{
		if (!isset($this->owner_id) || empty($this->owner_id)) {
			return [];
		}

		$model = new Owner();
		$info = $model->getInfo(['id' => $this->owner_id]);
		return $info;
	}

	public function searchTimeElem(& $query, $field = 'created_at')
	{
		$startAttr = $field . '_start';
		$endAttr = $field . '_end';
		$startTime = strtotime($this->$startAttr);
		$endTime = $this->$endAttr > 0 ? strtotime($this->$endAttr) : time();
        $query->andFilterWhere(['>=', $field, $startTime]);
        $query->andFilterWhere(['<', $field, $endTime]);
	}

	public function _decorationStatusInfos()
	{
		$datas = [
			'' => '',
			'start' => '开始',
			'electric' => '水电',
			'cement' => '泥木',
			'paint' => '油漆',
			'finish' => '竣工',
		];
		return $datas;
	}	
}
