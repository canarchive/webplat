<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$currentMenu = $this->context->menuInfos['currentMenu'];
$formName = $model->formName();
?>
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
                'action' => $currentMenu['url'],
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">录入时间</label>
                <div class="col-md-2">
				    <input class="form-control" type="text" id="created_at_start" name="<?= "{$formName}[created_at_start]"; ?>" >
                    <script type="text/javascript">
                        $(function () {
                            $('#created_at_start').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                        });
                    </script>
                </div>
                <div class="col-md-2">
				    <input class="form-control" type="text" id="created_at_end" name="<?= "{$formName}[created_at_end]"; ?>" >
                    <script type="text/javascript">
                        $(function () {
                            $('#created_at_end').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                        });
                    </script>
                </div>
                <?php if (!isset($currentManager)) { ?>
                <label class="control-label col-md-1">管理员</label>
                <div class="col-md-2">
					<?= Html::dropDownList(
						"{$formName}[manager_id]", 
						0, 
						$managerInfos, 
						[
							'prompt' => '全部', 
							'class' => 'form-control',
						]
					) ?>
				</div>
                <?php } ?>
                <div class="col-md-2">
                    <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
