<?php
$controller = $this->context;
$currentMenuUrl = $controller->menuInfos['currentMenu']['url'];

$url = Yii::$app->request->url;
$url .= strpos($url, '?') !== false ? '&' : '?';
?>
<div>
    <ul class="breadcrumb">
    </ul>
</div>
<div class="row">

    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2><i class="glyphicon glyphicon-user"></i>订单统计报表</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
                        <th>团购会ID</th>
                        <th>团购会名称</th>
                        <th>订单汇总</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach ($grouponInfos as $grouponId => $groupon) { ?>
                    <tr>
					    <td><?= $grouponId; ?></td>
					    <td><?= $groupon['groupon_name']; ?></td>
					    <td><a href='<?= $url . "groupon_id={$grouponId}&action=listinfo"; ?>' target="_blank">查看汇总信息</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>			
        </div>
    </div>
    <!--/span-->


</div>
