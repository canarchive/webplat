
<!-- 商品弹窗 start -->
<div class="tcShop tcShopSign">
    <span class="radiusClose"></span>
    <div class="title clear">
        <h3>弗沃德实木家具南美胡桃餐厅套</h3>
    </div>
    <div class="tcShopCon">
        <div class="left">
            <img src="" alt="弹窗图片" width="194" height="193">
            <p>特价商品抢购仅限团购会现场</p>
        </div>
        <div class="right">
            <div class="num">
                <a class="oldPrice">原价:￥13800</a>
                <a>特价:￥<em class="newPrice">6880</em></a>
            </div>
            <div class="arrinput">
                <input class="text user_name" type="text" value="您的称呼">
                <input class="tel user_phone" type="text" value="您的电话">
                <p class="errorTips"></p>
            </div>
            <button id="signup-product">立即预定</button>
        </div>
    </div>

</div>
<!-- 商品弹窗 end -->

<!-- 领取优惠券弹框 start -->
<div class="tcShop tcSiginUp">	
    <span class="radiusClose"></span>
    <div class="title clear">
        <h3></h3>
    </div>
    <div class="tcShopCon">
        <div class="left">
            <img src="<?= Yii::getAlias('@asseturlold'); ?>/grouponDetail/images/hf_34.jpg" alt="弹窗图片" width="140px">
            <p>报名成功后即可领取红包</p>
        </div>
        <div class="right">
            <div class="arrinput">
                <input class="text user_name" type="text" value="您的称呼">
                <input class="tel user_phone" type="text" value="您的电话">
                <p class="errorTips"></p>
            </div>
            <button>点击领取</button>
        </div>
    </div>

</div>
<!-- 领取优惠券弹框 end -->

<!-- 抽奖弹窗 start -->
<div class="tcRadius tcLuckyDraw">
    <span class="radiusClose"></span>
    <div class="title">
        <h3>弗沃德实木家具南美胡桃餐厅套</h3>
    </div>
    <div class="tcRadiusCon">
        <div class="left">
			<img src="<?= Yii::getAlias('@asseturlold'); ?>/grouponDetail/images/hf_32.png" alt="我要抽奖" width="285" height="285">
            <img class="rotate_pointer" src="<?= Yii::getAlias('@asseturlold'); ?>/grouponDetail/images/hf_33.png" alt="我要抽奖" width="92" height="117">
			<div id="rotate_pointer"></div>
        </div>
        <div class="right">
            <ul class="rightExplain">
                <li>
                    <h4>奖券说明</h4>
                </li>
            </ul>
            <ul class="rightRule">
                <li>
                    <h4>抽奖规则</h4>
                </li>
                <li>1、报名活动成功后，即可领取相应代金券。</li>
                <li>2、代金券会以短信形式发送至您填写的手机号，请注意保存。</li>
                <li>3、团购会现场，业主可以凭借短信到指定商家使用相应金额代金券，具体使用规则以各商家设置规则为准。</li>
                <li>4、此代金券不找零、不折现、每张订单只可使用一次。在指定日期内，限一次性使用完。如订单使用后发生退款，代金券不作为退款项。</li>
                <li>5、商家设置不同代金券金额供用户领取。</li>
                <li>6、每个账户的代金券领取数量有限，请谨慎挑选适用的代金券。</li>
                <li>7、活动最终解释权归一起装修网所有。</li>
            </ul>
        </div>
    </div>

</div>
<!-- 抽奖弹窗 end -->

<!-- 抽奖成功弹窗 start -->
<div class="tcRadiusSuc">
</div>
<!-- 抽奖成功弹窗 end -->

<!-- 抽奖名额使用完毕 start -->
<div class="tcRadiusOver">
    <span class="radiusClose"></span>
    <div class="title">
        <h3>弗沃德实木家具南美胡桃餐厅套</h3>
    </div>
    <h3 class="tcRadiusOverSmg">您的抽奖名额已使用完毕，请准时参会。</h3>
    <button class="btn">我知道了</button>
</div>
<!-- 抽奖名额使用完毕 end -->

<!-- 抽奖活动没有开始 start  -->
<div class="tcRadiusStart">
    <span class="radiusClose"></span>
    <h3 class="title">温馨提示</h3>
    <h3 class="tcRadiusStartSmg">活动未开始，敬请关注！</h3>
    <button class="btn">我知道了</button>
</div>
<!-- 抽奖活动没有开始 end -->
<!-- 报名弹窗 start -->
<div class="nameWidow_con">
    <span class="name_close"></span>
    <div class="widow_table">
		<h3><?= $info['name']; ?></h3>
        <div class="address">
			<p>地点：<?= $info['address']; ?></p>
			<p class="last">时间：<?= date('Y-m-d H:i', $info['start_at']); ?></p>
        </div>
        <ul class="widow_table_list">
            <li>
                <label for="name">您的称呼：</label>
                <input type="text" class="user_name" name="name" id="name" value="您的称呼" /> <i>*</i>
                <span>称呼不能为空</span>
            </li>
            <li>
                <label for="tel">您的电话：</label>
                <input type="text" class="user_phone" name="tel" id="tel" value="您的电话" /> <i>*</i>
                <span>电话不能为空</span>
            </li>
        </ul>
		<p class="errorTips"></p>
    <button class="name" id="signup-pop">免费报名</button>
  </div>
</div>
<!-- end 报名弹窗 -->

<!-- 报名失败弹窗 start -->
<div class="sucWidow_con">
    <span class="sucWidow_close"></span>
    <h3>报名失败！</h3>
    <p class="up vouchernote" id="error_message">客服人员会在15分钟内与您联系，请保持电话畅通！</p>
	<img src="<?php if (!empty($info['companyInfo']['company_wx_qrcode'])) { echo $info['companyInfo']['company_wx_qrcode']; } else { echo Yii::getAlias('@asseturlold') . 'grouponDetail/images/hf_31.jpg'; } ?>" alt="着陆页-报名成功" width="219px" height="219px">	
    <span class="last">扫一扫关注微信公众号</span>
    <p class="last">
        你还可以查看
        <a href="http://www.17house.com/xiaoguotu/">更多效果图</a>
        或者去
        <a href="javascript:;">家具建材</a>
        <a href="http://mall.17house.com/">家具建材</a>
        选购优质建材
    </p>
    <div class="btn">我知道了</div>
</div>
<!-- end 报名失败弹窗 -->

<!-- 报名成功弹窗 start -->
<div class="errorWidow_con">
    <span class="errorWidow_close"></span>
    <h3>恭喜您报名成功！</h3>
    <p class="up vouchernote">客服人员会在15分钟内与您联系，请保持电话畅通！</p>
    <ul class="list">
        <li> <i>1</i>
            <div>
                如有疑问请联系您的专属客服（
				<span><?php if (!empty($info['companyInfo']['hotline'])) { echo $info['companyInfo']['hotline']; } else { echo '400-689-1717'; } ?></span>
                ），客服工号为：
                <span id="employeeId"></span>
            </div>
        </li>
        <li> <i>2</i>
            <div>请您提前了解详细乘车路线和各商家产品型号及报价、售后情况。</div>
        </li>
        <li>
            <i>3</i>
            <div>活动当天准时签到有机会领取礼品。活动当天折扣只限当天，下单只需交纳商家预定金，千元定金还可享受砸金蛋，返现金双重大礼！</div>
        </li>
        <li>
            <i>4</i>
            <div>正式签单后可登录网站论坛点评商家赢话费。</div>
        </li>
        <li>
            <i>5</i>
            <div>
                你还可以查看
               <a href="http://www.17house.com/xiaoguotu/"><p>更多效果图</p></a>
                或者去
               <a href="http://mall.17house.com/"><p>家具建材频道</p></a>
                选购优质建材
            </div>
        </li>
    </ul>
    <div class="btn">我知道了</div>
</div>
<!-- end 报名成功弹窗 -->

<!-- map弹窗 start -->
<div class="mapWindow">
	<span class="window_close"></span>
	<h2><?= $info['name']; ?></h2>
	<img src="<?= $info['map']; ?>" alt="地图" height="450">
</div>
<!-- end map弹窗 -->

<?php if (!empty($grouponNext)) { ?>
<!-- 团购会活动结束弹窗 start -->
<div class="activeEnd_con">
	<h2>本场团购会已经结束，您可以报名下一场团购会</h2>
	<div class="left">
		<img src="<?= $grouponNext['top_thumb']; ?>" width="312" height="187">
	</div>
	<div class="right">
		<h3><?= $grouponNext['groupon_name']; ?></h3>
		<p>时间：<?= $grouponNext['groupon_display_date']; ?></p>
		<p>地点：<?= $grouponNext['groupon_address']; ?></p>
		<span>已有<em class=""><?= $grouponNext['signup_number']; ?></em>人报名</span>
		<a href="<?= $grouponNext['visit_url']; ?>">去看看</a>
	</div>
	<img class="listImg" src="<?= Yii::getAlias('@asseturlold'); ?>/grouponDetail/images/list.png" width="689">
</div>
<script>
homeFair.activeEnd();
</script>
<!-- end 团购会活动结束弹窗 -->
<?php } ?>

<!-- 弹出广告 start-->
<div class="pop_banner">
</div>
<!-- 弹出广告 end-->
