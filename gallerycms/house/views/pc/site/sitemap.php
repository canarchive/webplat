<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'map',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 
];
?>
<div class="content">
    <div class="crumbs">
        <a href="/">首页</a><span class="sep">&gt;</span>
		<span>网站地图</span>
    </div>
    <div class="center">
        <h1 class="title">网站地图</h1>
        <div class="subtitle">
			<span>城市分站</span>
        </div>
        <div class="list">
            <dl>
                <!--<dt>A-E：</dt>-->
                <dd>
                    <?php foreach (Yii::$app->params['companyInfos'] as $info) { ?>
				    <span>
					    <a href="<?= Url::to(['/house/site/index', 'company_code' => $info['code']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>站</a>
                    </span>
                    <?php } ?>
                </dd>
            </dl>
        </div>
        <div class="subtitle">
			<span>装修公司</span>
        </div>
        <div class="list">
            <?php foreach (Yii::$app->params['companyInfos'] as $info) { ?>
            <dl>
				<dt><?= $info['name']; ?>：</dt>
                <dd>
                    <?php foreach ($regionInfos[$info['code']] as $regionInfo) { ?>
				    <span>
					    <a href="<?= Url::to(['/house/site/index', 'company_code' => $info['code']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>站</a>
                    </span>
                    <?php } ?>
                </dd>
            </dl>
            <?php } ?>
        </div>
        <div class="subtitle">
		    <span><a href="<?= Url::to(['/house/sample/index']); ?>">图片热搜词</a></span>
        </div>
        <div class="list">
            <dl class="list-hot">
                <dt>户型：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t1/" title="小户型" target="_blank">小户型</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t2/" title="一居" target="_blank">一居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t3/" title="二居" target="_blank">二居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t4/" title="三居" target="_blank">三居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t5/" title="四居" target="_blank">四居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t6/" title="复式" target="_blank">复式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t75/" title="别墅" target="_blank">别墅</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>面积：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t8/" title="30㎡" target="_blank">30㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t9/" title="40㎡" target="_blank">40㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t10/" title="50㎡" target="_blank">50㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t11/" title="60㎡" target="_blank">60㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t12/" title="70㎡" target="_blank">70㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t13/" title="80㎡" target="_blank">80㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t14/" title="90㎡" target="_blank">90㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t15/" title="100㎡" target="_blank">100㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t16/" title="110㎡" target="_blank">110㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t17/" title="120㎡" target="_blank">120㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t18/" title=">130㎡" target="_blank">>130㎡</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>空间：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t19/" title="客厅" target="_blank">客厅</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t20/" title="卧室" target="_blank">卧室</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t21/" title="餐厅" target="_blank">餐厅</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t22/" title="厨房" target="_blank">厨房</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t23/" title="卫生间" target="_blank">卫生间</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t24/" title="阳台" target="_blank">阳台</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t25/" title="书房" target="_blank">书房</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t26" title="儿童房" target="_blank">儿童房</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t27/" title="衣帽间" target="_blank">衣帽间</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t28/" title="阁楼" target="_blank">阁楼</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t29/" title="花园" target="_blank">花园</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>局部：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t30/" title="吊顶" target="_blank">吊顶</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t31/" title="背景墙" target="_blank">背景墙</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t32/" title="玄关" target="_blank">玄关</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t33/" title="榻榻米" target="_blank">榻榻米</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t34/" title="橱柜" target="_blank">橱柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t35/" title="飘窗" target="_blank">飘窗</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t36/" title="隔断" target="_blank">隔断</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t37/" title="窗帘" target="_blank">窗帘</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t38/" title="浴室柜" target="_blank">浴室柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t39/" title="酒柜" target="_blank">酒柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t40/" title="衣柜" target="_blank">衣柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t41/" title="鞋柜" target="_blank">鞋柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t42/" title="吧台" target="_blank">吧台</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t43/" title="楼梯" target="_blank">楼梯</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t44/" title="照片墙" target="_blank">照片墙</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t45/" title="收纳" target="_blank">收纳</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t46/" title="过道" target="_blank">过道</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t47/" title="其他" target="_blank">其他</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>风格：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t48/" title="简约" target="_blank">简约</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t49/" title="现代" target="_blank">现代</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t50/" title="欧式" target="_blank">欧式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t51/" title="中式" target="_blank">中式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t52/" title="田园" target="_blank">田园</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t53/" title="地中海" target="_blank">地中海</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t54/" title="美式" target="_blank">美式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t55/" title="混搭" target="_blank">混搭</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t56/" title="宜家" target="_blank">宜家</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t57/" title="简欧" target="_blank">简欧</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t58/" title="新古典" target="_blank">新古典</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t59/" title="东南亚" target="_blank">东南亚</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>色系：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t60/" title="白色" target="_blank">白色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t61/" title="米色" target="_blank">米色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t62/" title="黄色" target="_blank">黄色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t63/" title="橙色" target="_blank">橙色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t64/" title="红色" target="_blank">红色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t65/" title="粉色" target="_blank">粉色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t66/" title="绿色" target="_blank">绿色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t67/" title="蓝色" target="_blank">蓝色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t68/" title="紫色" target="_blank">紫色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t69/" title="黑色" target="_blank">黑色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t70/" title="灰色" target="_blank">灰色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t71/" title="原木色" target="_blank">原木色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t72/" title="彩色" target="_blank">彩色</a></span>
                </dd>
            </dl>
            <dl>
                <dt>时间：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t73/" title="2016年装修效果图" target="_blank">2016年装修效果图</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/mlist/t74/" title="2015年装修效果图" target="_blank">2015年装修效果图</a></span>
                </dd>
            </dl>
        </div>
        <div class="subtitle">
            <span>
                <a href="http://www.tugou.com/jy/jlist/">经验热搜词</a></span>
        </div>
        <div class="list">
            <dl class="list-hot">
                <dt>装修流程：</dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t1/" title="搬家" target="_blank">搬家</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t2/" title="风水" target="_blank">风水</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t3/" title="合同" target="_blank">合同</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t4/" title="环保" target="_blank">环保</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t5/" title="木工" target="_blank">木工</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t6/" title="泥工" target="_blank">泥工</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t7/" title="软装" target="_blank">软装</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t8/" title="设计" target="_blank">设计</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t9/" title="水电" target="_blank">水电</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t10/" title="验房" target="_blank">验房</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t11/" title="验收" target="_blank">验收</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t12/" title="油工" target="_blank">油工</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>装修建材：</dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t14/" title="壁纸" target="_blank">壁纸</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t15/" title="橱柜" target="_blank">橱柜</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t16/" title="窗帘" target="_blank">窗帘</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t17/" title="瓷砖" target="_blank">瓷砖</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t18/" title="地板" target="_blank">地板</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t19/" title="吊顶" target="_blank">吊顶</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t20/" title="光源" target="_blank">光源</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t21/" title="夹板" target="_blank">夹板</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t22/" title="开关" target="_blank">开关</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t23/" title="门窗" target="_blank">门窗</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t24/" title="防盗门" target="_blank">防盗门</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t25/" title="淋浴房" target="_blank">淋浴房</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t26/" title="木材" target="_blank">木材</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t27/" title="木门" target="_blank">木门</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t28/" title="水槽" target="_blank">水槽</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t29/" title="水龙头" target="_blank">水龙头</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t30/" title="涂料" target="_blank">涂料</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t31/" title="卫浴" target="_blank">卫浴</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t32/" title="五金" target="_blank">五金</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t33/" title="油漆" target="_blank">油漆</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t34/" title="石材" target="_blank">石材</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t35/" title="推拉门" target="_blank">推拉门</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t36/" title="管材管件" target="_blank">管材管件</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t37/" title="建筑构件" target="_blank">建筑构件</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t38/" title="定制衣柜" target="_blank">定制衣柜</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>家具家电软装：</dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t41/" title="板木家具" target="_blank">板木家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t42/" title="窗帘" target="_blank">窗帘</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t43/" title="床" target="_blank">床</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t44/" title="床垫" target="_blank">床垫</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t45/" title="软布" target="_blank">软布</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t46/" title="家电" target="_blank">家电</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t47/" title="架子" target="_blank">架子</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t48/" title="净水" target="_blank">净水</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t49/" title="柜子" target="_blank">柜子</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t50/" title="木家具" target="_blank">木家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t51/" title="屏风" target="_blank">屏风</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t52/" title="热水器" target="_blank">热水器</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t53/" title="晾衣架" target="_blank">晾衣架</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t54/" title="楼梯" target="_blank">楼梯</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t55/" title="沙发" target="_blank">沙发</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t57/" title="实木" target="_blank">实木</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t58/" title="榻榻米" target="_blank">榻榻米</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t59/" title="椅子" target="_blank">椅子</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t60/" title="桌子" target="_blank">桌子</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t61/" title="散热器" target="_blank">散热器</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t62/" title="灯具照明" target="_blank">灯具照明</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t63/" title="板木家具" target="_blank">板木家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t64/" title="定制家具" target="_blank">定制家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t65/" title="儿童家具" target="_blank">儿童家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t66/" title="烟机灶具" target="_blank">烟机灶具</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t67/" title="地毯饰品" target="_blank">地毯饰品</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jlist/t68/" title="空气净化器" target="_blank">空气净化器</a></span>
                </dd>
            </dl>
        </div>
        <div class="subtitle">
            <span>
                <a href="http://meitu.tugou.com/pic/">装修美图</a></span>
        </div>
        <div class="list">
            <dl class="list-hot">
                <dt>空间：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a1/" title="客厅" target="_blank">客厅</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a2/" title="卧室" target="_blank">卧室</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a3/" title="餐厅" target="_blank">餐厅</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a4/" title="厨房" target="_blank">厨房</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a5/" title="卫生间" target="_blank">卫生间</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a6/" title="阳台" target="_blank">阳台</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a7/" title="书房" target="_blank">书房</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a8/" title="儿童房" target="_blank">儿童房</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a9/" title="衣帽间" target="_blank">衣帽间</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a10/" title="阁楼" target="_blank">阁楼</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-a11/" title="花园" target="_blank">花园</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>局部：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b12/" title="吊顶" target="_blank">吊顶</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b13/" title="背景墙" target="_blank">背景墙</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b14/" title="玄关" target="_blank">玄关</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b15/" title="榻榻米" target="_blank">榻榻米</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b16/" title="橱柜" target="_blank">橱柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b17/" title="飘窗" target="_blank">飘窗</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b18/" title="隔断" target="_blank">隔断</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b19/" title="窗帘" target="_blank">窗帘</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b20/" title="浴室柜" target="_blank">浴室柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b21/" title="酒柜" target="_blank">酒柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b22/" title="衣柜" target="_blank">衣柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b23/" title="鞋柜" target="_blank">鞋柜</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b24/" title="吧台" target="_blank">吧台</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b25/" title="楼梯" target="_blank">楼梯</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b26/" title="照片墙" target="_blank">照片墙</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b27/" title="收纳" target="_blank">收纳</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-b28/" title="过道" target="_blank">过道</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>风格：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c30/" title="简约" target="_blank">简约</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c31/" title="现代" target="_blank">现代</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c32/" title="欧式" target="_blank">欧式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c33/" title="中式" target="_blank">中式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c34/" title="田园" target="_blank">田园</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c35/" title="地中海" target="_blank">地中海</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c36/" title="美式" target="_blank">美式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c37/" title="混搭" target="_blank">混搭</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c38/" title="宜家" target="_blank">宜家</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c39/" title="简欧" target="_blank">简欧</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c40/" title="新古典" target="_blank">新古典</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-c41/" title="东南亚" target="_blank">东南亚</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>色系：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d42/" title="白色" target="_blank">白色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d43/" title="米色" target="_blank">米色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d44/" title="黄色" target="_blank">黄色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d45/" title="橙色" target="_blank">橙色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d46/" title="红色" target="_blank">红色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d47/" title="粉色" target="_blank">粉色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d48/" title="绿色" target="_blank">绿色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d49/" title="蓝色" target="_blank">蓝色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d50/" title="紫色" target="_blank">紫色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d51/" title="黑色" target="_blank">黑色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d52/" title="灰色" target="_blank">灰色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d53/" title="原木色" target="_blank">原木色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/pic-d54/" title="彩色" target="_blank">彩色</a></span>
                </dd>
            </dl>
        </div>
        <div class="subtitle">
            <span>
                <a href="http://meitu.tugou.com/case/">装修案例</a></span>
        </div>
        <div class="list">
            <dl class="list-hot">
                <dt>户型：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/case-a55/" title="小户型" target="_blank">小户型</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-a56/" title="一居" target="_blank">一居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-a57/" title="二居" target="_blank">二居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-a58/" title="三居" target="_blank">三居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-a59/" title="四居" target="_blank">四居</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-a60/" title="复式" target="_blank">复式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-a61/" title="别墅" target="_blank">别墅</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>面积：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/case-b62/" title="30㎡" target="_blank">30㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b63/" title="40㎡" target="_blank">40㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b64/" title="50㎡" target="_blank">50㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b65/" title="60㎡" target="_blank">60㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b91/" title="30㎡" target="_blank">70㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b92/" title="40㎡" target="_blank">80㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b93/" title="50㎡" target="_blank">90㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b94/" title="60㎡" target="_blank">100㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b95/" title="30㎡" target="_blank">110㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b96/" title="40㎡" target="_blank">120㎡</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-b97/" title="50㎡" target="_blank">>130㎡</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>风格：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/case-c66/" title="简约" target="_blank">简约</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c67/" title="现代" target="_blank">现代</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c68/" title="欧式" target="_blank">欧式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c69/" title="中式" target="_blank">中式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c70/" title="田园" target="_blank">田园</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c71/" title="地中海" target="_blank">地中海</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c72/" title="美式" target="_blank">美式</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c73/" title="混搭" target="_blank">混搭</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c74/" title="宜家" target="_blank">宜家</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c75/" title="简欧" target="_blank">简欧</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c76/" title="新古典" target="_blank">新古典</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-c77/" title="东南亚" target="_blank">东南亚</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>色系：</dt>
                <dd>
                    <span>
                        <a href="http://meitu.tugou.com/case-d78/" title="白色" target="_blank">白色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d79/" title="米色" target="_blank">米色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d80/" title="黄色" target="_blank">黄色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d81/" title="橙色" target="_blank">橙色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d82/" title="红色" target="_blank">红色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d83/" title="粉色" target="_blank">粉色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d84/" title="绿色" target="_blank">绿色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d85/" title="蓝色" target="_blank">蓝色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d86/" title="紫色" target="_blank">紫色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d87/" title="黑色" target="_blank">黑色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d88/" title="灰色" target="_blank">灰色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d89/" title="原木色" target="_blank">原木色</a></span>
                    <span>
                        <a href="http://meitu.tugou.com/case-d90/" title="彩色" target="_blank">彩色</a></span>
                </dd>
            </dl>
        </div>
        <div class="subtitle">
            <span>
                <a href="http://www.tugou.com/jy/">装修经验</a></span>
        </div>
        <div class="list">
            <dl class="list-hot">
                <dt>装修前：</dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/jy/yf/" title="收房验房" target="_blank">收房验房</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/sj/" title="设计阶段" target="_blank">设计阶段</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/ys/" title="装修预算" target="_blank">装修预算</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/ht/" title="装修合同" target="_blank">装修合同</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jc/" title="建材选购" target="_blank">建材选购</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/fs/" title="装修风水" target="_blank">装修风水</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>装修中：</dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/jy/cg/" title="房屋拆改" target="_blank">房屋拆改</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/sd/" title="水电阶段" target="_blank">水电阶段</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/mg/" title="木工阶段" target="_blank">木工阶段</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/ng/" title="泥工阶段" target="_blank">泥工阶段</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/yq/" title="油漆阶段" target="_blank">油漆阶段</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jg/" title="竣工收尾" target="_blank">竣工收尾</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>装修后：</dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/jy/bj/" title="搬家入住" target="_blank">搬家入住</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/rz/" title="软装搭配" target="_blank">软装搭配</a></span>
                    <span>
                        <a href="http://www.tugou.com/jy/jz/" title="家居生活" target="_blank">家居生活</a></span>
                    <span>
                        <a href="http://www.tugou.com/recom/" title="推荐分类" target="_blank">推荐分类</a></span>
                </dd>
            </dl>
        </div>
        <div class="subtitle">
            <span>
                <a href="http://www.tugou.com/baike/">装修百科</a></span>
        </div>
        <div class="list">
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-1/">装修百科：</a></dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-11/" title="装修价格" target="_blank">装修价格</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-12/" title="施工安装" target="_blank">施工安装</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-13/" title="装修公司" target="_blank">装修公司</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-14/" title="拆改" target="_blank">拆改</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-15/" title="水电" target="_blank">水电</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-16/" title="预算" target="_blank">预算</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-17/" title="保养护理" target="_blank">保养护理</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-18/" title="装修术语" target="_blank">装修术语</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-2/">设计百科：</a></dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-19/" title="户型" target="_blank">户型</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-20/" title="风格" target="_blank">风格</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-21/" title="空间" target="_blank">空间</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-22/" title="色彩" target="_blank">色彩</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-23/" title="季节" target="_blank">季节</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-24/" title="局部" target="_blank">局部</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-3/">建材百科：</a></dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-30/" title="采暖" target="_blank">采暖</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-32/" title="管材" target="_blank">管材</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-28/" title="门窗类" target="_blank">门窗类</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-25/" title="灯饰照明" target="_blank">灯饰照明</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-26/" title="厨房卫浴" target="_blank">厨房卫浴</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-27/" title="家装五金" target="_blank">家装五金</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-31/" title="基础材料" target="_blank">基础材料</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-33/" title="电工电料" target="_blank">电工电料</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-29/" title="墙地面材料" target="_blank">墙地面材料</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-4/">软装百科：</a></dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-34/" title="家纺" target="_blank">家纺</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-35/" title="饰品" target="_blank">饰品</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-36/" title="床上用品" target="_blank">床上用品</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-37/" title="布艺织物" target="_blank">布艺织物</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-38/" title="墙面装饰" target="_blank">墙面装饰</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-5/">家具百科：</a></dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-39/" title="卧室家具" target="_blank">卧室家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-40/" title="客厅家具" target="_blank">客厅家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-41/" title="餐厅家具" target="_blank">餐厅家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-42/" title="书房家具" target="_blank">书房家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-43/" title="厨卫家具" target="_blank">厨卫家具</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-44/" title="家具风格" target="_blank">家具风格</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-45/" title="家具材料" target="_blank">家具材料</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-6/">电器百科：</a></dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-46/" title="大家电" target="_blank">大家电</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-47/" title="环境家电" target="_blank">环境家电</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-48/" title="电器护理" target="_blank">电器护理</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-49/" title="厨卫电器" target="_blank">厨卫电器</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-50/" title="健康家电" target="_blank">健康家电</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-7/">生活百科：</a></dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-51/" title="风水" target="_blank">风水</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-52/" title="植物" target="_blank">植物</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-53/" title="动物" target="_blank">动物</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-54/" title="日用" target="_blank">日用</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-55/" title="婚嫁" target="_blank">婚嫁</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-56/" title="运动健身" target="_blank">运动健身</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-57/" title="家居摆件" target="_blank">家居摆件</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-58/" title="花艺装饰" target="_blank">花艺装饰</a></span>
                </dd>
            </dl>
            <dl class="list-hot">
                <dt>
                    <a href="http://www.tugou.com/baike/b-8/">品牌百科：</dt>
                <dd>
                    <span>
                        <a href="http://www.tugou.com/baike/b-59/" title="瓷砖品牌" target="_blank">瓷砖品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-60/" title="地板品牌" target="_blank">地板品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-61/" title="吊顶品牌" target="_blank">吊顶品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-62/" title="门窗品牌" target="_blank">门窗品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-63/" title="灯具品牌" target="_blank">灯具品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-64/" title="橱柜品牌" target="_blank">橱柜品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-65/" title="墙纸品牌" target="_blank">墙纸品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-69/" title="家具品牌" target="_blank">家具品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-70/" title="家电品牌" target="_blank">家电品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-71/" title="家纺品牌" target="_blank">家纺品牌</a></span>
                    <span>
                        <a href="http://www.tugou.com/baike/b-72/" title="卖场品牌" target="_blank">卖场品牌</a></span>
                    <span style="width: 122px;">
                        <a href="http://www.tugou.com/baike/b-66/" title="卫浴洁具品牌" target="_blank">卫浴洁具品牌</a></span>
                    <span style="width: 122px;">
                        <a href="http://www.tugou.com/baike/b-67/" title="水槽龙头品牌" target="_blank">水槽龙头品牌</a></span>
                    <span style="width: 122px;">
                        <a href="http://www.tugou.com/baike/b-68/" title="开关插座品牌" target="_blank">开关插座品牌</a></span>
                </dd>
            </dl>
        </div>
    </div>
</div>
