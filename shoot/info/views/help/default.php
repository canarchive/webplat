<?php
$this->params['cssFiles'] = ['styles'];
$this->params['info'] = $info;

Yii::$app->params['seoTitle'] = $info['name'] . Yii::$app->params['seoTitle'];
Yii::$app->params['seoDescription'] = $info['description'] . Yii::$app->params['seoTitle'];

echo $info['content']; 
?>
