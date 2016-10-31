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
                //'action' => Url::toRoute('channel-log-success/listinfo'),
                'options' => ['class' => 'form-horizontal'],
            ]);
            ?>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">添加时间</label>
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
                <label class="control-label col-md-1">状态</label>
                <div class="col-md-2">
					<?= Html::dropDownList(
						"{$formName}[status]", 
						'', 
						$model->statusInfos, 
						[
							'prompt' => '全部', 
							'class' => 'form-control',
						]
					) ?>
				</div>
            </div>
            <div class="form-group form-group-sm">
                <label class="control-label col-md-1">更新时间</label>
                <div class="col-md-2">
				    <input class="form-control" type="text" id="updated_at_start" name="<?= "{$formName}[updated_at_start]"; ?>" >
                    <script type="text/javascript">
                        $(function () {
                            $('#updated_at_start').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                        });
                    </script>
                </div>
                <div class="col-md-2">
				    <input class="form-control" type="text" id="updated_at_end" name="<?= "{$formName}[updated_at_end]"; ?>" >
                    <script type="text/javascript">
                        $(function () {
                            $('#updated_at_end').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                        });
                    </script>
                </div>
                <label class="control-label col-md-1">名称</label>
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
