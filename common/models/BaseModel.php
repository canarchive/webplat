<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use common\helpers\Tree;

class BaseModel extends ActiveRecord
{
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

	protected function _updateSingleAttachment($table, $fields)
	{
		$attachment = $this->getAttachmentModel();
		foreach ($fields as $field) {
			$info = $attachment->findOne($this->$field);
			if (!empty($info)) {
    			$info->info_id = $this->id;
    			$info->in_use = 1;
    		    $info->noFile = true;
    			$info->update(false);
			}

			$infos = $attachment->find()->where(['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id])->all();
			foreach ($infos as $info) {
				if ($info->id == $this->$field) {
					continue;
				}
				$info->delete();
			}
		}

		return ;
	}

	protected function _updateMulAttachment($table, $field)
	{
		$attachment = $this->getAttachmentModel();
		$ids = array_filter(explode(',', $this->$field));
		foreach ($ids as $id) {
			$info = $attachment->findOne($id);
			if (!empty($info)) {
    			$info->info_id = $this->id;
    			$info->in_use = 1;
    		    $info->noFile = true;
    			$info->update(false);
			}
		}

		$infos = $attachment->find()->where(['info_table' => $table, 'info_field' => $field, 'info_id' => $this->id])->all();
		foreach ($infos as $info) {
			if (in_array($info->id, $ids)) {
				continue;
			}
			$info->delete();
		}

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
}
