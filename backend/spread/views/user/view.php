<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

?>
<?php
echo $this->render('_base_user', ['modelUser' => $modelUser]);
echo $this->render('_listinfo_activity_user', ['activityUserInfos' => $activityUserInfos]);
echo $this->render('_listinfo_callback', ['callbackInfos' => $callbackInfos]);
?>
