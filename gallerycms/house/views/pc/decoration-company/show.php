<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'pages/provider/index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'lib/bootstrap.carousel',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'中博装饰|【中博】杭州中博装饰工程有限公司-杭州兔狗官网';
//'中博装饰,【中博】杭州中博装饰工程有限公司,杭州兔狗官网';
//'中博装饰是杭州兔狗官网提供的装修设计公司。中博装饰免费为广大杭州业主提供专业的验房、设计、监理服务。了解中博装饰怎么样？速上杭州兔狗官网！';

$infos[] = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
$this->params['showPage'] = true;
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/lib/apply-form.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/components/arrow.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-nav.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-common.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-index.css" />
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-common.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-index.js"></script>
<div class="pd-header">
    <?php echo $this->render('../common/_nav_mini', []); // 内容页顶部 ?>
    <!-- <div class="pd-for-nav"></div> -->
    <!-- 面包屑导航主页样式 -->
    <div class="crumbs">
        <a href="/">首页</a>
        <span class="sep">&gt;</span>
        <a href="/provider/">杭州装修公司</a>
        <span class="sep">&gt;</span>
        <a href="/provider/92/">
            <span class="btn-crumbs">中博装饰
                <i class="i-del"></i></span>
        </a>
    </div>
    <section class="pd-h-header">
        <div class="pd-hh-logo">
            <img src="http://pic.tugou.com/provider/1450923590_735233.jpeg" alt="中博装饰" class="pd-logo">
            <p class="pd-btn-design pd-btn free-order-pop">免费设计与报价</p>
            <p class="pd-hh-usercount">已服务&nbsp;&nbsp;
                <a>3620</a>&nbsp;&nbsp;位业主</p>
        </div>
        <div class="pd-hh-desc">
            <div class="pd-name">
                <h1>中博装饰</h1></div>
            <div class="pd-current">
                <p>
                    <span class="pd-icon pd-icon-house">&nbsp;</span>实景作品:
                    <a class="pd-current-cnt">4</a></p>
                <p>
                    <span class="pd-icon pd-icon-carry"></span>直播工地:
                    <a class="pd-current-cnt">4</a></p>
            </div>
            <p class="pd-introduction">打造全环保精装品牌，浙江省连续10年环保抽检合格！</p></div>
        <div class="pd-hh-cert">
            <p class="pd-hc-item">
                <span class="pd-icon pd-icon-bao"></span>保障金先行赔付</p>
            <p class="pd-hc-item">
                <span class="pd-icon pd-icon-zheng"></span>施工资质权威认证</p>
            <p class="pd-hc-item">
                <span class="pd-icon pd-icon-huan"></span>环保用材，绿色施工</p>
            <p class="pd-contact">
                <span class="pd-icon pd-icon-phone"></span>预约热线</p>
            <a class="pd-contact">400-8617-000</a></div>
    </section>
</div>
<section class="pd-main">
    <div class="pd-main-body">
        <div class="pd-m-nav-box">
            <ul class="pd-m-nav">
                <li class="pd-nav-item pd-btn active" target="pd-index">
                    <a href="/provider/92/">首页</a>
                    <span class="pd-caret-down"></span>
                    <a href="/provider/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-realcase">
                    <a href="/realcase/92/">实景作品</a>
                    <span class="pd-caret-down"></span>
                    <a href="/realcase/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-buildfield">
                    <a href="/site/92/">直播工地</a>
                    <span class="pd-caret-down"></span>
                    <a href="/site/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-designer">
                    <a href="/design/92/">设计师</a>
                    <span class="pd-caret-down"></span>
                    <a href="/design/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-selfintro">
                    <a href="/provider/92/tro.html">品牌简介</a>
                    <span class="pd-caret-down"></span>
                    <a href="/provider/92/tro.html" class="pd-nav-link"></a>
                </li>
            </ul>
        </div>
        <!-- 首页 -->
        <div class="pd-index active">
            <div class="pd-m-apply">
                <p class="pd-title">最新申请设计服务
                    <span class="pd-ma-btn pd-btn free-order-pop">我要申请</span></p>
                <div class="pd-m-thead">
                    <table class="pd-table pd-thead">
                        <thead>
                            <tr>
                                <th>业主</th>
                                <th>小区</th>
                                <th>面积</th>
                                <th>风格</th>
                                <th>预算</th>
                                <tr></thead>
                        <tbody>
                            <!-- 默认封装真实的全部数据，保持上下table 的header一致 -->
                            <tr>
                                <td>李先生</td>
                                <td>景芳二区</td>
                                <td>35m&sup2;</td>
                                <td>简约</td>
                                <td>5-6万</td></tr>
                            <tr>
                                <td>张先生</td>
                                <td>白马山庄天晴居</td>
                                <td>256m&sup2;</td>
                                <td>简约</td>
                                <td>15-18万</td></tr>
                            <tr>
                                <td>吴先生</td>
                                <td>联合格里</td>
                                <td>150m&sup2;</td>
                                <td>欧式</td>
                                <td>20-23万</td></tr>
                            <tr>
                                <td>罗先生</td>
                                <td>世茂东一号</td>
                                <td>86m&sup2;</td>
                                <td>简约</td>
                                <td>10万</td></tr>
                            <tr>
                                <td>盛先生</td>
                                <td>中铁逸都</td>
                                <td>86m&sup2;</td>
                                <td>简约</td>
                                <td>10万</td></tr>
                            <tr>
                                <td>朱先生</td>
                                <td>采荷小区 青荷</td>
                                <td>50m&sup2;</td>
                                <td>简约</td>
                                <td>8万</td></tr>
                            <tr>
                                <td>倪女士</td>
                                <td>宫河锦庭</td>
                                <td>89m&sup2;</td>
                                <td>欧式</td>
                                <td>10-12万</td></tr>
                            <tr>
                                <td>周女士</td>
                                <td>庭院森森</td>
                                <td>137m&sup2;</td>
                                <td>简约</td>
                                <td>12-14万</td></tr>
                            <tr>
                                <td>朱女士</td>
                                <td>左邻右舍</td>
                                <td>89m&sup2;</td>
                                <td>简约</td>
                                <td>10-12万</td></tr>
                            <tr>
                                <td>徐先生</td>
                                <td>东郡国际</td>
                                <td>89m&sup2;</td>
                                <td>简约</td>
                                <td>15万</td></tr>
                        </tbody>
                    </table>
                </div>
                <div class="pd-m-tbody">
                    <table class="pd-table pd-tbody">
                        <tbody>
                            <tr>
                                <td>李先生</td>
                                <td>景芳二区</td>
                                <td>35m&sup2;</td>
                                <td>简约</td>
                                <td>5-6万</td></tr>
                            <tr>
                                <td>张先生</td>
                                <td>白马山庄天晴居</td>
                                <td>256m&sup2;</td>
                                <td>简约</td>
                                <td>15-18万</td></tr>
                            <tr>
                                <td>吴先生</td>
                                <td>联合格里</td>
                                <td>150m&sup2;</td>
                                <td>欧式</td>
                                <td>20-23万</td></tr>
                            <tr>
                                <td>罗先生</td>
                                <td>世茂东一号</td>
                                <td>86m&sup2;</td>
                                <td>简约</td>
                                <td>10万</td></tr>
                            <tr>
                                <td>盛先生</td>
                                <td>中铁逸都</td>
                                <td>86m&sup2;</td>
                                <td>简约</td>
                                <td>10万</td></tr>
                            <tr>
                                <td>朱先生</td>
                                <td>采荷小区 青荷</td>
                                <td>50m&sup2;</td>
                                <td>简约</td>
                                <td>8万</td></tr>
                            <tr>
                                <td>倪女士</td>
                                <td>宫河锦庭</td>
                                <td>89m&sup2;</td>
                                <td>欧式</td>
                                <td>10-12万</td></tr>
                            <tr>
                                <td>周女士</td>
                                <td>庭院森森</td>
                                <td>137m&sup2;</td>
                                <td>简约</td>
                                <td>12-14万</td></tr>
                            <tr>
                                <td>朱女士</td>
                                <td>左邻右舍</td>
                                <td>89m&sup2;</td>
                                <td>简约</td>
                                <td>10-12万</td></tr>
                            <tr>
                                <td>徐先生</td>
                                <td>东郡国际</td>
                                <td>89m&sup2;</td>
                                <td>简约</td>
                                <td>15万</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pd-m-applystep">
                <p class="pd-title">全程品质保障</p>
                <ul class="steps">
                    <li>
                        <label>选材:</label>工厂直供，品质保证</li>
                    <li>
                        <label>量房:</label>设计师免费上门量房</li>
                    <li>
                        <label>施工:</label>优秀项目经理、精工班组团队一线施工；微信实时直播工地，全程掌握装修进度</li>
                    <li>
                        <label>验收:</label>装修管家全程一对一专业指导；免费第三方监理，节点验收</li>
                    <li>
                        <label>售后:</label>网站资质审核，质保金先行赔付；项目基础、隐蔽工程质量保证</li></ul>
            </div>
            <div class="pd-m-case">
                <p class="pd-title">实景作品
                    <a href="/realcase/92" class="pd-more pd-service-more sm pd-btn">更多></a></p>
                <div class="pd-showcase">
                    <div class="case-item">
                        <figure>
                            <a data-url="/realcase/882.html">
                                <img src="http://pic.tugou.com/realcase/1460101839_7272929.jpeg@213h_319w_1e_1c" alt="三室两厅 美式 全包18"></a>
                            <p class="desc">名城湖左岸</p></figure>
                        <p class="case-info">
                            <img class="designer-head" src="http://pic.tugou.com/weixin/userheader.png" alt="装修管家">
                            <a role="construction">三室两厅</a>
                            <a role="style">美式</a>
                            <a role="detail">全包18万</a></p>
                    </div>
                    <div class="case-item">
                        <figure>
                            <a data-url="/realcase/881.html">
                                <img src="http://pic.tugou.com/realcase/1460101641_957144.jpeg@213h_319w_1e_1c" alt="loft 美式 半包15"></a>
                            <p class="desc">绿城蓝庭</p></figure>
                        <p class="case-info">
                            <img class="designer-head" src="http://pic.tugou.com/crm_admin_avator/1456819470_1498409.jpeg" alt="装修管家">
                            <a role="construction">loft</a>
                            <a role="style">美式</a>
                            <a role="detail">半包15万</a></p>
                    </div>
                    <div class="case-item">
                        <figure>
                            <a data-url="/realcase/880.html">
                                <img src="http://pic.tugou.com/realcase/1460101095_5245268.jpeg@213h_319w_1e_1c" alt="三室两厅 地中海 全包18"></a>
                            <p class="desc">凯德龙湾</p></figure>
                        <p class="case-info">
                            <img class="designer-head" src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="装修管家">
                            <a role="construction">三室两厅</a>
                            <a role="style">地中海</a>
                            <a role="detail">全包18万</a></p>
                    </div>
                </div>
            </div>
            <div class="pd-m-building">
                <p class="pd-title">直播工地
                    <a href="/site/92" class="pd-more pd-build-more sm pd-btn">更多></a></p>
                <div class="pd-showbuild">
                    <div class="case-item">
                        <figure>
                            <a data-url="/site/138.html">
                                <img src="http://pic.tugou.com/buildingsite/1451373135_1187204.jpeg@164h_237w_1e_1c" alt="直播工地"></a>
                            <p class="desc">开工阶段</p></figure>
                        <p class="case-info">
                            <a data-role="building">世贸西西湖</a>-
                            <a data-role="owner">姜小姐</a>的家</p>
                        <p class="case-subinfo sm">
                            <a data-role="area">89m&sup2;</a>
                            <a data-role="price">全包14万</a></p>
                    </div>
                    <div class="case-item">
                        <figure>
                            <a data-url="/site/140.html">
                                <img src="http://pic.tugou.com/buildingsite/1451373592_1393392.jpeg@164h_237w_1e_1c" alt="直播工地"></a>
                            <p class="desc">水电阶段</p></figure>
                        <p class="case-info">
                            <a data-role="building">北海公园</a>-
                            <a data-role="owner">吴先生</a>的家</p>
                        <p class="case-subinfo sm">
                            <a data-role="area">135m&sup2;</a>
                            <a data-role="price">全包20万</a></p>
                    </div>
                    <div class="case-item">
                        <figure>
                            <a data-url="/site/141.html">
                                <img src="http://pic.tugou.com/buildingsite/1451373688_0403443.jpeg@164h_237w_1e_1c" alt="直播工地"></a>
                            <p class="desc">泥木阶段</p></figure>
                        <p class="case-info">
                            <a data-role="building">龙湖香醍溪岸</a>-
                            <a data-role="owner">沈先生</a>的家</p>
                        <p class="case-subinfo sm">
                            <a data-role="area">128m&sup2;</a>
                            <a data-role="price">半包10万</a></p>
                    </div>
                    <div class="case-item">
                        <figure>
                            <a data-url="/site/142.html">
                                <img src="http://pic.tugou.com/buildingsite/1451373857_0422136.jpeg@164h_237w_1e_1c" alt="直播工地"></a>
                            <p class="desc">油漆阶段</p></figure>
                        <p class="case-info">
                            <a data-role="building">西溪华府</a>-
                            <a data-role="owner">汪先生</a>的家</p>
                        <p class="case-subinfo sm">
                            <a data-role="area">130m&sup2;</a>
                            <a data-role="price">全包19万</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pd-fault-footer"></div>
</section>
<div class="pop_mask hide">
    <div class="pop_box">
        <a class="pop_close">&times;</a>
        <div class="title_box">
            <p class="title">免费为我做设计</p>
            <p class="subtitle">免费获取3份设计选取满意设计稿</p></div>
        <div class="apply_form">
            <input name="apply_type" type="hidden" value="6">
            <input name="apply_provider" type="hidden" value="92">
            <input name="name" type="text" placeholder="您的姓名">
            <input name="phone" type="text" placeholder="手机号码">
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input name="apply" type="button" value="立即预约">
            <p class="sm">全国服务热线400-8617-000
                <br>为了方便我们联系，请留下您的联系方式，我们将严格保密</p></div>
    </div>
</div>
<style type="text/css">
.beian{ width: 15px; height: 15px; display: inline-block; background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; background-size: 100%; position: relative; top: 2px; }
</style>
