<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['sms'];
$this->params['jsFooterFiles'] = [
	'jquery-2.1.0', 'foundation.min',
	'main',
];
$this->params['currentNav'] = 'owner';
Yii::$app->params['seoTitle'] = '业主信息列表-' . Yii::$app->params['seoTitle'];
?>
<nav class="top-bar show-for-small" data-topbar>
    <div class="topbar-title">
        <a href="#" class="toggle-topbar">短信服务
            <i class="fa fa-bars"></i></a>
    </div>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li>
                <a href="https://sms-my.luosimao.com/send/batch">批量发送</a></li>
            <li>
                <a href="https://sms-my.luosimao.com/api">触发发送</a></li>
            <li>
                <a href="https://sms-my.luosimao.com/signature">签名管理</a></li>
            <li class="active">
                <a href="https://sms-my.luosimao.com/template/index">短信模板</a></li>
            <li>
                <a href="https://sms-my.luosimao.com/send/history">发送历史</a></li>
            <li>
                <a href="https://sms-my.luosimao.com/incoming">上行回复</a></li>
            <li>
                <a href="https://sms-my.luosimao.com/setting">余额提醒</a></li>
            <li>
                <a href="https://sms-my.luosimao.com/api/white_list">IP白名单</a></li>
            <li>
                <a href="https://sms-my.luosimao.com/send/push">推送设置</a></li>
            <!-- <li><a href="https://sms-my.luosimao.com/send/black">黑名单</a></li>
            -->
        </ul>
    </section>
</nav>
<div class="container">
    <?= $this->render('_nav', ['curAction' => 'index']); ?>
    <section class="main-wrap sms-container">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">业主信息</div>
				<!--<div class="sub-title">使用接口进行发送时会将进行模板匹配,符合模板的内容将不再进行审核，您可以在这里查看、提交模板。</div>-->
            </div>
            <script>var url_key = '';</script>
            <ul class="breadcrumbs">
                <li>业主</li>
                <li>业主列表</li></ul>
        </div>
        <div class="row full-width">
            <div class="small-12 columns">
                <div class="block">
                    <div class="block-hd">
                        <h2>业主列表</h2></div>
                    <div class="block-bd">
                        <table class="table table-bordered sms-template-list footable">
                            <thead>
                                <tr>
                                    <th data-hide="phone" class="num">ID</th>
                                    <th data-hide="phone,tablet" class="time">手机号</th>
                                    <th data-hide="phone,tablet" class="time">派单时间</th>
                                    <th class="status">状态</th>
                                    <th class="content">业主描述</th>
                                    <!--<th data-hide="phone" class="ctr">操作</th></tr>-->
                            </thead>
                            <tbody>
                                <?php foreach ($infos as $info) { ?>
                                <tr>
								    <td><?= $info['id']; ?></td>
								    <td><?= $info['mobile']; ?></td>
								    <td><?= date('Y-m-d', $info['created_at']); ?></td>
								    <td><?= $info->statusInfos[$info['status']]; ?></td>
								    <td><?= $info['note']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="pagination-centered"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="//s.luosimao.com/js/jquery-2.1.0.js?v=201608251421.js"></script>
<script src="//s.luosimao.com/js/plugin/table/footable.js?v=201608251421.js"></script>
<script src="//s.luosimao.com/js/plugin/tooltip/tooltips.js?v=201608251421.js"></script>
<script src="//s.luosimao.com/js/foundation.min.js?v=201608251421.js"></script>
<script src="//s.luosimao.com/js/mustache.js?v=201608251421.js"></script>
<script src="//s.luosimao.com/js/module/sms.js?v=201608251421.js"></script>

