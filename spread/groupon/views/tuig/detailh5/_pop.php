<?php
use yii\helpers\Html;
?>
    <!--弹出层 start-->
    <input type="hidden" class="group-over" value="<?= strval(!empty($grouponNext)); ?>">
    <div class="mask-layer"></div>
    <div class="pop-layer pop-activity">
        <span class="close"><i class="iconfont f30 cWhite">&#xe629;</i></span>
        <div class="pop-content subscribe">
            <ul>
                <!--<li><img src="" alt=""></li>-->
                <li class="f16 mt3 title">红苹果欧式衣柜红苹果欧式</li>
                <li><span class="f26 cPink fB"><em class="f12">￥</em><em class="cur-price">2490</em></span>
                    <del class="ml3 f14 cIGray original-price">¥13899</del>
                </li>
                <li class="mt3">
                    <input type="tel" class="input mobile cMdGray fB f14" placeholder="请输入手机号，享有优先购买权">
                    <span class="error-tips">您输入的手机号不正确，请重新输入</span>
                </li>
                <li><input type="button" class="btn btn-block btn-orange" id="signup-product" value="立即预约"></li>
            </ul>
        </div>
    </div>
    <div class="pop-layer pop-coupon">
        <span class="close"><i class="iconfont f30 cWhite">&#xe629;</i></span>
        <div class="pop-content">
            <p class="num"><em class="price">1000</em><span class="f20 cGray ml3 fN">元</span></p>
            <ul>
                <li class="mt7">
                    <input type="tel" class="input mobile cMdGray fB f14" placeholder="请输入您的手机号码">
                    <span class="error-tips">您输入的手机号不正确，请重新输入</span>
                </li>
                <li class="mt7">
                    <input type="button" class="btn btn-block btn-lightOrange" id="signup-voucher" value="立即免费领取">
                </li>
            </ul>
        </div>
    </div>
    <div class="pop-layer pop-merchant">
        <span class="close"><i class="iconfont f30 cWhite">&#xe629;</i></span>
        <div class="pop-content">
            <div class="content clearfix cDGray">
                <p><img src="" alt="">
                    <br /><span class="cMdGray title">TOTO智能卫浴专家</span></p>
                <ul class="fl">
                    <li>1.现场近百品牌任您挑选
                        <br /> 2.单笔订单满一千砸金蛋
                        <br /> 3.现场准时签到送豪礼
                        <br /> 4.千元订单返现金
                    </li>
                </ul>
            </div>
            <ul class="mt7">
                <li>
                    <input type="tel" class="input mobile cMdGray fB f14" placeholder="请输入您的手机号码">
                    <span class="error-tips">您输入的手机号不正确，请重新输入</span>
                </li>
                <li>
                    <input type="button" class="btn btn-block btn-orange" id="signup-pop" value="立即免费领取">
                </li>
            </ul>
        </div>
    </div>
	<?php if (!empty($grouponNext)) { ?>
    <div class="pop-layer pop-activity pop-group-over">
        <span class="close"><i class="iconfont f30 cWhite">&#xe629;</i></span>
        <div class="pop-content subscribe">
            <ul>
                <li class="text-center cOrange">本场团购会已经结束</li>
                <li class="f16 mt2 title text-center">您可以报名下一场团购会</li>
				<li class="mt2"><a href="<?= $grouponNext['visit_url']; ?>"><img src="<?= $grouponNext['top_thumb']; ?>" alt="<?= $grouponNext['groupon_name']; ?>"></a>
                </li>
				<li class="mt2"><?= $grouponNext['groupon_name']; ?></li>
				<li class="mt2 cFGray">地点：<?= $grouponNext['groupon_address']; ?></li>
				<li class="mt2 cFGray">时间：<?= $grouponNext['groupon_display_date']; ?></li>
				<li class="mt2">已有<span class="cOrange"><?= $grouponNext['signup_number']; ?></span>人报名</li>
                <li>
				<a class="btn btn-block btn-orange" href="<?= $grouponNext['visit_url']; ?>">马上去看看</a>
                </li>
            </ul>
        </div>
    </div>
    <?php } ?>
    <!--弹出层 end-->
     <!-- 活动报名 from表单提交 start -->
    <form action="/groupon/signuph5.html" method="post" name="signup" id="signup" data-ajax="false">
        <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
        <input type="hidden" value="" name="mobile" />
        <input type="hidden" value="" name="owner_name" />
        <input type="hidden" id="position" name="SignupForm[position]" value="" />
        <input type="hidden" id="product_id" name="SignupForm[product_id]" value="" />
        <input type="hidden" id="business_id" name="SignupForm[business_id]" value="" />
        <input type="hidden" id="voucher_id" name="SignupForm[voucher_id]" value="" />
        <input type="hidden" id="groupon_id" name="SignupForm[groupon_id]" value="<?= $info['groupon_id']; ?>" />
        <input id="template_code" name="SignupForm[template_code]" value="default" type="hidden" />
        <input id="sem_params" name="SignupForm[sem_params]" value="<?= $semParams; ?>" type="hidden" />
        <input id="message" name="SignupForm[message]" value="" type="hidden" />

    </form>
    <!-- 活动报名 from表单提交 end -->
