<!--首页底部浮动报名条-->
<!--首页底部浮动报名条-->
<div class="appoinment-bottom show" style="left: -150%;">
    <div class="page-container">
        <a href="javascript:void(0);">
			<img class="logo" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/appoinment-bottom-logo.png">
        </a>
        <div class="content-box">
            <div class="apply-form">
                <p class="tip">已有
					<em class="ifocus"><?php echo '2382'; ?> </em>位业主 成功领取装修大礼包</p>
                <input name="apply_type" type="hidden" value="4">
                <div class="part_left">
                    <input name="name" type="text" placeholder="您的姓名">
                    <input name="phone" type="text" placeholder="手机号码"></div>
                <div class="part_right">
                    <div class="squatre">
                        <input name="areaInputted" type="text" placeholder="建筑面积">
                        <span>㎡</span></div>
                    <div class="select-group clearfix js-region-select-group">
                        <select class="js-province" name="province" id="province">
                            <option value="">省/市</option></select>
                        <select class="js-city" name="city" id="city">
                            <option value="">市/地区</option></select>
                    </div>
                </div>
				<input name="applyBtn" type="button" value="">
            </div>
            <div class="qrcode-box">
                <p class="faultlayout">&nbsp;</p>
				<img class="ewm" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/appoinment-bottom-ewm.jpg">
				<p class="desc">详情咨询装修管家</p>
            </div>
        </div>
        <div class="close_button"><a href="javascript:;">×</a></div>
    </div>
</div>
<!--缩略版-->
<div class="appoinment-bottom-collapse">
    <a href="javascript:;">
		<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/appoinment-bottom-collapse.png">
    </a>
</div>
