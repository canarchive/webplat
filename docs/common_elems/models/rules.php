<?php
return [
    ['username', 'filter', 'filter' => 'trim'],
    ['username', 'required'],
    ['username', 'unique', 'targetClass' => '\backend\models\Manager', 'message' => 'This username has already been taken.'],
    ['username', 'string', 'min' => 2, 'max' => 255],
    [['size'], 'integer'],
    ['rememberMe', 'boolean'],

			[['start_at', 'end_at'], 'filter', 'filter' => function($value) {
				return strtotime($value);
			}],

    [['file'], 'file', 'skipOnEmpty' => false],
    [['uploadPath'], 'required', 'when' => function($obj) {
        return empty($obj->filename);
    }],
    [['name', 'size'], 'default', 'value' => function($obj, $attribute) {
        return $obj->file->$attribute;
    }],
    [['type'], 'default', 'value' => function() {
        return FileHelper::getMimeType($this->file->tempName);
    }],
	[['info_table', 'info_field', 'info_id'], 'default', 'value' => function($model, $attribute) {
		return $model->$attribute;				
    }],		
    [['filename'], 'default', 'value' => function() {
        $key = md5(microtime() . $this->file->name);
        $base = Yii::getAlias($this->uploadPath);
        if ($this->directoryLevel > 0) {
            for ($i = 0; $i < $this->directoryLevel; ++$i) {
                if (($prefix = substr($key, $i + $i, 2)) !== false) {
                    $base .= DIRECTORY_SEPARATOR . $prefix;
                }
            }
        }
        return $base . DIRECTORY_SEPARATOR . "{$key}_{$this->file->name}";
    }],

    ['password', 'validatePassword'],

    ['status', 'default', 'value' => self::STATUS_ACTIVE],
    ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
];
