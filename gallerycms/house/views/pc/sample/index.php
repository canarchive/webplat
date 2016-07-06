<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'pages/meitu/common',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'【装修案例效果图】装修案例图片_装修设计案例-兔狗装修效果图';
//'装修案例效果图,装修案例图片,装修设计案例';
//'兔狗装修案例效果图专区,提供最新装修案例图片,装修设计案例包括简约,现代,中式,欧式,美式,田园等装修效果图';
?>
<style rel="stylesheet">
.page_header img, .page_footer img { display: inline; } 
.page_header, .page_footer_links { font-size: 12px; }
</style>
<script type="text/javascript">
$(function() {
    setCookie('page_flag', 'meitu');
});
</script>
<div class="wp">
    <div class="cont">
        <div class="main">
            <div class="crumbs">
                <a href="/">装修效果图</a>
                <span class="sep">&gt;</span>
                <a href="/case/">装修案例</a>
                <span class="sep last">&gt;</span></div>
            <div class="filter">
                <dl class="filterlist filterlist-first clearfix">
                    <dt>户型：</dt>
                    <dd>
                        <div class="uwbox">
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a55/" data-housetype="55">小户型</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a56/" data-housetype="56">一居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a57/" data-housetype="57">二居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a58/" data-housetype="58">三居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a59/" data-housetype="59">四居</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a60/" data-housetype="60">复式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-a61/" data-housetype="61">别墅</a></span>
                            <!-- --></div>
                    </dd>
                </dl>
                <dl class="filterlist clearfix">
                    <dt>面积：</dt>
                    <dd>
                        <div class="uwbox">
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b62/" data-area="62">30㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b63/" data-area="63">40㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b64/" data-area="64">50㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b65/" data-area="65">60㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b91/" data-area="91">70㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b92/" data-area="92">80㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b93/" data-area="93">90㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b94/" data-area="94">100㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b95/" data-area="95">110㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b96/" data-area="96">120㎡</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-b97/" data-area="97">130㎡以上</a></span>
                            <!-- --></div>
                    </dd>
                </dl>
                <dl class="filterlist clearfix">
                    <dt>风格：</dt>
                    <dd>
                        <div class="uwbox">
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c66/" data-style="66">简约</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c67/" data-style="67">现代</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c68/" data-style="68">欧式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c69/" data-style="69">中式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c70/" data-style="70">田园</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c71/" data-style="71">地中海</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c72/" data-style="72">美式</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c73/" data-style="73">混搭</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c74/" data-style="74">宜家</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c75/" data-style="75">简欧</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c76/" data-style="76">新古典</a></span>
                            <!-- -->
                            <span class="uw">
                                <a href="http://meitu.tugou.com/case-c77/" data-style="77">东南亚</a></span>
                            <!-- -->
                            <span class="uw" style="display: none">
                                <a href="http://meitu.tugou.com/case-c112/" data-style="112">北欧</a></span>
                            <!-- -->
                            <span class="uw" style="display: none">
                                <a href="http://meitu.tugou.com/case-c113/" data-style="113">新中式</a></span>
                            <!-- -->
                            <span class="uw" style="display: none">
                                <a href="http://meitu.tugou.com/case-c114/" data-style="114">日式</a></span>
                            <!-- --></div>
                    </dd>
                </dl>
                <dl class="filterlist clearfix">
                    <dt>色系：</dt>
                    <dd>
                        <div class="ccbox">
                            <a class="cc-1" href="http://meitu.tugou.com/case-d78/" data-color="78" title="白色">白色</a>
                            <a class="cc-2" href="http://meitu.tugou.com/case-d79/" data-color="79" title="米色">米色</a>
                            <a class="cc-3" href="http://meitu.tugou.com/case-d80/" data-color="80" title="黄色">黄色</a>
                            <a class="cc-4" href="http://meitu.tugou.com/case-d81/" data-color="81" title="橙色">橙色</a>
                            <a class="cc-5" href="http://meitu.tugou.com/case-d82/" data-color="82" title="红色">红色</a>
                            <a class="cc-6" href="http://meitu.tugou.com/case-d83/" data-color="83" title="粉色">粉色</a>
                            <a class="cc-7" href="http://meitu.tugou.com/case-d84/" data-color="84" title="绿色">绿色</a>
                            <a class="cc-8" href="http://meitu.tugou.com/case-d85/" data-color="85" title="蓝色">蓝色</a>
                            <a class="cc-9" href="http://meitu.tugou.com/case-d86/" data-color="86" title="紫色">紫色</a>
                            <a class="cc-10" href="http://meitu.tugou.com/case-d87/" data-color="87" title="黑色">黑色</a>
                            <a class="cc-11" href="http://meitu.tugou.com/case-d88/" data-color="88" title="灰色">灰色</a>
                            <a class="cc-12" href="http://meitu.tugou.com/case-d89/" data-color="89" title="原木色">原木色</a>
                            <a class="cc-13" href="http://meitu.tugou.com/case-d90/" data-color="90" title="彩色">彩色
                                <i class="cc-13-1"></i>
                                <i class="cc-13-2"></i>
                                <i class="cc-13-3"></i>
                                <i class="cc-13-4"></i>
                            </a>
                        </div>
                    </dd>
                </dl>
            </div>
            <!-- <div class="tabs clearfix">
            <a class="on" href="/meitu/SuitList/house_type_id/0/area_id/0/style_id/0/color_id/0/order/add_time/page/1" data-order="add_time">最新</a>
            <a href="/meitu/SuitList/house_type_id/0/area_id/0/style_id/0/color_id/0/order/collection_num/page/1" data-order="collection_num">最热</a></div>
            -->
            <!-- -->
            <div class="showlist">
                <ul class="showlist-ul clearfix">
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2115.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160705165013_8360.jpeg@211h_280w_1e_1c" alt="混搭风格别墅装修案例欣赏" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2115.html" target="_blank" title="混搭风格别墅装修案例欣赏">混搭风格别墅装修案例欣赏</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2112.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160704143131_1533.jpeg@211h_280w_1e_1c" alt="清新自然混搭风格浪漫两居装潢设计" />
                                    <span>10张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2112.html" target="_blank" title="清新自然混搭风格浪漫两居装潢设计">清新自然混搭风格浪漫两居装潢设计</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2111.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160704142948_7041.jpeg@211h_280w_1e_1c" alt="个性随性白色工业风混搭风小户型改造装修案例" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2111.html" target="_blank" title="个性随性白色工业风混搭风小户型改造装修案例">个性随性白色工业风混搭风小...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2110.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160704142921_7058.jpeg@211h_280w_1e_1c" alt="精致优雅别墅设计现代风格装潢欣赏" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2110.html" target="_blank" title="精致优雅别墅设计现代风格装潢欣赏">精致优雅别墅设计现代风格装潢欣赏</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2114.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160704174257_4811.jpeg@211h_280w_1e_1c" alt="清新现代风格复式装修案例欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2114.html" target="_blank" title="清新现代风格复式装修案例欣赏">清新现代风格复式装修案例欣赏</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2107.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160630094627_4344.jpeg@211h_280w_1e_1c" alt="个性混搭工业风时尚一居设计装潢案例" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2107.html" target="_blank" title="个性混搭工业风时尚一居设计装潢案例">个性混搭工业风时尚一居设计...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2109.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160701175427_2886.jpeg@211h_280w_1e_1c" alt="98平方现代简欧二居装饰案例欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2109.html" target="_blank" title="98平方现代简欧二居装饰案例欣赏">98平方现代简欧二居装饰案例欣赏</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2104.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160628120106_2867.jpeg@211h_280w_1e_1c" alt="雅致现代风格120平两居室装潢案例" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2104.html" target="_blank" title="雅致现代风格120平两居室装潢案例">雅致现代风格120平两居室...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2108.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160630180730_8620.jpeg@211h_280w_1e_1c" alt="118平米现代风格二室一厅装修设计案例" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2108.html" target="_blank" title="118平米现代风格二室一厅装修设计案例">118平米现代风格二室一厅...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2106.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160629165702_104.jpeg@211h_280w_1e_1c" alt="红黑色系欧式别墅装修案例赏析" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2106.html" target="_blank" title="红黑色系欧式别墅装修案例赏析">红黑色系欧式别墅装修案例赏析</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2105.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160629113135_2702.jpeg@211h_280w_1e_1c" alt="淡雅美式风格90方两居装潢设计" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2105.html" target="_blank" title="淡雅美式风格90方两居装潢设计">淡雅美式风格90方两居装潢设计</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2103.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160628110556_4553.jpeg@211h_280w_1e_1c" alt="古典中式风格别墅装修案例美图欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2103.html" target="_blank" title="古典中式风格别墅装修案例美图欣赏">古典中式风格别墅装修案例美图欣赏</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2102.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160627181019_8515.jpeg@211h_280w_1e_1c" alt="奢华古典雅致美式混搭风格别墅设计" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2102.html" target="_blank" title="奢华古典雅致美式混搭风格别墅设计">奢华古典雅致美式混搭风格别墅设计</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2101.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160627140211_5539.jpeg@211h_280w_1e_1c" alt="美式田园混搭别墅装修案例赏析" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2101.html" target="_blank" title="美式田园混搭别墅装修案例赏析">美式田园混搭别墅装修案例赏析</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2100.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160626114627_56.jpeg@211h_280w_1e_1c" alt="豪华欧式风格别墅装修案例欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2100.html" target="_blank" title="豪华欧式风格别墅装修案例欣赏">豪华欧式风格别墅装修案例欣赏</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2099.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160625171310_1968.jpeg@211h_280w_1e_1c" alt="60平两居室摩登混搭风格装潢设计欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2099.html" target="_blank" title="60平两居室摩登混搭风格装潢设计欣赏">60平两居室摩登混搭风格装...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2098.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160624102921_9146.jpeg@211h_280w_1e_1c" alt="36平清爽北欧设计复式阁楼装修案例" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2098.html" target="_blank" title="36平清爽北欧设计复式阁楼装修案例">36平清爽北欧设计复式阁楼...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2097.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160623232503_3508.jpeg@211h_280w_1e_1c" alt="田园风格温馨大别墅装修设计案例欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2097.html" target="_blank" title="田园风格温馨大别墅装修设计案例欣赏">田园风格温馨大别墅装修设计...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2096.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160623150633_8477.jpeg@211h_280w_1e_1c" alt="活泼简单宜家风格58平一居室装修案例" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2096.html" target="_blank" title="活泼简单宜家风格58平一居室装修案例">活泼简单宜家风格58平一居...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2095.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160623141256_2245.jpeg@211h_280w_1e_1c" alt="华贵新古典风格别墅装修案例欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2095.html" target="_blank" title="华贵新古典风格别墅装修案例欣赏">华贵新古典风格别墅装修案例欣赏</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2094.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160622172909_511.jpeg@211h_280w_1e_1c" alt="工业风个性摩登简约风格56平一居装潢设计" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2094.html" target="_blank" title="工业风个性摩登简约风格56平一居装潢设计">工业风个性摩登简约风格56...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2092.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160621181354_540.jpeg@211h_280w_1e_1c" alt="个性浪漫粉色48平小户型装潢案例" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2092.html" target="_blank" title="个性浪漫粉色48平小户型装潢案例">个性浪漫粉色48平小户型装潢案例</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2093.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160622142026_9615.jpeg@211h_280w_1e_1c" alt="118方新古典风格二居装修案例欣赏" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2093.html" target="_blank" title="118方新古典风格二居装修案例欣赏">118方新古典风格二居装修...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2091.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160620165813_5359.jpeg@211h_280w_1e_1c" alt="浪漫地中海风格别墅装修设计效果图" />
                                    <span>6张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2091.html" target="_blank" title="浪漫地中海风格别墅装修设计效果图">浪漫地中海风格别墅装修设计效果图</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2090.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160618165325_3053.jpeg@211h_280w_1e_1c" alt="复古奢华美式风格别墅装潢案例" />
                                    <span>7张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2090.html" target="_blank" title="复古奢华美式风格别墅装潢案例">复古奢华美式风格别墅装潢案例</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2086.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160618115952_9445.jpeg@211h_280w_1e_1c" alt="139平方欧式风格两室一厅装修案例欣赏" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2086.html" target="_blank" title="139平方欧式风格两室一厅装修案例欣赏">139平方欧式风格两室一厅...</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2084.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160616183449_1810.jpeg@211h_280w_1e_1c" alt="130方品质新古典二居装修案例" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2084.html" target="_blank" title="130方品质新古典二居装修案例">130方品质新古典二居装修案例</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- -->
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
                                <a href="http://meitu.tugou.com/s2078.html" target="_blank">
                                    <img src="http://pic.tugou.com/meitu/20160615191755_1072.jpeg@211h_280w_1e_1c" alt="91平米典雅新古典二居装修案例" />
                                    <span>8张</span></a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
                                    <a class="handler-price" href="javascript:;">免费获取报价</a></div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
                                    <a href="http://meitu.tugou.com/s2078.html" target="_blank" title="91平米典雅新古典二居装修案例">91平米典雅新古典二居装修案例</a></h4>
                            </div>
                        </div>
                    </li>
                    <!-- --></ul>
            </div>
            <!-- -->
            <!-- -->
            <div class="page">
                <p>
                    <!-- -->
                    <!-- -->
                    <!-- -->
                    <!---->
                    <!-- -->
                    <a class="btnpage on">1</a>
                    <!-- -->
                    <!---->
                    <!-- -->
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_2/">2</a>
                    <!-- -->
                    <!---->
                    <!-- -->
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_3/">3</a>
                    <!-- -->
                    <!---->
                    <!-- -->
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_4/">4</a>
                    <!-- -->
                    <!---->
                    <!-- -->
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_5/">5</a>
                    <!-- -->
                    <!---->
                    <!-- -->
                    <!--<em>···</em>-->
                    <!-- -->
                    <a href="http://meitu.tugou.com/case/p_2/">下一页</a>
                    <!-- -->
                    <!-- -->
                    <a href="http://meitu.tugou.com/case/p_54/">末页</a>
                    <!-- --></p>
            </div>
            <!-- --></div>
    </div>
</div>
<div class="pop hide">
    <div class="popmain">
        <div class="popform apply_form">
            <h3>
                <!--免费获取报价--></h3>
            <p class="pop-tip">
                <!--10秒轻松获取3套报价方案--></p>
            <input name="apply_type" type="hidden" value="18" />
            <input name="item_id" type="hidden" value="" />
            <input class="inptxt" name="name" type="text" placeholder="您的姓名" />
            <input class="inptxt" name="phone" type="text" placeholder="手机号码" />
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input class="btn" name="apply" type="button" value="立即预约" />
            <!--<p style="line-height: 20px; color: #999;">注：每户业主可同时获取3份设计比较，挑选适合方案后个性化修改</p>--></div>
        <a class="btn-popclose" href="javascript:;" onclick="hidePopMask($('.pop'));">关闭</a></div>
</div>
<script type="text/javascript">$(function() {
        bindPopupForm($('.handler a'));
    })</script>

<link type="text/css" rel="stylesheet" href="//static.tugou.com/common/consult/aside-consult-v3.css?ver=3.0.0" />
<!-- side bar -->
<div class="side">
    <div class="side-con">
        <div id="kefu-close">x</div>
        <div id="kefu-online" onclick="nTalk.im_openInPageChat();">
            <img src="//static.tugou.com/common/consult/img/consult.png"></div>
        <div class="icon-btn iconfont icon-huidaodingbu back-top" style="display:none">返回顶部</div></div>
</div>
<script type="text/javascript" src="//static.tugou.com/common/consult/aside-consult-v3.js?ver=3.0.0"></script>
<script type="text/javascript" src="http://dl.ntalker.com/js/xn6/ntkfstat.js?siteid=kf_9262" charset="utf-8"></script>
<!--底部-->

<script type="text/javascript" src="http://static.tugou.com/js/meitu.js"></script>
<script type="text/javascript">$(function() {
        bindPopupForm($('.handler a'));
        bindFilter();
    });</script>
<?php echo $this->render('../common/_signup', []); ?>
