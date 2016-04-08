<?php

namespace backend\components;

use Yii;
use yii\helpers\Html;
use yii\grid\ActionColumn;

class CustomActionColumn extends ActionColumn
{
    public $template = '{view} {update} {delete}';

    public function init()
    {
        parent::init();
    	$this->buttonOptions = array_merge([
    		'view' => [],
    		'update' => [],
    		'delete' => [],
    		'authority' => [],
    		'other' => [],
    	], (array) $this->buttonOptions);
        $this->initDefaultButtons();
    }

    /**
     * Initializes the default button rendering callbacks.
     */
    protected function initDefaultButtons()
    {
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                ], $this->buttonOptions['view']);
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                ], $this->buttonOptions['update']);
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ], $this->buttonOptions['delete']);
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, $options);
            };
        }

        if (!isset($this->buttons['authority'])) {
            $this->buttons['authority'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('admin-common', 'Authority'),
                    'aria-label' => Yii::t('admin-common', 'Authority'),
                    'data-pjax' => '0',
                ], $this->buttonOptions['authority']);
                return Html::a(Yii::t('admin-common', 'Authority'), $url, $options);
            };
        }

        if (!isset($this->buttons['other'])) {
            $this->buttons['other'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('admin-common', 'Other'),
                    'aria-label' => Yii::t('admin-common', 'Other'),
                    'data-pjax' => '0',
                ], $this->buttonOptions['other']);
                return Html::a(Yii::t('admin-common', 'Other'), $url, $options);
            };
        }
		//print_r(array_keys($this->buttons));exit();
    }
}
