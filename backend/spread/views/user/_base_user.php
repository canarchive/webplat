<?php
use yii\helpers\Html;

?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $modelUser->getAttributeLabel('sort'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('name'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('gender'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('birthday'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('telphone'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('email'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('qq'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $modelUser->sortInfos[$modelUser->sort]; ?></td>
					    <td><?= $modelUser->name; ?></td>
						<td><?= $modelUser->genderInfos[$modelUser->gender]; ?></td>
						<td><?= $modelUser->birthday; ?></td>
						<td><?= $modelUser->telphone; ?></td>
						<td><?= $modelUser->email; ?></td>
						<td><?= $modelUser->qq; ?></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th><?= $modelUser->getAttributeLabel('service_id'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('signup_num'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('signin_num'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('order_num'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('created_at'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('updated_at'); ?></th>
					    <th><?= $modelUser->getAttributeLabel('description'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td><?= $modelUser->service_id; ?></td>
					    <td><?= $modelUser->signup_num; ?></td>
					    <td><?= $modelUser->signin_num; ?></td>
					    <td><?= $modelUser->order_num; ?></td>
					    <td><?= date('Y-m-d H:i:s', $modelUser->created_at); ?></td>
					    <td><?= date('Y-m-d H:i:s', $modelUser->updated_at); ?></td>
					    <td><?= $modelUser->description; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
