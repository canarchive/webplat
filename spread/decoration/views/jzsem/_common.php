<?php
use yii\helpers\Html;
?>
<input type="hidden" id="position" value="common" />
<input type="hidden" id="position_name" value="标准页面" />
<input type="hidden" id="info_id" value="<?= $info['id']; ?>" />
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
