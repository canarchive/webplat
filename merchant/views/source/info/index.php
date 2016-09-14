<?php
use yii\helpers\Url;

$this->params['jsFooterFiles'] = [
	'jquery-2.1.0', 'foundation.min', 'highcharts.src',
	'footable', 'echarts.min', 'main_v2',
];
?>
<div class="container">
    <aside class="sidebar">
        <ul class="side-list">
            <li class="active">
                <a href="https://my.luosimao.com/">服务概览</a></li>
            <li>
                <a href="https://my.luosimao.com/article">网站公告</a></li>
            <li>
                <a href="https://my.luosimao.com/auth/setting">账号设置</a></li>
            <li>
                <a href="https://my.luosimao.com/user/user_log">安全日志</a></li>
        </ul>
    </aside>
    <section class="main-wrap dash-main-wrap">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">服务概览</div></div>
        </div>
        <div class="row full-width dash-item-list">
            <div class="small-12 medium-8 large-9 columns">
                <div class="row full-width chart-grid-line">
                    <div class="small-12 medium-12 large-6 columns">
                        <div class="item">
                            <div class="hd">
                                <span class="total">余额
                                    <i class="num">9,649</i>
                                    <a href="https://my.luosimao.com/shop/goods/message" title="立即充值">立即充值</a></span>
                                <h5>短信服务
                                    <span class="etc">（单位:条）</span></h5>
                            </div>
                            <div class="bd">
                                <div class="chart">
                                    <div class="row full-width detail-data">
                                        <div class="small-4 columns">
                                            <span class="num">0</span>
                                            <span class="word">今日</span></div>
                                        <div class="small-4 columns">
                                            <span class="num">2</span>
                                            <span class="word">本周(截至昨日)</span></div>
                                        <div class="small-4 columns">
                                            <span class="num">371</span>
                                            <span class="word">累计发送(截至昨日)</span></div>
                                    </div>
                                    <div class="chart-detail" id="dash_sms_chart" style="width:100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-12 large-6 columns">
                        <div class="item">
                            <div class="hd">
                                <span class="total">余额
                                    <i class="num">0</i>
                                    <a href="https://my.luosimao.com/shop/goods/voice" title="立即充值">立即充值</a></span>
                                <h5>语音验证
                                    <span class="etc">（单位:通）</span></h5>
                            </div>
                            <div class="bd">
                                <div class="row full-width detail-data">
                                    <div class="small-4 columns">
                                        <span class="num">0</span>
                                        <span class="word">今日</span></div>
                                    <div class="small-4 columns">
                                        <span class="num">0</span>
                                        <span class="word">本周(截至昨日)</span></div>
                                    <div class="small-4 columns">
                                        <span class="num">0</span>
                                        <span class="word">累计发送(截至昨日)</span></div>
                                </div>
                                <div class="chart">
                                    <div class="chart-detail" id="dash_voice_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row full-width chart-grid">
                    <div class="small-12 medium-12 large-6 columns">
                        <div class="item">
                            <div class="hd">
                                <span class="total">余额
                                    <i class="num">0</i>
                                    <a href="https://my.luosimao.com/shop/goods/mail" title="立即充值">立即充值</a></span>
                                <h5>邮件服务
                                    <span class="etc">（单位:封）</span></h5>
                            </div>
                            <div class="bd">
                                <div class="row full-width detail-data">
                                    <div class="small-4 columns">
                                        <span class="num">0</span>
                                        <span class="word">今日</span></div>
                                    <div class="small-4 columns">
                                        <span class="num">0</span>
                                        <span class="word">本周(截至昨日)</span></div>
                                    <div class="small-4 columns">
                                        <span class="num">0</span>
                                        <span class="word">累计发送(截至昨日)</span></div>
                                </div>
                                <div class="chart">
                                    <div class="chart-detail" id="dash_mail_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-12 large-6 columns">
                        <div class="item">
                            <div class="hd">
                                <span class="total">版本
                                    <i class="num">免费</i></span>
                                <h5>人机验证
                                    <span class="etc">（单位:次）</span></h5>
                            </div>
                            <div class="bd">
                                <div class="row full-width detail-data">
                                    <div class="small-4 columns">
                                        <span class="num">0</span>
                                        <span class="word">今日</span></div>
                                    <div class="small-4 columns">
                                        <span class="num">57</span>
                                        <span class="word">本周(截至昨日)</span></div>
                                    <div class="small-4 columns">
                                        <span class="num">57</span>
                                        <span class="word">累计验证(截至昨日)</span></div>
                                </div>
                                <div class="chart">
                                    <div class="chart-detail" id="dash_captcha_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="aside-section site-notice">
                    <div class="hd">
                        <a href="https://my.luosimao.com/article" class="right">查看所有</a>
                        <h5>最新公告</h5></div>
                    <div class="bd">
                        <ul class="notice-block no-bullet">
                            <li>
                                <span class="dot"></span>
                                <a href="https://my.luosimao.com/article/detail/76" class="tit im">服务价格调整公告</a>
                                <span class="timer">07-13 10:57:20</span></li>
                            <li>
                                <span class="dot"></span>
                                <a href="https://my.luosimao.com/article/detail/63" class="tit im">关于防范短信被刷的重要通知</a>
                                <span class="timer">07-29 11:04:00</span></li>
                            <li>
                                <span class="dot"></span>
                                <a href="https://my.luosimao.com/article/detail/74" class="tit ">近期网站重要功能更新公告</a>
                                <span class="timer">05-07 12:50:21</span></li>
                            <li>
                                <span class="dot"></span>
                                <a href="https://my.luosimao.com/article/detail/73" class="tit ">2016年春节放假期间工作安排通知</a>
                                <span class="timer">01-22 10:54:14</span></li>
                            <li>
                                <span class="dot"></span>
                                <a href="https://my.luosimao.com/article/detail/71" class="tit ">2015年国庆放假期间工作安排通知</a>
                                <span class="timer">09-25 11:15:24</span></li>
                            <li>
                                <span class="dot"></span>
                                <a href="https://my.luosimao.com/article/detail/69" class="tit ">2015年春节放假期间工作安排通知</a>
                                <span class="timer">02-04 11:08:39</span></li>
                        </ul>
                    </div>
                </div>
                <div class="aside-section dash-help">
                    <div class="bd">
                        <h6>购买相关</h6>
                        <div class="row">
                            <div class="small-6 columns">
                                <a href="https://luosimao.com/docs/guid/17#offline" target="_blank">线下打款流程</a></div>
                            <div class="small-6 columns">
                                <a href="https://luosimao.com/docs/guid/17#vat">发票开具相关</a></div>
                        </div>
                        <h6>短信服务</h6>
                        <div class="row">
                            <div class="small-6 columns">
                                <a href="https://luosimao.com/docs/sms/8#check" target="_blank">短信内容须知</a></div>
                            <div class="small-6 columns">
                                <a href="https://luosimao.com/docs/api/" target="_blank">短信接口文档</a></div>
                        </div>
                        <div class="row">
                            <div class="small-6 columns">
                                <a href="https://my.luosimao.com/article/detail/63" target="_blank">接口被刷解决方案</a></div>
                            <div class="small-6 columns"></div>
                        </div>
                        <h6>语音验证</h6>
                        <div class="row">
                            <div class="small-6 columns">
                                <a href="https://luosimao.com/docs/api/51" target="_blank">语音接口文档</a></div>
                            <div class="small-6 columns"></div>
                        </div>
                        <h6>人机验证</h6>
                        <div class="row">
                            <div class="small-6 columns">
                                <a href="https://luosimao.com/docs/api/56" target="_blank">人机验证接口文档</a></div>
                            <div class="small-6 columns"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
$this->params['jsFooterString'] = <<<JSSTRING
<script>var send_info = $.parseJSON('[{"x":"16\/09\/01","y":"0"},{"x":"16\/09\/02","y":"0"},{"x":"16\/09\/03","y":"0"},{"x":"16\/09\/04","y":"0"},{"x":"16\/09\/05","y":"0"},{"x":"16\/09\/06","y":"2"},{"x":"16\/09\/07","y":0}]');
    var mail_info = $.parseJSON('[{"x":"16\/09\/01","y":"0"},{"x":"16\/09\/02","y":"0"},{"x":"16\/09\/03","y":"0"},{"x":"16\/09\/04","y":"0"},{"x":"16\/09\/05","y":"0"},{"x":"16\/09\/06","y":"0"},{"x":"16\/09\/07","y":0}]');
    var voice_info = $.parseJSON('[{"x":"16\/09\/01","y":"0"},{"x":"16\/09\/02","y":"0"},{"x":"16\/09\/03","y":"0"},{"x":"16\/09\/04","y":"0"},{"x":"16\/09\/05","y":"0"},{"x":"16\/09\/06","y":"0"},{"x":"16\/09\/07","y":0}]');
    var captcha_info = $.parseJSON('[{"label":"91\u6700\u7231","data":[{"x":"16\/09\/01","y":0},{"x":"16\/09\/02","y":0},{"x":"16\/09\/03","y":0},{"x":"16\/09\/04","y":0},{"x":"16\/09\/05","y":0},{"x":"16\/09\/06","y":"2"},{"x":"16\/09\/07","y":"55"},{"x":"16\/09\/08","y":"0"}]}]');</script>
JSSTRING;
?>
