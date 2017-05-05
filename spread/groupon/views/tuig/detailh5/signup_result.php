<?php echo $this->render('_header', ['info' => $info]); ?>
    <!--页面主体 start-->
    <section class="container border-top">
        <div class="coupon-tips">
			<?php if (!empty($voucher)) { ?>
			<?php if ($voucher['status'] == 200) { ?>
			<p class="text-center f20 cGreen"><i class="iconfont f40">&#xe62a;</i><br /><span class="ml3">领取成功！</span></p>
            <?php } else { ?>
            <p class="text-center f20 cRed"><i class="iconfont f34">&#xe626;</i><br /><span class="ml3">领取失败！</span><br />
			<span class="tips f14 cGray"><?= $voucher['message']; ?></span>
            </p>
            <?php } ?>
            <dl>
                <dt class="f16">代金券使用规则：</dt>
                <dd class="f14 cGray">1、报名活动成功后，即可领取相应代金券。</dd>
<dd class="f14 cGray">2、代金券会以短信形式发送至您填写的手机号，请注意保
存。</dd>
<dd class="f14 cGray">3、团购会现场，业主可以凭借短信到指定商家使用相应金
额代金 券，具体使用规则以各商家设置规则为准。</dd>
<dd class="f14 cGray">4、此代金券不找零、不折现、每张订单只可使用一次。在
指定日 期内，限一次性使用完。如订单使用后发生退款，
代金券不作 为退款项。</dd>
<dd class="f14 cGray">5、商家设置不同代金券金额供用户领取。</dd>
<dd class="f14 cGray">6、每个账户的代金券领取数量有限，请谨慎挑选适用的代
金券。</dd>
<dd class="f14 cGray">7、活动最终解释权归一起装修网所有。</dd>
<dd class="f14 cGray">备注： 一起装修网保留对此代金券的解释权（不含特价）</dd>
<dd><a href="/tuan/{$data.grouponId}.html" class="fr cBlue">返回活动</a></dd>
            </dl>
            <?php } else { ?>
			<?php if ($status == 200) { ?>
            <p class="text-center f20 cGreen"><i class="iconfont f40">&#xe62a;</i><br />
			    <span class="ml3">活动报名成功！</span><br />
                <span class="tips f14 cGray">客服人员会在15分钟内与您联系，请保持电话畅通！</span>
			</p>
			<?php } else { ?>
            <p class="text-center f20 cRed"><i class="iconfont f34">&#xe626;</i><br /><span class="ml3">活动报名失败！</span><br />
			<span class="tips f14 cGray"><?= $message; ?></span>
            </p>
			<?php } ?>

            <dl>
                <dt class="f16">温馨提示：</dt>
				<dd class="f14 cGray">1、如有疑问请联系您的专属客服<span class="cOrange">(<?= $hotline; ?>)</span><?php if (!empty($employee_code)) { ?>，客服工号为：<span class="cOrange"><?= $employee_code; ?></span><?php } ?>。</dd>
				<dd class="f14 cGray">2、请您提前了解<span class="cBlue"><a href="<?= $groupon_map_link; ?>">详细乘车路线</a></span>和个商家产品型号报价、售
后情况。 </dd>
<dd class="f14">3、活动当天准时签到有机会领取礼品。活动当天折扣只限当天，下单只需交纳商家预定金，千元定金还可享受砸金蛋，返现金双重大礼！</dd>
<dd class="f14 cGray">4、正式签单后可登陆网站论坛对商家的服务进行点评，帮
助其他业主一起监督商家。 </dd>
<dd class="f14 cGray">5、活动最终解释权归一起装修网所有。</dd>
<dd class="f14 cGray">备注： 一起装修网保留对此代金券的解释权（不含特价）</dd>
<dd><a href="<?= "/detail/{$template_code}.html?id={$grouponId}"; ?>" class="fr cBlue">返回活动</a></dd>
            </dl>
            <?php } ?>

        </div>
		<p class="block-more block-weixin cDGray"><i class="iconfont f18 cGreen">&#xe627;</i> 更多优惠请关注微信公众账号：<span class="cGreen"><?= $weixin; ?></span></p>
    </section>
    <!--页面主体 end-->
<?php echo $this->render('_footer', ['info' => $info]); ?>
