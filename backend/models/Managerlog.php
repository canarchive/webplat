<?php

namespace backend\models;

use common\models\PassportModel;

class Managerlog extends PassportModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auth_managerlog}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '日志ID',
            'manager_id' => '管理员ID',
            'manager_username' => '管理员帐号',
            'role_id' => '角色ID',
            'role_name' => '角色名称',
            'menu_code' => '菜单代码',
            'menu_name' => '菜单名称',
            'data' => '数据信息',
            'data_old' => '更新前数据',
            'logtype' => '日志类型',
            'ip' => '操作IP',
            'created_at' => '操作时间',
        ];
    }

	public function insert($runValidation = true, $attributes = null)
    {
        $values = $this->getDirtyAttributes($attributes);
        if (($primaryKeys = static::getDb()->schema->insert($this->tableName(), $values)) === false) {
            return false;
        }

        return true;
    }
}
