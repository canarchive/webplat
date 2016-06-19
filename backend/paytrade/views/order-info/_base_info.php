<?php
use yii\helpers\Html;

$tableName = 'order_info';
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->userInfo->getAttributeLabel('id'); ?></th>
					    <th><?= $model->userInfo->getAttributeLabel('mobile'); ?></th>
					    <th><?= $model->getAttributeLabel('goods_id'); ?></th>
					    <th><?= $model->getAttributeLabel('pay_money'); ?></th>
					    <th><?= $model->getAttributeLabel('note'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $model->userInfo->id; ?></td>
					    <td><?= $model->mobile; ?></td>
                        <td>
    					<?= Html::dropDownList(
    						"goods_id", 
    						$model->goods_id, 
    						$model->goodsInfos, 
    						[
    							'prompt' => '全部', 
    							'class' => 'form-control',
    						]
    					); ?>
                        </td>
						<td><input type="text" name="pay_money" value="<?= $model->pay_money; ?>"/></td>
                        <td><?= Html::textarea('note', $model->note, ['row' => 2]); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
