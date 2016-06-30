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
            <h2><i class="glyphicon glyphicon-edit"></i>信息检索</h2>
        </div>
        <div class="box-create">
            <?php
            $form = ActiveForm::begin([
                'id' => 'list-form',
				'method' => 'get',
                //'action' => Url::toRoute('channel-log-success/listinfo'),
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">一级地区</label>
                <div class="col-md-2">
					<?= Html::dropDownList(
						"{$formName}[level_first]", 
						0, 
						$levelFirstInfos, 
						[
							'prompt' => '全部', 
							'class' => 'form-control',
                            'onchange'=>'$.get("' . Url::to(['region/listinfo']) . '?action=subInfos&parent_code=' . '"+$(this).val(),function(data){
								var htmlContent = "<option value=\"\"></option>";
								$.each(data, function(i, v) {
									htmlContent += "<option value=\"" + i + "\">" + v + "</option>";
								});
alert(htmlContent);

                                $("#level_second_content").html(htmlContent);
                            });',
						]
					) ?>
                </div>

                <label class="control-label col-md-1">二级地区</label>
                <div class="col-md-2">
                    <?= Html::dropDownList("{$formName}[parent_code]", 0, [], ['prompt' => '全部', 'class' => 'form-control', 'id' => 'level_second_content']) ?>
                </div>

                <label class="control-label col-md-1">代码或名称</label>
                <div class="col-md-1" style="padding-left:5px;padding-right:5px">
					<input class="form-control" type="text" name="<?= "{$formName}[name]"; ?>">
                </div>
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
