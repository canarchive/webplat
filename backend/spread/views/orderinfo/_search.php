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
            <h2><i class="glyphicon glyphicon-edit"></i>检索</h2>
        </div>
        <div class="box-create">
            <?php
            $form = ActiveForm::begin([
                'id' => 'list-form',
				'method' => 'get',
                'action' => Url::toRoute('orderinfo/listinfo'),
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">所属团购会</label>
                <div class="col-md-2">
					<?= Html::dropDownList(
						"{$formName}[groupon_id]", 
						0, 
						$model->grouponInfos, 
						[
							'prompt' => '全部', 
							'class' => 'form-control',
							'id' => 'groupon_id',
						]
					) ?>
				</div>
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('app', '搜索'), ['class' => 'btn btn-primary']) ?>
                    <?= Html::submitButton(Yii::t('app', '导出'), ['class' => 'btn btn-primary', 'onclick' => 'exportData();return false;']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
<script>
function exportData()
{
	var groupon_id = $('#groupon_id').val();
	if (!groupon_id) {
		alert('请选择指定的团购会！');
		return ;
	}
	window.location.href="<?= Url::to(['orderinfo/export']); ?>?groupon_id=" + groupon_id; 
}
</script>
