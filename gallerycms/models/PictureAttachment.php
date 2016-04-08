<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class PictureAttachment extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%picture_attachment}}';
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
            'id' => '附件ID',
            'name' => '名称',
            'filepath' => '路径',
            'path_prefix' => 'path_prefix',
            'url_prefix' => 'URL前缀',
            'filename' => '名称',
            'listorder' => '排序',
            'description' => '图片描述',
            'size' => '大小',
            'type' => '类型',
            'extname' => '扩展名',
            'info_table' => '信息所在表',
            'info_field' => '所属字段',
            'info_id' => '信息ID',
            'in_use' => '是否使用',
            'created_at' => '上传时间',
        ];
    }
}
