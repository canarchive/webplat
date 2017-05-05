<?php
use yii\helpers\Html;
?>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<input type="hidden" id="position" value="" />
<input type="hidden" id="position_name" value="" />
<input type="hidden" id="info_id" value="<?= $info['id']; ?>" />
<input type="hidden" id="brand_id" value="" />
<input type="hidden" id="product_id" value="" />
<input type="hidden" id="message" value="" />
<input id="template_code" name="template_code" value="default" type="hidden" />
