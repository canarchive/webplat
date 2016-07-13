<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/list',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total',
];
//'实景作品频道';
?>
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/dpl.css">
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/case/new-case.css">
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/company/company.css">
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/css/mobile/slick.css">
<link rel="stylesheet" type="text/css" href=" http://static.tugou.com/m/js/components/tugou-footer/css/tugou-footer.css">
<script src="http://static.tugou.com/js/weixin/jquery-1.11.3.min.js"></script>
<script src="http://static.tugou.com/m/js/common.js"></script>
<style>.case .list01 .channel{ font-size: 0.5rem;margin-top: 1.5rem; }</style>
<script>$(function() {
        $(".footer").click(function() { //弹出申请框
            $(".win_all").show();
        });
        $(".close a").click(function() { //关闭申请框
            $(".win_all").hide();
        });
})
</script>

<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="http://m.tugou.com" class="return"></a>实景作品
</div>
<div class="center">
    <!-- 实景作品 -->
    <div class="case ">
        <div class="list">
            <!--<a href="/realcase/1393.html">-->
            <a href="http://m.tugou.com/bj/realcase/1393.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1466763930_2447433.jpeg@320h_640w_1e_1c" alt="别墅&nbsp;&nbsp;美式半包30">
                    <div class="listbg"></div>
                    <p>嘉林花园</p>
                    <p class="channel">别墅&nbsp;&nbsp;美式&nbsp;&nbsp;半包30万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/" alt=""></b>
                        <span></span>装修管家</a>
                    <i class="new-case01">已有
                        <span>367</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1371.html">-->
            <a href="http://m.tugou.com/hz/realcase/1371.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1466506575_4952851.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;欧式半包12">
                    <div class="listbg"></div>
                    <p>权杖情结</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;半包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="小南"></b>
                        <span>小南</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>409</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1194.html">-->
            <a href="http://m.tugou.com/hz/realcase/1194.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1464072949_7109308.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;美式半包10.8">
                    <div class="listbg"></div>
                    <p>春之歌</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包10.8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1456819470_1498409.jpeg" alt="小西"></b>
                        <span>小西</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1716</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1081.html">-->
            <a href="http://m.tugou.com/sh/realcase/1081.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1463196280_6637144.jpeg@320h_640w_1e_1c" alt="别墅&nbsp;&nbsp;美式半包20">
                    <div class="listbg"></div>
                    <p>明媚之于家</p>
                    <p class="channel">别墅&nbsp;&nbsp;美式&nbsp;&nbsp;半包20万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>497</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1080.html">-->
            <a href="http://m.tugou.com/hz/realcase/1080.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1463135825_5029345.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式全包24">
                    <div class="listbg"></div>
                    <p>一见倾心</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;全包24万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="小南"></b>
                        <span>小南</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>805</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1030.html">-->
            <a href="http://m.tugou.com/sh/realcase/1030.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461910460_5941345.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;简约全包23">
                    <div class="listbg"></div>
                    <p>精灵跃动</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;全包23万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353144_4765956.jpeg" alt="曼曼"></b>
                        <span>曼曼</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1104</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1028.html">-->
            <a href="http://m.tugou.com/sh/realcase/1028.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461902831_5945962.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;混搭全包64">
                    <div class="listbg"></div>
                    <p>畅想多瑙河</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;全包64万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1461893560_4456683.jpeg" alt="兔狗上海  小英"></b>
                        <span>兔狗上海 小英</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1618</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1014.html">-->
            <a href="http://m.tugou.com/sh/realcase/1014.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461832693_3531449.jpeg@320h_640w_1e_1c" alt="别墅&nbsp;&nbsp;美式全包64">
                    <div class="listbg"></div>
                    <p>返璞归真</p>
                    <p class="channel">别墅&nbsp;&nbsp;美式&nbsp;&nbsp;全包64万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353144_4765956.jpeg" alt="曼曼"></b>
                        <span>曼曼</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>344</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1012.html">-->
            <a href="http://m.tugou.com/sh/realcase/1012.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461832196_1068508.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;简约全包17">
                    <div class="listbg"></div>
                    <p>云净天清</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;全包17万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>900</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/1011.html">-->
            <a href="http://m.tugou.com/sh/realcase/1011.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461831929_1304617.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;美式全包16">
                    <div class="listbg"></div>
                    <p>暖心天堂</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;全包16万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353144_4765956.jpeg" alt="曼曼"></b>
                        <span>曼曼</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>528</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/970.html">-->
            <a href="http://m.tugou.com/nb/realcase/970.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461547021_6553291.jpeg@320h_640w_1e_1c" alt="别墅&nbsp;&nbsp;混搭全包19">
                    <div class="listbg"></div>
                    <p>暖阳展颜</p>
                    <p class="channel">别墅&nbsp;&nbsp;混搭&nbsp;&nbsp;全包19万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922202_398548.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>969</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/943.html">-->
            <a href="http://m.tugou.com/nj/realcase/943.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461123771_3269938.jpeg@320h_640w_1e_1c" alt="三室一厅&nbsp;&nbsp;简约半包6">
                    <div class="listbg"></div>
                    <p>微生活</p>
                    <p class="channel">三室一厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包6万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475086_628738.jpeg" alt="小微"></b>
                        <span>小微</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3459</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/902.html">-->
            <a href="http://m.tugou.com/bj/realcase/902.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1460442541_0076621.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;中式半包10">
                    <div class="listbg"></div>
                    <p>宜其室家</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;中式&nbsp;&nbsp;半包10万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475471_139860.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>2528</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/898.html">-->
            <a href="http://m.tugou.com/hz/realcase/898.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1460373698_7591891.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包9">
                    <div class="listbg"></div>
                    <p>原品素心</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包9万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1459912411_059473.jpeg" alt="小菡"></b>
                        <span>小菡</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4995</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/891.html">-->
            <a href="http://m.tugou.com/nj/realcase/891.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1460367465_5391630.jpeg@320h_640w_1e_1c" alt="一室两厅&nbsp;&nbsp;日式全包5.7">
                    <div class="listbg"></div>
                    <p>MUJI式自在</p>
                    <p class="channel">一室两厅&nbsp;&nbsp;日式&nbsp;&nbsp;全包5.7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475086_628738.jpeg" alt="小微"></b>
                        <span>小微</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1975</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/885.html">-->
            <a href="http://m.tugou.com/nj/realcase/885.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1460112901_7055594.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;简约全包13.5">
                    <div class="listbg"></div>
                    <p>以简蕴灵</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;全包13.5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475086_628738.jpeg" alt="小微"></b>
                        <span>小微</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4011</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/883.html">-->
            <a href="http://m.tugou.com/wx/realcase/883.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1460110871_6013692.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;欧式全包18">
                    <div class="listbg"></div>
                    <p>模范家庭</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;全包18万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>2142</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/878.html">-->
            <a href="http://m.tugou.com/hz/realcase/878.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1460100471_3196255.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式全包15">
                    <div class="listbg"></div>
                    <p>城中花园</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;全包15万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1456819470_1498409.jpeg" alt="小西"></b>
                        <span>小西</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1329</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/872.html">-->
            <a href="http://m.tugou.com/hz/realcase/872.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1460024488_0966429.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;简约半包8.4">
                    <div class="listbg"></div>
                    <p>画中游</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8.4万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="小南"></b>
                        <span>小南</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>715</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/864.html">-->
            <a href="http://m.tugou.com/nj/realcase/864.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1459922894_4239704.jpeg@320h_640w_1e_1c" alt="别墅&nbsp;&nbsp;简约半包10">
                    <div class="listbg"></div>
                    <p>梦幻轻奢</p>
                    <p class="channel">别墅&nbsp;&nbsp;简约&nbsp;&nbsp;半包10万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475086_628738.jpeg" alt="小微"></b>
                        <span>小微</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>932</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/855.html">-->
            <a href="http://m.tugou.com/hz/realcase/855.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1459910350_6393621.jpeg@320h_640w_1e_1c" alt="复式&nbsp;&nbsp;中式半包18">
                    <div class="listbg"></div>
                    <p>古典奢华</p>
                    <p class="channel">复式&nbsp;&nbsp;中式&nbsp;&nbsp;半包18万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1456819470_1498409.jpeg" alt="小西"></b>
                        <span>小西</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>686</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/842.html">-->
            <a href="http://m.tugou.com/hz/realcase/842.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1459849406_5119191.jpeg@320h_640w_1e_1c" alt="别墅&nbsp;&nbsp;美式半包18.4">
                    <div class="listbg"></div>
                    <p>风吹麦香</p>
                    <p class="channel">别墅&nbsp;&nbsp;美式&nbsp;&nbsp;半包18.4万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/" alt=""></b>
                        <span></span>装修管家</a>
                    <i class="new-case01">已有
                        <span>798</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/830.html">-->
            <a href="http://m.tugou.com/wx/realcase/830.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1459845117_6363508.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;美式全包7">
                    <div class="listbg"></div>
                    <p>韵味倾心</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;全包7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1619</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/826.html">-->
            <a href="http://m.tugou.com/wh/realcase/826.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1459839680_973977.jpeg@320h_640w_1e_1c" alt="复式&nbsp;&nbsp;田园半包12">
                    <div class="listbg"></div>
                    <p>悠然时光</p>
                    <p class="channel">复式&nbsp;&nbsp;田园&nbsp;&nbsp;半包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1455678286_6678347.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>752</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/825.html">-->
            <a href="http://m.tugou.com/wh/realcase/825.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461397734_3506479.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;简约半包5">
                    <div class="listbg"></div>
                    <p>时尚简洁</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1455678286_6678347.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>2037</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/823.html">-->
            <a href="http://m.tugou.com/ks/realcase/823.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1461397137_3101265.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;现代全包23">
                    <div class="listbg"></div>
                    <p>圆漾人生</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;现代&nbsp;&nbsp;全包23万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450752223_8755739.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>560</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/690.html">-->
            <a href="http://m.tugou.com/cd/realcase/690.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1458352894_0554371.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式全包15">
                    <div class="listbg"></div>
                    <p>泛新芽</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;全包15万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450757801_3112992.jpeg" alt="薇薇"></b>
                        <span>薇薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>765</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/640.html">-->
            <a href="http://m.tugou.com/hz/realcase/640.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1455531284_7023716.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包7.3">
                    <div class="listbg"></div>
                    <p>栖居生活之上</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包7.3万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4969</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/631.html">-->
            <a href="http://m.tugou.com/hz/realcase/631.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1455501568_992750.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;欧式半包7.9">
                    <div class="listbg"></div>
                    <p>浪漫底蕴</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;半包7.9万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3869</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/587.html">-->
            <a href="http://m.tugou.com/bj/realcase/587.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452574922_4519526.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;地中海半包8.2">
                    <div class="listbg"></div>
                    <p>与蓝</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;地中海&nbsp;&nbsp;半包8.2万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450758358_0006175.jpeg" alt="三妹"></b>
                        <span>三妹</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1750</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/571.html">-->
            <a href="http://m.tugou.com/bj/realcase/571.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452504402_7281831.jpeg@320h_640w_1e_1c" alt="三室一厅&nbsp;&nbsp;简约半包12">
                    <div class="listbg"></div>
                    <p>灰色质感</p>
                    <p class="channel">三室一厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475471_139860.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1495</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/567.html">-->
            <a href="http://m.tugou.com/bj/realcase/567.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452503646_742315.jpeg@320h_640w_1e_1c" alt="三室一厅&nbsp;&nbsp;简约半包4.1">
                    <div class="listbg"></div>
                    <p>爵士灰调</p>
                    <p class="channel">三室一厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包4.1万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450758358_0006175.jpeg" alt="三妹"></b>
                        <span>三妹</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>1342</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/532.html">-->
            <a href="http://m.tugou.com/hz/realcase/532.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452233187_8413632.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;欧式半包13.8">
                    <div class="listbg"></div>
                    <p>优雅岁月</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;半包13.8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451894514_1891.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>5527</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/531.html">-->
            <a href="http://m.tugou.com/hz/realcase/531.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452232877_4367344.jpeg@320h_640w_1e_1c" alt="两室一厅&nbsp;&nbsp;美式半包6.5">
                    <div class="listbg"></div>
                    <p>简而不凡</p>
                    <p class="channel">两室一厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包6.5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="小南"></b>
                        <span>小南</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>7645</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/530.html">-->
            <a href="http://m.tugou.com/hz/realcase/530.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452232311_7451233.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包9">
                    <div class="listbg"></div>
                    <p>黑白人文气息</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包9万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451894514_1891.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4498</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/528.html">-->
            <a href="http://m.tugou.com/hz/realcase/528.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452162502_6772734.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;美式半包6.8">
                    <div class="listbg"></div>
                    <p>生活要认真</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包6.8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4324</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/527.html">-->
            <a href="http://m.tugou.com/hz/realcase/527.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452161691_0377801.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;欧式全包22">
                    <div class="listbg"></div>
                    <p>低调不凡</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;全包22万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3954</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/526.html">-->
            <a href="http://m.tugou.com/hz/realcase/526.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452161131_2577640.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包13.5">
                    <div class="listbg"></div>
                    <p>宁远</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包13.5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="小南"></b>
                        <span>小南</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3941</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/525.html">-->
            <a href="http://m.tugou.com/hz/realcase/525.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452160580_8235577.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;美式全包25">
                    <div class="listbg"></div>
                    <p>花鸟之约</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;全包25万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353273_1803275.jpeg" alt="小西"></b>
                        <span>小西</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3208</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/524.html">-->
            <a href="http://m.tugou.com/hz/realcase/524.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452159585_4797649.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;欧式半包15">
                    <div class="listbg"></div>
                    <p>雍容岁月</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;半包15万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1455678286_6678347.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>2135</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/523.html">-->
            <a href="http://m.tugou.com/hz/realcase/523.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452135271_9269208.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;混搭半包8">
                    <div class="listbg"></div>
                    <p>跳色混搭</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451894514_1891.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>2426</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/518.html">-->
            <a href="http://m.tugou.com/hz/realcase/518.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452079950_4758317.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包6.6">
                    <div class="listbg"></div>
                    <p>撞色跳跃</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包6.6万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="小南"></b>
                        <span>小南</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>2001</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/516.html">-->
            <a href="http://m.tugou.com/hz/realcase/516.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452078649_7633770.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;混搭半包7">
                    <div class="listbg"></div>
                    <p>混搭原木家</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451894514_1891.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3541</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/515.html">-->
            <a href="http://m.tugou.com/hz/realcase/515.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1452076165_251376.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包7.5">
                    <div class="listbg"></div>
                    <p>白色恋人</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包7.5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353273_1803275.jpeg" alt="小西"></b>
                        <span>小西</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4011</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/507.html">-->
            <a href="http://m.tugou.com/hz/realcase/507.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451289705_1414446.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;混搭全包11">
                    <div class="listbg"></div>
                    <p>金色年华</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;全包11万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>21918</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/506.html">-->
            <a href="http://m.tugou.com/wx/realcase/506.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451036634_3564499.jpeg@320h_640w_1e_1c" alt="一室两厅&nbsp;&nbsp;欧式半包6">
                    <div class="listbg"></div>
                    <p>古典玲珑</p>
                    <p class="channel">一室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;半包6万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>15142</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/505.html">-->
            <a href="http://m.tugou.com/nj/realcase/505.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451036376_8832468.jpeg@320h_640w_1e_1c" alt="一室两厅&nbsp;&nbsp;简约半包8">
                    <div class="listbg"></div>
                    <p>单身贵族</p>
                    <p class="channel">一室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/" alt=""></b>
                        <span></span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4744</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/504.html">-->
            <a href="http://m.tugou.com/wx/realcase/504.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451036302_592892.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包10">
                    <div class="listbg"></div>
                    <p>黑白幽默</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包10万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>7933</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/503.html">-->
            <a href="http://m.tugou.com/nj/realcase/503.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451036150_5542859.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包8">
                    <div class="listbg"></div>
                    <p>极简生活</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475086_628738.jpeg" alt="小微"></b>
                        <span>小微</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>11081</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/502.html">-->
            <a href="http://m.tugou.com/nb/realcase/502.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035891_0092800.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;混搭半包8">
                    <div class="listbg"></div>
                    <p>个性混搭家</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/" alt="施丹丹"></b>
                        <span>施丹丹</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>37684</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/501.html">-->
            <a href="http://m.tugou.com/wx/realcase/501.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035880_1398711.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约全包14">
                    <div class="listbg"></div>
                    <p>现代简约之家</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;全包14万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>22633</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/500.html">-->
            <a href="http://m.tugou.com/wx/realcase/500.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035699_912635.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;混搭半包13">
                    <div class="listbg"></div>
                    <p>张扬人生</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包13万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>20428</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/499.html">-->
            <a href="http://m.tugou.com/nb/realcase/499.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035577_856846.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;混搭半包7">
                    <div class="listbg"></div>
                    <p>黑白时尚琴键</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/" alt="施丹丹"></b>
                        <span>施丹丹</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>5154</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/498.html">-->
            <a href="http://m.tugou.com/wx/realcase/498.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035541_3129290.jpeg@320h_640w_1e_1c" alt="四室两厅&nbsp;&nbsp;欧式全包13">
                    <div class="listbg"></div>
                    <p>优雅曼城</p>
                    <p class="channel">四室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;全包13万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>19027</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/497.html">-->
            <a href="http://m.tugou.com/nb/realcase/497.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035483_6603619.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包8">
                    <div class="listbg"></div>
                    <p>简美欢乐调</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922202_398548.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4827</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/496.html">-->
            <a href="http://m.tugou.com/wx/realcase/496.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035376_0303347.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包9">
                    <div class="listbg"></div>
                    <p>复古沉稳</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包9万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>12132</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/495.html">-->
            <a href="http://m.tugou.com/nj/realcase/495.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035341_6721503.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包10">
                    <div class="listbg"></div>
                    <p>裸色秋雨</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包10万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475086_628738.jpeg" alt="小微"></b>
                        <span>小微</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>17401</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/494.html">-->
            <a href="http://m.tugou.com/wx/realcase/494.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035240_0457610.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;田园半包13">
                    <div class="listbg"></div>
                    <p>少女田园</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;田园&nbsp;&nbsp;半包13万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>5684</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/493.html">-->
            <a href="http://m.tugou.com/nj/realcase/493.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/suit/1451272215_4255786.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包15">
                    <div class="listbg"></div>
                    <p>壁画北欧</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包15万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475086_628738.jpeg" alt="小微"></b>
                        <span>小微</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>14905</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/492.html">-->
            <a href="http://m.tugou.com/hz/realcase/492.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035083_4758169.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;地中海半包7">
                    <div class="listbg"></div>
                    <p>醉心地中海</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;地中海&nbsp;&nbsp;半包7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>9900</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/491.html">-->
            <a href="http://m.tugou.com/sh/realcase/491.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451035035_5404639.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;简约半包8">
                    <div class="listbg"></div>
                    <p>城市一角甜蜜家</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353144_4765956.jpeg" alt="曼曼"></b>
                        <span>曼曼</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>16375</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/489.html">-->
            <a href="http://m.tugou.com/wx/realcase/489.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034937_312115.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包8">
                    <div class="listbg"></div>
                    <p>奢华欧式</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>9524</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/488.html">-->
            <a href="http://m.tugou.com/hz/realcase/488.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/suit/1451275632_7499618.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包8">
                    <div class="listbg"></div>
                    <p>我的舒适环保之家</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353144_4765956.jpeg" alt="曼曼"></b>
                        <span>曼曼</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>8575</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/487.html">-->
            <a href="http://m.tugou.com/sh/realcase/487.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/suit/1451274181_0484679.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;混搭半包16">
                    <div class="listbg"></div>
                    <p>时尚之家遇上原木</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包16万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4037</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/486.html">-->
            <a href="http://m.tugou.com/hz/realcase/486.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034763_4499161.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包11">
                    <div class="listbg"></div>
                    <p>美式微生活</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包11万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353273_1803275.jpeg" alt="小西"></b>
                        <span>小西</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3125</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/485.html">-->
            <a href="http://m.tugou.com/sh/realcase/485.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034754_6831841.jpeg@320h_640w_1e_1c" alt="两室一厅&nbsp;&nbsp;美式半包11">
                    <div class="listbg"></div>
                    <p>微光</p>
                    <p class="channel">两室一厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包11万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>10330</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/484.html">-->
            <a href="http://m.tugou.com/wx/realcase/484.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034721_4034992.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;混搭半包7">
                    <div class="listbg"></div>
                    <p>艺术生活</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>18034</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/483.html">-->
            <a href="http://m.tugou.com/su/realcase/483.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034712_4358340.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包9.5">
                    <div class="listbg"></div>
                    <p>灰色默言</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包9.5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353144_4765956.jpeg" alt="曼曼"></b>
                        <span>曼曼</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>23471</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/482.html">-->
            <a href="http://m.tugou.com/hz/realcase/482.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034697_7838492.jpeg@320h_640w_1e_1c" alt="两室一厅&nbsp;&nbsp;简约半包8">
                    <div class="listbg"></div>
                    <p>彩蝶之舞</p>
                    <p class="channel">两室一厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451353144_4765956.jpeg" alt="曼曼"></b>
                        <span>曼曼</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3846</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/481.html">-->
            <a href="http://m.tugou.com/sh/realcase/481.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034634_3496438.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包22">
                    <div class="listbg"></div>
                    <p>绿野捉迷藏</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包22万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>9631</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/480.html">-->
            <a href="http://m.tugou.com/wx/realcase/480.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034617_9163671.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;北欧风半包7">
                    <div class="listbg"></div>
                    <p>美式牧风</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;北欧风&nbsp;&nbsp;半包7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>19982</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/479.html">-->
            <a href="http://m.tugou.com/wx/realcase/479.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034578_89882.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;简约半包12">
                    <div class="listbg"></div>
                    <p>潮流前线</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>5645</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/477.html">-->
            <a href="http://m.tugou.com/sh/realcase/477.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034489_498522.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包8">
                    <div class="listbg"></div>
                    <p>简约轻幸福</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>18988</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/476.html">-->
            <a href="http://m.tugou.com/nb/realcase/476.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034417_8891246.jpeg@320h_640w_1e_1c" alt="一室两厅&nbsp;&nbsp;简约半包6">
                    <div class="listbg"></div>
                    <p>原木之风</p>
                    <p class="channel">一室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包6万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922202_398548.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>10706</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/475.html">-->
            <a href="http://m.tugou.com/sh/realcase/475.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034385_0957288.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式半包24">
                    <div class="listbg"></div>
                    <p>牛奶烤面包之旅</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包24万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>11792</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/474.html">-->
            <a href="http://m.tugou.com/wx/realcase/474.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034296_545381.jpeg@320h_640w_1e_1c" alt="两室两厅&nbsp;&nbsp;简约全包12">
                    <div class="listbg"></div>
                    <p>打碎阳光融于家</p>
                    <p class="channel">两室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;全包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>9420</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/473.html">-->
            <a href="http://m.tugou.com/wx/realcase/473.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034224_1837536.jpeg@320h_640w_1e_1c" alt="三室一厅&nbsp;&nbsp;东南亚风半包10">
                    <div class="listbg"></div>
                    <p>东南亚风情</p>
                    <p class="channel">三室一厅&nbsp;&nbsp;东南亚风&nbsp;&nbsp;半包10万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450751776_623238.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>16208</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/472.html">-->
            <a href="http://m.tugou.com/sh/realcase/472.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034172_316480.jpeg@320h_640w_1e_1c" alt="四室一厅&nbsp;&nbsp;混搭半包9">
                    <div class="listbg"></div>
                    <p>混搭新居</p>
                    <p class="channel">四室一厅&nbsp;&nbsp;混搭&nbsp;&nbsp;半包9万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451800634_104610.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>11361</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/471.html">-->
            <a href="http://m.tugou.com/hz/realcase/471.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034241_6003382.jpeg@320h_640w_1e_1c" alt="三室一厅&nbsp;&nbsp;欧式半包11">
                    <div class="listbg"></div>
                    <p>浓情美式</p>
                    <p class="channel">三室一厅&nbsp;&nbsp;欧式&nbsp;&nbsp;半包11万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451700012_6354589.jpeg" alt="小南"></b>
                        <span>小南</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>18225</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/470.html">-->
            <a href="http://m.tugou.com/ks/realcase/470.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034137_6472747.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;美式全包12">
                    <div class="listbg"></div>
                    <p>时光刚刚好</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;美式&nbsp;&nbsp;全包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450752223_8755739.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>13290</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/469.html">-->
            <a href="http://m.tugou.com/bj/realcase/469.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034066_2615402.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;现代简约全包12">
                    <div class="listbg"></div>
                    <p>蜕变</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;现代简约&nbsp;&nbsp;全包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1451475471_139860.jpeg" alt="小薇"></b>
                        <span>小薇</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>12052</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/468.html">-->
            <a href="http://m.tugou.com/hz/realcase/468.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451033969_4188733.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;现代半包12">
                    <div class="listbg"></div>
                    <p>悦然</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;现代&nbsp;&nbsp;半包12万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450923499_496569.jpeg" alt="粒粒"></b>
                        <span>粒粒</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4138</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/466.html">-->
            <a href="http://m.tugou.com/wx/realcase/466.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451034256_482340.jpeg@320h_640w_1e_1c" alt="三室一厅&nbsp;&nbsp;现代半包9">
                    <div class="listbg"></div>
                    <p>文艺镜像</p>
                    <p class="channel">三室一厅&nbsp;&nbsp;现代&nbsp;&nbsp;半包9万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450752223_8755739.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>4985</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/467.html">-->
            <a href="http://m.tugou.com/su/realcase/467.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451033904_5313258.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;简约半包18">
                    <div class="listbg"></div>
                    <p>古典新贵</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包18万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450752223_8755739.jpeg" alt="沁沁"></b>
                        <span>沁沁</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>7809</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/465.html">-->
            <a href="http://m.tugou.com/hz/realcase/465.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/suit/1451275994_4409407.jpeg@320h_640w_1e_1c" alt="一室一厅&nbsp;&nbsp;简约半包5">
                    <div class="listbg"></div>
                    <p>生活密语</p>
                    <p class="channel">一室一厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>17178</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/464.html">-->
            <a href="http://m.tugou.com/hz/realcase/464.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451033757_6787341.jpeg@320h_640w_1e_1c" alt="一室一厅&nbsp;&nbsp;简约半包5">
                    <div class="listbg"></div>
                    <p>“木木”哒</p>
                    <p class="channel">一室一厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包5万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1459912411_059473.jpeg" alt="小菡"></b>
                        <span>小菡</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>19472</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/461.html">-->
            <a href="http://m.tugou.com/hz/realcase/461.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451033543_7012887.jpeg@320h_640w_1e_1c" alt="两室一厅&nbsp;&nbsp;简约半包7">
                    <div class="listbg"></div>
                    <p>喃喃细语</p>
                    <p class="channel">两室一厅&nbsp;&nbsp;简约&nbsp;&nbsp;半包7万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>3465</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/460.html">-->
            <a href="http://m.tugou.com/hz/realcase/460.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451033538_0888969.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;现代半包8">
                    <div class="listbg"></div>
                    <p>雅致现代风</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;现代&nbsp;&nbsp;半包8万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1459912411_059473.jpeg" alt="小菡"></b>
                        <span>小菡</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>18177</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/459.html">-->
            <a href="http://m.tugou.com/hz/realcase/459.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451033403_2522802.jpeg@320h_640w_1e_1c" alt="三室两厅&nbsp;&nbsp;欧式半包11">
                    <div class="listbg"></div>
                    <p>欧陆风情</p>
                    <p class="channel">三室两厅&nbsp;&nbsp;欧式&nbsp;&nbsp;半包11万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1450922225_9664106.jpeg" alt="小可"></b>
                        <span>小可</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>10201</span>人浏览</i></div>
            </a>
        </div>
        <div class="list">
            <!--<a href="/realcase/458.html">-->
            <a href="http://m.tugou.com/hz/realcase/458.html">
                <div class="list01">
                    <img src="http://pic.tugou.com/realcase/1451033324_5578265.jpeg@320h_640w_1e_1c" alt="两室一厅&nbsp;&nbsp;美式半包11">
                    <div class="listbg"></div>
                    <p>佳期如梦</p>
                    <p class="channel">两室一厅&nbsp;&nbsp;美式&nbsp;&nbsp;半包11万</p></div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/crm_admin_avator/1456819470_1498409.jpeg" alt="小西"></b>
                        <span>小西</span>装修管家</a>
                    <i class="new-case01">已有
                        <span>16113</span>人浏览</i></div>
            </a>
        </div>
    </div>
</div>
<div id="list_top" class="list_top"></div>
<?php echo $this->render('../common/_nav', []); ?>
<script src="http://static.tugou.com/js/slick.min.js"></script>
<script src="http://static.tugou.com/m/js/company/new-case.js"></script>
<script src=" http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js "></script>
<!-- <script type="text/javascript" src="http://static.tugou.com/js/ga.js"></script> --></body>
<script type="text/javascript" src="http://static.tugou.com/m/js/m-region.js"></script>

