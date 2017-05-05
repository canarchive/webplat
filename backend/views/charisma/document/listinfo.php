<?php

use yii\helpers\Html;
use yii\helpers\Url;

$documentCodes = [
	'base' => '简介', 
	'backend_panel' => '我的面板', 
	'backend_manager' => '管理员、操作和权限',
	'backend_document_database' => '日志和表结构',
	'spread_casher_business' => '团购会收银机-商家四联单的管理',
	'spread_casher_orderinfo' => '团购会收银机-商家订单的管理',
];
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($documentCodes as $code => $value) { ?>
                    <?php if ($i % 4 == 0) { echo '<tr>'; }?>
					    <td><a href="<?= Url::to(['document/view', 'code' => $code]); ?>" target="_blank"><?= $value; ?></a></td>
                    <?php if ($i % 4 == 3) { echo '</tr>'; }?>
                    <?php $i++; } ?>
                    <?php if ($i % 4 != 3) { echo '</tr>'; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
