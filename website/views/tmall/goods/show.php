<?php
use yii\helpers\Url;

$cssFiles = ['style', 'tugao', 'tplb'];
$jsFiles = [
	'jquery-1.7.2.min', 'tugao', 'action', 'mzp-packed-me',
	'transport', 'utils', 'json2', 'common'
];
?>
<?php echo $this->render('@website/views/tmall/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>
<body>
<?php echo $this->render('@website/views/tmall/common/_header'); ?>
<div class="ur_here blank">
	<a href='<?= Yii::getAlias('@websiteurl'); ?>'>首页</a>
    <code>&gt;</code>
    <a href="brand.php?id=44">途高台盆龙头</a>
	&gt; <?= $info['name']; ?>
</div>
<div class="t_l">
    <div class="main-Box">
	    <form class="goodsform" action="javascript:addToCart(<?= $info['id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
        <div class="side" id="preview">
            <div class="jqzoom">
                <img id="bigImg" src="images/201405/goods_img/94_P_1400261633466.jpg"
                width="455px" height="320px">
            </div>
            <div id="spec">
                <div id="specList">
                    <ul class="listImg" id="listImg">
                        <li>
                            <img id="smallPicOne" src="images/201405/thumb_img/94_thumb_P_1400261633410.jpg"
                            name="images/201405/goods_img/94_P_1400261633466.jpg" />
                            </a>
                        </li>
                        <li>
                            <img id="smallPicOne" src="images/201405/thumb_img/94_thumb_P_1400261633759.jpg"
                            name="images/201405/goods_img/94_P_1400261633316.png" />
                            </a>
                        </li>
                        <li>
                            <img id="smallPicOne" src="images/201405/thumb_img/94_thumb_P_1400261633540.jpg"
                            name="images/201405/goods_img/94_P_1400261633415.png" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="goods-r fr">
            <ul>
                <li class="goods-tit">
                    <h2>
                        <?= $info['name']; ?><br>
							<span><?= $info['description']; ?></span>
                    </h2>
                </li>
                <li class="goods-main">
                    <dl>
                        <dt>RMB:</dt>
                        <dd>
                            <span class="buy">
								    <span id="shop_price"><?= $info['price']; ?></span>
                            </span>
                        </dd>
                        <dd>
                            <span class="tg_discount" id="tg_discount">
                                4.2折
                            </span>
                        </dd>
                        <dd>
                            <div class="xin_buy2">
                                <span>
                                    市场价：
										<span class="money">￥<?= $info['market_price']; ?></span>
                                </span>
                            </div>
                        </dd>
                    </dl>
                </li>
                <li class="goods-main">
                    <div class="yunfei">
                        <span class="goods_main_tit">
                            运费：
                        </span>
                        <span style="color:#DD4250;font-family:宋体;">
                            全场满100包邮（偏远地区除外）
                        </span>
                    </div>
                </li>
                <li class="goods-main">
                    <dl>
                        <dd class="tg_num">
                            数量：
                        </dd>
                        <dd class="tg_num_box">
                            <input type="button" class="fuhao_left" onclick="sub_new()" id="sub" value="-"
                            />
                            <input class="shuzi" id="shuzi" value='1' />
                            <input type="button" class="fuhao_right" onclick="add_new()" id="add"
                            value="+" />
                        </dd>
                        <dd class="tg_yqg">
                            累计售出
                            <span class="goods_num">
                                1271
                            </span>
                            件
                        </dd>
                    </dl>
                </li>
                <li>
                    <div class="tg_tj_img">
                        <div class="buy_immediately" onclick="addToCartImm(94)" />立刻购买</div>
                        <div class="buy-btn" onclick="addToCart(94)">加入购物车</div>
                    </div>
                </li>
            </ul>
        </div>
        </form>
    </div>
</div>
<div class="block clearfix" style="margin-top:50px;" id="good_content">
    <div id="pageRight" class="pright fl">
        <div class="ads_pleft">
            <div class="xin_box">
                <div class="xin_box-t"></div>
                <div class="xin_box-cont">
                    <div class="xin_box_cont_title right_title">
                        <h3>途高热销产品</h3>
                    </div>
                    <div class="ads_content">
                        <ul style="height:auto; overflow:hidden;">
                            <li>
                                <div class="xin_box_related_goods">
                                    <div style="float:left;">
                                        <a href="goods.php?id=227" target="_blank">
                                            <img src="images/201411/thumb_img/227_thumb_G_1416594008839.jpg" width="108"
                                            height="76" alt="神炭（除醛竹炭）——100g*40包=4000g/箱" />
                                        </a>
                                    </div>
                                    <div class="ads_words" style="margin-top:10px;width:190px">
                                        <dl>
                                            <dd>
                                                <a href="goods.php?id=227" target="_blank" title=神炭（除醛竹炭）——100g*40包=4000g/箱>
                                                    神炭（除醛竹炭）——100g*40包=4000g/箱
                                                </a>
                                            </dd>
                                            <dd class="goods_scj">
                                                <span>
                                                    &nbsp;RMB：
                                                </span>
                                                <span class="buy2_right">
                                                    129
                                                </span>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xin_box" id="ads_looking">
                <div class="xin_box-t"></div>
                <div class="xin_box-cont">
                    <div class="xin_box_cont_title right_title">
                        <h3>您正在看它</h3>
                    </div>
                    <div class="ads_content">
                        <div class="ads_looking">
                            <img src="images/201405/goods_img/94_P_1400261633466.jpg" border="0" />
                            【Noken/诺肯】净铅纯铜冷热水面盆龙头套餐0324（适用台上盆）
                            <dl>
                                <dt>
                                    RMB:
                                </dt>
                                <dd>
                                    <span class="looking_buy">
                                        <span id="shop_price">
                                            <span id="shop_price">
                                                249
                                            </span>
                                        </span>
                                    </span>
                                </dd>
                                <dd>
                                    <span class="looking_tg_discount" id="tg_discount">
                                        4.2折
                                    </span>
                                </dd>
                                <dd class="looking_xin_buy2">
                                    <div>
                                        <span>
                                            市场价：
                                            <span class="money">
                                                ￥596
                                            </span>
                                        </span>
                                    </div>
                                </dd>
                            </dl>
                            <div class="looking_buy">
                                <span class="looking_buy_immediately" onclick="addToCartImm(94)">
                                    立即购买
                                </span>
                                <span class="looking_buy-btn" onclick="addToCart(94)">
                                    放入购物车
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pageLeft_goods" class="fr">
        <div class="clearfix">
            <div class="infotit clearfix" id="com_b" style="postion:fixed;top:0;left:0;">
                <ul>
                    <a href="#com_b" class="xin_three">
                        <li id="three1" onclick="Tab('three',1,4)" class="xin_hover">
                            商品描述
                        </li>
                    </a>
                    <a href="#com_b" class="xin_three">
                        <li id="three2" onclick="Tab('three',2,4)">
                            商品评价
                        </li>
                    </a>
                    <a href="#com_b" class="xin_three">
                        <li id="three3" onclick="Tab('three',3,4)">
                            售后保障
                        </li>
                    </a>
                    <a href="#com_b" class="xin_three">
                        <li id="three4" onclick="Tab('three',4,4)">
                            订购流程
                        </li>
                    </a>
                </ul>
            </div>
            <div class="tagcontent" id="con_three_1">
                <div class="dptg-intro">
                    <table cellspacing="0" cellpadding="0" width="690" height="6200" border="0"
                    id="__01">
                        <tbody>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_01.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_02.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_03.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_04.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_05.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_06.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_07.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_08.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_09.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_10.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_11.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_12.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_13.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_14.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_15.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_16.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_17.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_18.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_19.jpg"
                                    alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img width="690" height="310" src="/uploads/shop/noken_hz0324/nk_hz0324_20140911_20.jpg"
                                    alt="" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tagcontent" id="con_three_2" style="display:none;">
                <div id="con_four_7">
                    <div class="mc">
                        <!-- <div class="mt">
                        商品评价
                        </div>-->
                        <div class="rate">
                            <strong>
                                100
                                <span>
                                    %
                                </span>
                            </strong>
                            <br>
                            <span>
                                好评度
                            </span>
                        </div>
                        <div class="percent">
                            <dl>
                                <dt>
                                    好评
                                    <span>
                                        (100%)
                                    </span>
                                </dt>
                                <dd>
                                    <div style="width: 100%;">
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    中评
                                    <span>
                                        (0%)
                                    </span>
                                </dt>
                                <dd class="d1">
                                    <div style="width: 0%;">
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    差评
                                    <span>
                                        (0%)
                                    </span>
                                </dt>
                                <dd class="d1">
                                    <div style="width: 0%;">
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="actor-new">
                            <dl>
                                <dt>
                                    买家印象：
                                </dt>
                                <dd class="p-bfc">
                                    <q class="comm-tags">
                                        <span>
                                            品质优
                                        </span>
                                        <em>
                                            (16)
                                        </em>
                                    </q>
                                    <q class="comm-tags">
                                        <span>
                                            性价比高
                                        </span>
                                        <em>
                                            (16)
                                        </em>
                                    </q>
                                    <q class="comm-tags">
                                        <span>
                                            配套齐全
                                        </span>
                                        <em>
                                            (12)
                                        </em>
                                    </q>
                                    <q class="comm-tags">
                                        <span>
                                            造型美观
                                        </span>
                                        <em>
                                            (8)
                                        </em>
                                    </q>
                                    <q class="comm-tags">
                                        <span>
                                            服务贴心
                                        </span>
                                        <em>
                                            (4)
                                        </em>
                                    </q>
                                    <q class="comm-tags">
                                        <span>
                                            很惊喜
                                        </span>
                                        <em>
                                            (0)
                                        </em>
                                    </q>
                                    <q class="comm-tags">
                                        <span>
                                            正品无误
                                        </span>
                                        <em>
                                            (0)
                                        </em>
                                    </q>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="pj_detail">
                        <ul>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                                <span>
                                                    配套齐全
                                                </span>
                                            </dd>
                                            <dd>
                                                好评
                                            </dd>
                                            <dd class="pp_time">
                                                2015-06-14
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        gazhu
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                                <span>
                                                    配套齐全
                                                </span>
                                            </dd>
                                            <dd>
                                                好评
                                            </dd>
                                            <dd class="pp_time">
                                                2014-11-16
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        dayu350
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                                <span>
                                                    配套齐全
                                                </span>
                                            </dd>
                                            <dd>
                                                好评
                                            </dd>
                                            <dd class="pp_time">
                                                2014-11-15
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        angell1022
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                                <span>
                                                    配套齐全
                                                </span>
                                            </dd>
                                            <dd>
                                                好评
                                            </dd>
                                            <dd class="pp_time">
                                                2014-11-15
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        beckrui
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                                <span>
                                                    配套齐全
                                                </span>
                                            </dd>
                                            <dd>
                                                好评
                                            </dd>
                                            <dd class="pp_time">
                                                2014-09-23
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        wozaixiuxian
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                                <span>
                                                    配套齐全
                                                </span>
                                            </dd>
                                            <dd>
                                                价格很实惠，质量很不错，感觉捡了个便宜。虽然款式不太高大上，但是放在主卧内卫自己用感觉问题不大，呵呵
                                            </dd>
                                            <dd class="pp_time">
                                                2014-09-11
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        无尽的PK
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                            </dd>
                                            <dd>
                                                东西非常好。价格非常实惠。希望还有机会购买质感很好，质量也很好，超值
                                            </dd>
                                            <dd class="pp_time">
                                                2014-09-11
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        xzy3782601
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pj_detail_wrapper">
                                    <div class="pj_detail_wra_left">
                                        <dl>
                                            <dd>
                                                标签：
                                                <span>
                                                    品质优
                                                </span>
                                                <span>
                                                    性价比高
                                                </span>
                                                <span>
                                                    配套齐全
                                                </span>
                                            </dd>
                                            <dd>
                                                非常满意的一次，东西很沉，质量很好做工精致，价钱便宜，物超所值，性价比很高。
                                            </dd>
                                            <dd class="pp_time">
                                                2014-09-10
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="pj_detail_wra_right">
                                        买家
                                        <br/>
                                        falcon0822
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div id="pager">
                            <dl>
                                <dd>
                                    1
                                </dd>
                                <dd>
                                    <a href="javascript:void(0)" onClick="goods_comment('goods.php?act=comment_query&goods_id=94&page=2')">
                                        2
                                    </a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tagcontent" id="con_three_3" style="display:none;">
                <!--<blockquote>-->
                <div class="dptg-intro">
                    <!--<div class="detail-tit">【网站售后保障】</div>-->
                    <table border="0" cellpadding="0" cellspacing="0" height="1339" id="__01"
                    width="690">
                        <tbody>
                            <tr>
                                <td>
                                    <img alt="" height="287" src="/images/bz_01.jpg" width="690" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="" height="287" src="/images/bz_02.jpg" width="690" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="" height="286" src="/images/bz_03.jpg" width="690" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="" height="287" src="/images/bz_04.jpg" width="690" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img alt="" height="287" src="/images/bz_05.jpg" width="690" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--</blockquote>-->
            </div>
            <div class="tagcontent" id="con_three_4" style="display:none;">
                <blockquote>
                    <div class="dptg-intro">
                        <!-- <div class="detail-tit">
                        【网站订购流程】</div>
                        <div>-->
                        <img border="0" src="/uploads/shop/ppgmm/shop_list.jpg" />
                        <!--<br />
                        <img border="0" src="/uploads/shop/robam/qgll.jpg" />
                    </div>
                    -->
            </div>
            </blockquote>
        </div>
        <script type="text/javascript">
            reg("com");
        </script>
    </div>
</div>
</div>
<div class="blank">
</div>
</body>
<script type="text/javascript">
var goods_id = 94;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 94;
var now_time = 1457939285;
var market_price = 596;

onload = function() {
    //changePrice();
    fixpng();
    try {
        onload_leftTime();
    } catch(e) {}
}

function goods_comment(url) {
    //alert(url)
    $.get(url, {
        t: Math.random()
    },
    function(res) {
        //alert(res);
        document.getElementById("con_three_4").innerHTML = res;
    });
}

function changePrice() {
    var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']); //商品的属性id
    //var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
    //获取商品的件数 edit by gaofei 16:19 2014/10/21
    var qty = document.getElementById('shuzi').value;

    Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty + '&market_price=' + market_price, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res) {
    if (res.err_msg.length > 0) {
        alert(res.err_msg);
    } else {
        //document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
        document.getElementById('shuzi').value = res.qty;

        document.getElementById('shop_price').innerHTML = res.price;
        document.getElementById('tg_discount').innerHTML = res.discount + '折';
        /*
if (document.getElementById('ECS_GOODS_AMOUNT'))
  document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;*/
    }
}
</script>
</div>
<?php echo $this->render('@website/views/tmall/common/_side_bar'); ?>
<?php echo $this->render('@website/views/tmall/common/_footer'); ?>
</body>
</html>
