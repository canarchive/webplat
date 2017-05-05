<?php
use yii\helpers\Html;

$tableName = 'owner_merchant';
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
		    <div data-original-title="" class="box-header well">
                <h2>业主信息</h2>
                <div class="box-icon">
                     <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                </div>
            </div> 
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->getAttributeLabel('mobile'); ?></th>
					    <th><?= $model->getAttributeLabel('city_code'); ?></th>
					    <th><?= $model->getAttributeLabel('service_id'); ?></th>
					    <th><?= $model->getAttributeLabel('house_id'); ?></th>
					    <th><?= $model->getAttributeLabel('num_merchant'); ?></th>
					    <th><?= $model->getAttributeLabel('num_weigh'); ?></th>
					    <th><?= $model->getAttributeLabel('status_order'); ?></th>
					    <th><?= $model->getAttributeLabel('created_at'); ?></th>
					    <th><?= $model->getAttributeLabel('updated_at'); ?></th>
					    <th><?= $model->getAttributeLabel('sendmsg_at'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $model->mobile; ?></td>
					    <td><?= $model->city_code; ?></td>
					    <td><?= $model->service_id; ?></td>
					    <td><?= $model->house_id; ?></td>
					    <td><?= $model->num_merchant; ?></td>
					    <td><?= $model->num_weigh; ?></td>
					    <td><?= $model->status_order; ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->updated_at); ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->sendmsg_at); ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
