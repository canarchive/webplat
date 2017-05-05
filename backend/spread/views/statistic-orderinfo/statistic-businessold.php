<?php
$controller = $this->context;
$currentMenuUrl = $controller->menuInfos['currentMenu']['url'];
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
                        <th>序号</th>
                        <th>项目</th>
                        <th>品类</th>
                        <th>名称</th>
                        <th>下单日期</th>
                        <th>签单数(总签单数)</th>
                        <th>订金金额(总定金金额）</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach ($datas as $key => $data) { ?>
                    <tr>
					    <td><?= $key + 1; ?></td>
					    <td><?= $data['business_sort_big']; ?></td>
					    <td><?= $data['business_sort']; ?></td>
					    <td><?= $data['business_name']; ?></td>
					    <td><?= $data['created_day']; ?></td>
					    <td><?= $data['count'] . ' ( ' . $data['totalCount'] . ' )'; ?></td>
					    <td><?= $data['money'] . ' ( ' . $data['totalMoney'] . ' )'; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->


</div>
