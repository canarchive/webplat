<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * This is the base model class for attachment.
 */
class Attachment extends BaseModel
{
	const DEFAULT_URL_PREFIX = 'default';
	const DEFAULT_PATH_PREFIX = 'default';

    /**
     * @var UploadedFile 
     */
    public $files;
	public $file;
	public $noFile;

    /**
     * @var string Upload path
     */
    public $uploadPath = '@uploadPath';

    /**
     * @var integer the level of sub-directories to store uploaded files. Defaults to 1.
     * If the system has huge number of uploaded files (e.g. one million), you may use a bigger value
     * (usually no bigger than 3). Using sub-directories is mainly to ensure the file system
     * is not over burdened with a single directory having too many files.
     */
    public $directoryLevel = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attachment}}';
    }

    public static function getDb()
    {
        return \Yii::$app->dbCommon;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			[['info_field'], 'filterTableField'],
			['orderlist', 'default', 'value' => 0],
            [['size', 'info_id', 'orderlist'], 'integer'],
			[['info_table', 'info_field', 'info_id'], 'default', 'value' => function($model, $attribute) {
				return $model->$attribute;				
			}],
			[['url_prefix'], 'default', 'value' => function($model, $attribute) {
				return !empty($model->url_prefix) ? $model->url_prefix : self::DEFAULT_URL_PREFIX;
			}],
			[['path_prefix'], 'default', 'value' => function($model, $attribute) {
				return !empty($model->path_prefix) ? $model->path_prefix : self::DEFAULT_PATH_PREFIX;
			}],

            [['file'], 'required'],
            [['file'], 'file', 'skipOnEmpty' => false],

            [['name'], 'string', 'max' => 64],
            [['name', 'size'], 'default', 'value' => function($model, $attribute) {
                return $model->file->$attribute;
            }],
			[['size'], 'filterSize'],

            [['type'], 'string', 'max' => 32],
            [['type'], 'default', 'value' => function() {
                $type = FileHelper::getMimeType($this->file->tempName);
				return $type == null ? 'image/jpeg' : $type;
            }],
			[['type'], 'filterType'],
			['extname', 'default', 'value' => function() {
				$ext = FileHelper::getExtensionsByMimeType($this->type);
				$ext = is_array($ext) ? array_pop($ext) : '';
				return empty($ext) ? 'jpg' : $ext;
			}],

            [['filepath'], 'string', 'max' => 256],
            [['filepath'], 'default', 'value' => function() {
                $key = md5(microtime() . $this->file->name);
				$base = "{$this->info_table}/{$this->info_field}";
                if ($this->directoryLevel > 0) {
                    for ($i = 0; $i < $this->directoryLevel; ++$i) {
                        if (($prefix = substr($key, $i + $i, 2)) !== false) {
                            $base .= "/{$prefix}";
                        }
                    }
                }
                return $base . "/{$key}.{$this->extname}";
            }],
        ];
    }

	public function filterTableField()
	{
		$condition = $this->getFieldInfos($this->info_table, $this->info_field);
	    if ($condition === false) {
            $this->addError('info_table', '字段信息有误');
		}
		$this->created_at = time();

		return true;
	}

	public function filterSize()
	{
		$condition = $this->getFieldInfos($this->info_table, $this->info_field);
		$minSize = isset($condition['minSize']) ? $condition['minSize'] : 0.1;
		$maxSize = isset($condition['maxSize']) ? $condition['maxSize'] : 20;
		if ($this->size < $minSize * 1024 || $this->size > $maxSize * 1024) {
            $this->addError('size', "文件大小不能小于{$minSize}Kb，大于{$maxSize}Kb");
		}

		return true;
	}

	public function filterType()
	{
		$condition = $this->getFieldInfos($this->info_table, $this->info_field);
		$types = (array) $condition['type'];
		$typeStr = '';
		foreach ($types as $type) {
			if ($this->type == $type) {
				return true;
			}
			$typePrefix = substr($type, 0, strpos($type, '*'));
			if (!empty($typePrefix) && strpos($this->type, $typePrefix) !== false) {
				return true;
			}
			$typeStr .= $type . ';';
		}
        $this->addError('type', "文件类型只能是{$typeStr}");
		return false;
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '附件ID',
            'name' => '名称',
            'filename' => '名称',
            'orderlist' => '排序',
            'description' => '图片描述',
            'url' => 'URL地址',
            'size' => '大小',
            'type' => '类型',
            'extname' => '扩展名',
            'info_table' => '信息所在表',
            'info_field' => '所属字段',
            'info_id' => '信息ID',
            'created_at' => '上传时间',
        ];
    }

    /**
     * @inherited
     */
    public function beforeSave($insert)
    {
		if ($this->noFile) {
			return true;
		}
		if (!isset($this->file) || !($this->file instanceof UploadedFile)) {
			return false;
		}
		if (!parent::beforeSave($insert)) {
			return false;
		}

		$pathBase = $this->getPathBase($this->path_prefix);
		if (empty($pathBase)) {
            $this->addError('path_prefix', "文件存放路径有误");
			return false;
		}
		$filepath = $pathBase . '/' . $this->filepath;
        FileHelper::createDirectory(dirname($filepath));
        return $this->file->saveAs($filepath, false);
    }

	public function getPathBase($pathPrefix = null)
	{
		$pathParams = \Yii::$app->params['pathParams'];

		if (is_null($pathPrefix)) {
			return $pathParams;
		}

		$path = isset($pathParams[$pathPrefix]) ? $pathParams[$pathPrefix] : '';
		return $path;
	}

	public function getUrl($filepath = null, $urlPrefix = null)
	{
		$filepath = is_null($filepath) ? $this->filepath : $filepath;
		$urlPrefix = is_null($urlPrefix) ? $this->url_prefix : $urlPrefix;
		if (empty($urlPrefix)) {
			return $filepath;
		}

		$urlParams = \Yii::$app->params['urlParams'];
		$urlBase = isset($urlParams[$urlPrefix]) ? $urlParams[$urlPrefix] : '';

		$url = trim($urlBase, '/') . '/' . $filepath;
		return $url;
	}

    /**
     * @inherited
     */
    public function beforeDelete()
    {
		$filePath = $this->getPathBase($this->path_prefix) . '/' . $this->filepath;
		if (file_exists($filePath)) {
            unlink($filePath);
		}
        return true;
    }

	public static function updateBindInfo($condition, $ids, $infoId)
	{
		$ids = (array) $ids;
		$infos = self::find()->where($condition)->all();
		foreach ($infos as $info) {
			if (!in_array($info->id, $ids)) {
				$info->delete();
				continue ;
			} else {
    		    $info->info_id = $infoId;
    			$info->in_use = 1;
    			$info->noFile = true;
    			$info->update(false);
			}
		}

		return ;
	}

	public function getFieldIds($table, $field, $infoId)
	{
		if (empty($table) || empty($field) || empty($infoId)) {
			return '';
		}

		$condition = [
			'info_table' => $table,
			'info_field' => $field,
			'info_id' => $infoId,
			'in_use' => 1,
		];
		$infos = $this->find()->indexBy('id')->where($condition)->all();		

		if (empty($infos)) {
			return '';
		}
		return implode(',', array_keys($infos));
	}

	public function getFieldInfos($table = null, $field = null)
	{
		$infos = $this->_fieldInfos();

		if (is_null($table) && is_null($field)) {
			return $infos;
		}

		if (!isset($infos[$table])) {
			return false;
		}
		if (is_null($field)) {
			return $infos[$table];
		}
		if (!isset($infos[$table][$field])) {
			return false;
		}

		return $infos[$table][$field];
	}

	/**
	 * 更新附件信息
	 */
	public function updateInfo($id, $infoId, $extData)
	{
		$info = $this->findOne($id);
		if (empty($info)) {
			return ;
		}
		$info->info_id = $infoId;
   		$info->in_use = 1;
   	    $info->noFile = true;

		// 部分数据表会有一些专有的字段
		if (!empty($extData)) {
			foreach ($extData as $field => $value) {
				$info->$field = $value;
			}
		}
		// 处理附件的常用属性，名称、排序和描述
		$attrs = ['filename', 'orderlist', 'description'];
		foreach ($attrs as $attr) {
			$params = \Yii::$app->request->post('attachment_' . $attr, '');
			$value = isset($params[$id]) ? $params[$id] : '';
			$value = $attr == 'orderlist' ? intval($value) : $value;
			$info->$attr = $value;
		}
		//print_r($info);exit();
   		return $info->update(false);
	}

	/**
	 * 删除没用的附件
	 */
	public function deleteInfo($where, $noDeleteIds)
	{
		$infos = $this->find()->where($where)->all();
    	foreach ($infos as $info) {
			if (in_array($info->id, (array) $noDeleteIds)) {
				continue;
			}
			$info->delete();
		}
		return ;
	}
}
