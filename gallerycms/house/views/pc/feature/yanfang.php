<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'service/measure', 'pages/index', 'layouts/page_header', 'layouts/page_footer', 'dpl', 
	'common', 'lib/footer',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['currentNav'] = 'free';
?>
<?php echo $this->render('_nav', ['view' => $view]); ?>
<div class="content" id="biaodan">
    <div class="content1" id="content1">
        <div id="bg1">
            <div class="position">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bg1.jpg" height="498px">
                <!--<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bg12.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bg13.jpg">-->
                <div class="arrow01"></div>
                <div class="float apply_form">
                    <div class="title">申请免费验房</div>
                    <div class="fbody">
                        <p>验房专家上门验房，全面检测房屋质量</p>
                        <div class="apply_form">
						    <input name="apply_type" type="hidden" value="<?= $view; ?>" />
                            <input name="name" type="text" placeholder="您的姓名" />
                            <input name="phone" type="text" placeholder="手机号码" />
                            <div class="select-group clearfix js-region-select-group">
                                <select class="js-province" name="province" id="province">
                                    <option value="">省/市</option></select>
                                <select class="js-city" name="city" id="city">
                                    <option value="">市/地区</option></select>
                            </div>
                        </div>
                        <input name="apply" type="button" value="免费申请" />
                        <b>
                            <a>注：</a>
                            <span>同一小区同批验房达到5户，可安排免费上门验房服务。</span></b>
                    </div>
                </div>
            </div>
        </div>
        <div class="page11">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf1.jpg" class="img">
            <div class="case">
                <div class="src">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf11.jpg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf12.jpg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf13.jpg"></div>
                <div class="font1">
                    <h3>世贸东壹号</h3>
                    <p>验房师傅：张工</p>
                    <p>验房结果：1进户门子们松动；2厨房墙面一处空鼓；3客厅、餐馆墙面四处空鼓；4次卧墙面粉刷区大面积空鼓；5主卧墙面粉刷区3出空鼓，1处不通脚；6卫生间无排气管。</p>
                </div>
            </div>
            <div class="case">
                <div class="src">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf14.jpg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf15.jpg">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf16.jpg"></div>
                <div class="font1">
                    <h3>中天.官河锦庭</h3>
                    <p>验房师傅：刘工</p>
                    <p>验房结果：1主卧、次卧窗户玻璃多出划痕；2客厅玻璃有划痕；3阳台护栏松动，螺丝钉生锈；4厨房、客厅多出空鼓；5卫生间大面积空鼓；6次卧大面积的空鼓，地面有2处空鼓；7防水（未作养水测试，漏水情况不明）。</p>
                </div>
            </div>
        </div>
        <div class="page12">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf2.jpg" class="img">
            <div class="signed_box">
                <div class="signed_list">
                    <ul class="signed_list_header">
                        <li>
                            <span class="signed_city">城市</span>
                            <span class="signed_name">业主称呼</span>
                            <span class="signed_phone">电话</span>
                            <span class="signed_area">面积</span>
                            <span class="signed_floor">楼盘</span>
                            <span class="signed_time">申请时间</span></li>
                    </ul>
                    <ul class="signed_list_body">
                        <li>
                            <span class="signed_city">上海</span>
                            <span class="signed_name">王先生</span>
                            <span class="signed_phone">187****2564</span>
                            <span class="signed_area">92m
                                <sup>2</sup></span>
                            <span class="signed_floor">世贸东壹号</span>
                            <span class="signed_time">2天前</span></li>
                        <li>
                            <span class="signed_city">北京</span>
                            <span class="signed_name">肖小姐</span>
                            <span class="signed_phone">175****9856</span>
                            <span class="signed_area">78m
                                <sup>2</sup></span>
                            <span class="signed_floor">湖里庭花园</span>
                            <span class="signed_time">1天前</span></li>
                        <li>
                            <span class="signed_city">苏州</span>
                            <span class="signed_name">蔡先生</span>
                            <span class="signed_phone">151****2365</span>
                            <span class="signed_area">102m
                                <sup>2</sup></span>
                            <span class="signed_floor">日晖家苑</span>
                            <span class="signed_time">1天前</span></li>
                        <li>
                            <span class="signed_city">杭州</span>
                            <span class="signed_name">成先生</span>
                            <span class="signed_phone">135****1489</span>
                            <span class="signed_area">88m
                                <sup>2</sup></span>
                            <span class="signed_floor">万家新城</span>
                            <span class="signed_time">1天前</span></li>
                        <li>
                            <span class="signed_city">上海</span>
                            <span class="signed_name">钱先生</span>
                            <span class="signed_phone">135****5587</span>
                            <span class="signed_area">88m
                                <sup>2</sup></span>
                            <span class="signed_floor">世贸东壹号</span>
                            <span class="signed_time">6小时前</span></li>
                        <li>
                            <span class="signed_city">上海</span>
                            <span class="signed_name">王先生</span>
                            <span class="signed_phone">186****6871</span>
                            <span class="signed_area">88m
                                <sup>2</sup></span>
                            <span class="signed_floor">万家新城</span>
                            <span class="signed_time">6小时前</span></li>
                        <li>
                            <span class="signed_city">上海</span>
                            <span class="signed_name">王先生</span>
                            <span class="signed_phone">186****1586</span>
                            <span class="signed_area">88m
                                <sup>2</sup></span>
                            <span class="signed_floor">世贸东壹号</span>
                            <span class="signed_time">6小时前</span></li>
                        <li>
                            <span class="signed_city">南京</span>
                            <span class="signed_name">刘先生</span>
                            <span class="signed_phone">189****6587</span>
                            <span class="signed_area">102m
                                <sup>2</sup></span>
                            <span class="signed_floor">日晖家苑</span>
                            <span class="signed_time">5小时前</span></li>
                        <li>
                            <span class="signed_city">南京</span>
                            <span class="signed_name">刘先生</span>
                            <span class="signed_phone">186****3258</span>
                            <span class="signed_area">88m
                                <sup>2</sup></span>
                            <span class="signed_floor">世贸东壹号</span>
                            <span class="signed_time">一天前</span></li>
                        <li>
                            <span class="signed_city">北京</span>
                            <span class="signed_name">王先生</span>
                            <span class="signed_phone">159****9187</span>
                            <span class="signed_area">99m
                                <sup>2</sup></span>
                            <span class="signed_floor">日晖家苑</span>
                            <span class="signed_time">2小时前</span></li>
                        <li>
                            <span class="signed_city">苏州</span>
                            <span class="signed_name">王先生</span>
                            <span class="signed_phone">189****6147</span>
                            <span class="signed_area">86m
                                <sup>2</sup></span>
                            <span class="signed_floor">世贸东壹号</span>
                            <span class="signed_time">6天前</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page13">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf3.jpg" class="img">
            <div class="src1">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf17.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf18.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf19.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf20.jpg"></div>
            <div class="src2">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf21.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf22.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf23.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf24.jpg"></div>
        </div>
        <div class="page14">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/yf4.jpg" class="img">
            <div class="src3">
                <div class="img25"></div>
                <div class="ul">
                    <ul>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/28.jpg">
                            <p class="number">01</p>
                            <p>楼地面</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/29.jpg">
                            <p class="number">02</p>
                            <p>墙面</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/30.jpg">
                            <p class="number">03</p>
                            <p>室内楼梯</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/27.jpg">
                            <p class="number">04</p>
                            <p>门窗安装</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/39.jpg">
                            <p class="number">05</p>
                            <p>进门户</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/31.jpg">
                            <p class="number">06</p>
                            <p>阳台</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/32.jpg">
                            <p class="number">07</p>
                            <p>层高</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/33.jpg">
                            <p class="number">08</p>
                            <p>给水</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/34.jpg">
                            <p class="number">09</p>
                            <p>排水</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/40.jpg">
                            <p class="number">10</p>
                            <p>电气</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/36.jpg">
                            <p class="number">11</p>
                            <p>预留洞</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/37.jpg">
                            <p class="number">12</p>
                            <p>弱电</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/38.jpg">
                            <p class="number">13</p>
                            <p>平整度</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/41.jpg">
                            <p class="number">14</p>
                            <p>门窗垂直度</p>
                        </li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/42.jpg">
                            <p class="number">15</p>
                            <p>公共配套</p>
                        </li>
                        </tr>
                    </ul>
                </div>
                <div class="img26"></div>
            </div>
        </div>
    </div>
</div>
