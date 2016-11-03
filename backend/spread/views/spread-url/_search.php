<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$formName = $model->formName();
?>
<div class="row">
<div class="box col-md-12">
    <div class="box-inner">
        <div class="box-header well" data-original-title="">
            <h2><i class="glyphicon glyphicon-edit"></i>对话管理</h2>
        </div>
        <div class="box-create">
            <?php
            $form = ActiveForm::begin([
                'id' => 'list-form',
				'method' => 'get',
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">城市</label>
                <div class="col-md-2">
					<?= Html::dropDownList(
						"city_code", 
						0, 
						$cInfos, 
						[
							'prompt' => '全部', 
							'class' => 'form-control',
						]
					) ?>
				</div>
                <label class="control-label col-md-1">推广域名</label>
                <div class="col-md-2">
					<?= Html::dropDownList(
						"domain_key", 
						0, 
						$hostKeys, 
						[
							'prompt' => '全部', 
							'class' => 'form-control',
						]
					) ?>
				</div>
                <label class="control-label col-md-1">推广渠道</label>
                <div class="col-md-2">
					<?= Html::dropDownList(
						"channel_big", 
						0, 
						$channelBigInfos, 
						[
							'prompt' => '全部', 
							'class' => 'form-control',
						]
					) ?>
				</div>
                <input type="hidden" name="show_full" id="show_full" value="" />
                <div class="col-md-3">
                    <?= Html::submitButton(Yii::t('app', '查看链接'), ['class' => 'btn btn-primary']) ?>
                    <?= Html::submitButton(Yii::t('app', '完整链接'), ['class' => 'btn btn-primary', 'onclick' => '$("#show_full").val(1);']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
<script>
function showFull()
{
    //window.location.href="?groupon_id=" + groupon_id; 
}
</script>
