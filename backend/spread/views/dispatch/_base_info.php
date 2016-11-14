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
					    <th><?= $model->getAttributeLabel('merchant_id'); ?></th>
					    <th><?= $model->getAttributeLabel('service_id'); ?></th>
					    <th><?= $model->getAttributeLabel('created_at'); ?></th>
					    <th><?= $model->getAttributeLabel('updated_at'); ?></th>
					    <th><?= $model->getAttributeLabel('view_at'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $model->mobile; ?></td>
					    <td><?= $model->city_code; ?></td>
					    <td><?= $model->merchant_id; ?></td>
					    <td><?= $model->service_id; ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->created_at); ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->updated_at); ?></td>
					    <td><?= date('Y-m-d H:i:s', $model->view_at); ?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->getAttributeLabel('weigh_book'); ?></th>
					    <th><?= $model->getAttributeLabel('weigh_at'); ?></th>
					    <th><?= $model->getAttributeLabel('weigh_no_reason'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>
                        <input type="hidden" id="weigh_book_old" value="<?= date('Y-m-d H:i:s', $model->weigh_book); ?>" />
						<input class="form-control" type="text" id="weigh_book" onblur="changeDate('<?= $tableName; ?>', <?= $model->id; ?>, 'weigh_book', this.value)" value="<?= date('Y-m-d H:i:s', $model->weigh_book); ?>">
                        <script type="text/javascript">
                            $(function () {
                                $('#weigh_book').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                            });
                        </script>
                        </td>
					    <td>
                        <input type="hidden" id="weigh_at_old" value="<?= date('Y-m-d H:i:s', $model->weigh_at); ?>" />
						<input class="form-control" type="text" id="weigh_at" onblur="changeDate('<?= $tableName; ?>', <?= $model->id; ?>, 'weigh_at', this.value)" value="<?= date('Y-m-d H:i:s', $model->weigh_at); ?>">
                        <script type="text/javascript">
                            $(function () {
                                $('#weigh_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                            });
                        </script>
                        </td>
                        <td>
						<input class="form-control" type="text" id="weigh_no_reason" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'weigh_no_reason', this.value)">
                        </td>
					    <td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->getAttributeLabel('order_at'); ?></th>
					    <th><?= $model->getAttributeLabel('order_no_reason'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>
                        <input type="hidden" id="order_at_old" value="<?= date('Y-m-d H:i:s', $model->order_at); ?>" />
						<input class="form-control" type="text" id="order_at" onblur="changeDate('<?= $tableName; ?>', <?= $model->id; ?>, 'order_at', this.value)" value="<?= date('Y-m-d H:i:s', $model->order_at); ?>">
                        <script type="text/javascript">
                            $(function () {
                                $('#order_at').datetimepicker({locale: 'zh-CN', format: 'YYYY-MM-DD HH:mm:ss'});
                            });
                        </script>
                        </td>
                        <td>
						<input class="form-control" type="text" id="order_no_reason" onchange="updateElemForUser('<?= $tableName; ?>', <?= $model->id; ?>, 'order_no_reason', this.value)">
                        </td>
					    <td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $model->getAttributeLabel('note'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $model->note; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
