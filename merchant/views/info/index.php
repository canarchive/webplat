<?php
use yii\helpers\Url;

$this->params['jsFooterFiles'] = [
	'jquery-2.1.0', 'foundation.min', 'highcharts.src',
	'footable', 'echarts.min', 'main_v2',
];
?>
<div class="container">
	<?= $this->render('_nav', ['curAction' => 'index']); ?>
    <section class="main-wrap dash-main-wrap">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">服务概览</div></div>
        </div>
        <div class="row full-width dash-item-list">
            <div class="small-12 medium-8 large-9 columns">
                <div class="row full-width dash-shopping">
                    <div class="small-12 columns">
                        <div class="item">
                            <div class="hd">
                                <h5>购买记录</h5></div>
                            <div class="bd">
                                <table class="table table-bordered table-striped footable order-list-table">
                                    <thead>
                                        <tr>
                                            <th data-hide="phone,tablet">订单号</th>
                                            <th>订单详细</th>
                                            <th data-hide="phone">商品数量</th>
                                            <th data-hide="phone">支付方式</th>
                                            <th>金额</th>
                                            <th data-hide="phone,tablet">时间</th>
                                            <th>状态</th>
                                            <th data-hide="phone">操作</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td height="36">#1107216</td>
                                            <td>短信10,000条标准包</td>
                                            <td>1</td>
                                            <td>
                                                <span class="label info radius">在线支付</span></td>
                                            <td>￥850.00</td>
                                            <td>2016-03-11 09:05:44</td>
                                            <td>
                                                <a href="https://my.luosimao.com/shop/order_list/3">
                                                    <span class="label success radius">已完成</span></a>
                                            </td>
                                            <td>-</td></tr>
                                        <tr>
                                            <td height="36">#1107215</td>
                                            <td>短信10,000条标准包</td>
                                            <td>1</td>
                                            <td>
                                                <span class="label info radius">在线支付</span></td>
                                            <td>￥850.00</td>
                                            <td>2016-03-11 08:55:46</td>
                                            <td>
                                                <a href="https://my.luosimao.com/shop/order_list/2">
                                                    <span class="label secondary radius">已取消</span></a>
                                            </td>
                                            <td>-</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 medium-4 large-3 columns">
                <div class="aside-section account-info">
                    <div class="hd">
                        <a href="https://my.luosimao.com/auth/setting" class="right">修改</a>
                        <h5>账户信息</h5></div>
                    <div class="bd">
                        <label>用户名</label>iamwangcan
                        <label>电子邮件</label>iamwangcan@163.com
                        <label>联系电话</label>13811974106
                        <div class="panel callout radius">请确保联系方式正确及畅通,便于我们及时通知相关事务</div></div>
                </div>
            </div>
        </div>
    </section>
</div>
