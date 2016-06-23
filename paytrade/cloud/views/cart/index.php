<?php
use yii\helpers\Url;
?>
<div class="pd_b40">
<div class="wrap ie78">
    <div class="lineH24 t_l  pd_t30 pd_b10 bd_b_d5c ">
         <span class="f18 col_666 mg_l10 col_523">购物车</span>
    </div>
    <div class="comment_box">
        <table class="sop_table1" cellpadding="0" cellspacing="0">
            <tr>
                <th colspan="2" width="15%" align="left" class="pd_l10">
                    <label class="checked checkbox" name="chkAll">
                    <i class="openIcon inline mg_r10"></i>
                    </label>
                    <span class="col_523">全选</span>
                </th>
                <th align="left" class="col_523">商品信息</th>
                <th width="10%" align="center" class="col_523">单价</th>
                <th width="10%" align="center" class="col_523">数量</th>
                <th width="20%" align="center" class="col_523">包装</th>
                <th width="10%" align="center" class="col_523">小计</th>
                <th width="5%" align="center" class="col_523">操作</th>
            </tr>
        </table>
    </div>
    <?php foreach ($datas['goodsInfos'] as $data) { $info = $data['info']; ?>
    <div class="shoppingBox ">
        <div class="order_title divdel" name="divTitle_45" supplierid="45">
            <label class="checked inline col_666 checkbox" name="chk_Supplier" data-value="45">
                <i class="openIcon inline mg_r10"></i>
            </label>
            <!--<a class="inline contact_n mg_l5"  onclick="loadHuanxinWebim('user_0', 'supplier_45', 0, '', '')">
                <span class="inline imIconS mg_r5"></span>联系商家
            </a>
            <a>
                <span class="inline">商家：</span>
                <span id="J_product_name " class="inline col_666">发现鞋业</span>
			</a>-->
        </div>
        <table class="sop_table1 lastTh tabledel bg_fff" cellpadding="0" cellspacing="0">
            <tr>
                <td width="30" align="left" class="pd_l10">
                    <label class="checked checkbox chk_Calc"
                        name="chk_45"
                        supplierid="45"
                        data-value="731594"
                        data-design="1300450000000080060"
                        data-num="1">
                        <i class="openIcon inline"></i>
                    </label>
                </td>
                <td width="130" align="left">
                    <span class="sop_img inline">
					    <a target="_blank" href="<?= Yii::getAlias('@websiteurl') . Url::to(['goods/show']); ?>">
						    <img width="100" height="100" src="<?= $info->getAttachmentUrl($info->main_photo); ?>" />
                        </a>
                    </span>
                </td>
                <td align="left">
					<a target="_blank" href="<?= Yii::getAlias('@websiteurl') . Url::to(['goods/show']); ?>">
					    <span class="col_523"><?= $info->name; ?></span>
                    </a><br />
                    <!--<div class="col_999 inline mg_t5">尺码:40<br/>签名：无</div><br />
                    <a id="material_list" designid="1300450000000080060" href="#" class="col_aaa inline mg_t5 material_list">用料清单>></a><br />-->
                </td>
				<td width="10%" align="center" class="ff6600">¥<?= $info->price; ?></td>
                <td width="10%" align="center" class="sizeZero">
                    <i class="sign minus inline"></i>
                    <input name ="quantity" type="text" maxlength="3" name="input_731594"
					    value="<?= $data['number']; ?>" shopcarid="731594"
                        discount="0.0" price="299.0"
                        num="1" packageprice="0.0"
                        modelid="1300450000" supplierid="45"
                        designid="1300450000000080060" sizename="尺码:40"
                        class="inpCom w40 inline t_c">
                    <i class="sign plus inline"></i>
                    <p class="col_b76 mg_t5"></p>    
                </td>
                <td width="20%" align="center" class="col_666">
                <div class="pack_select sel_span">
                    <span class="span_package_type">普通包装</span>
                    <span class="span_package_price pack_selects">(免费)</span>
                    <div class="sel_div pack_sdiv none">
                        <ul class="sel_ul">
                            <li data-value="59" data-carid="731594" class="hovername">
                                <dl class=" clearfix pd_t10 pd_b10 lpBoxbd">
                                    <dt class="packShow  f_l">
                                        <img src="http://img.biyao.com/files/data0/static/sj/img/packing2.png" width="80" height="50">
                                    </dt>
                                    <dd class="col_666 f_l mg_l5">
                                        <span class="inline"><span class="PackageType">普通包装</span><br>¥<span class="PackagePrice">0</span></span></span>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
                </td>
				<td width="10%" align="center"><strong class="ff6600">¥<?= $data['price']; ?></strong></td>
                <td width="5%" align="center"><a href="javascript:;" class="link_09c a_delete" id="deleteLink" data="731594"></a></td>
            </tr>
        </table>
    </div>
    <?php } ?>

    <div class="firmbox pd_t10 bg_fff tj_box">
        <div class="lineH30  pd_l10 pd_r10 clearfix ">
            <div class="f_l">
				<label class="checked inline checkbox" name="chkAll">
					<i class="openIcon inline mg_r10"></i>
				</label>
				<span class="inline">全选</span>
                <a href="javascript:;" class="inline mg_l10 mg_r10 col_link" id="a_BatchDel">删除</a>
            </div>
            <div class="f_r col_666 f14">
			    商品总价：<span class="w80 inline col_f60 pd_r5 f14" id="totalPrice">¥<?= $datas['priceAll']; ?></span>
            </div>
			<span class="inline f_r mg_r30 col_666 f14">商品总数 <em class="col_f60  f14" id="totalNum"><?= $datas['numberAll']; ?></em> 件</span>
        </div>
        <div class="lineH30  pd_l10 pd_r10 clearfix ">
            <div class="f_r col_666 f14">
                包装费：<span class="w80 inline col_f60 pd_r5" id="packagePrice">¥0</span>
            </div>
        </div>    
    </div>
    <div class="tallyBox">
        <a href="http://www.biyao.com/home/index.html" class="inline goonShopping ">继续购物</a>
        <a href="javascript:;" class=" tallyBTnPos inline span_submit_calre js_btn">结算</a>
        <p class="t_r">
            合计（不含运费）：<span class="f20 ff6600 inline vTop priceDisplay jsjs">
			¥<?= $datas['priceAll']; ?></span><span class="inline f14 fb ff6600 vTop mg_l5"></span>
        </p>
    </div>
</div>
</div>
<script type="text/javascript"> 
    window.MainSite = "http://www.biyao.com";    
</script>

<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/autocomplete.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/jquery/jquery.pagination.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/ui/pages.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/qrcode.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/buy/shopcarDes.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/lazyloadIM.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/common/lazyload.js?v="></script>
<script src="<?= Yii::getAlias('@asseturl/website'); ?>/basey/js/buy/materiallistDes.js?v="></script>

<script type="text/template" id="materialsOfProductTemplate">
<div class="pop_bd pd_t15 clearfix">
    <ul class="sizeZero ml_list"></ul>
</div>
</script>
