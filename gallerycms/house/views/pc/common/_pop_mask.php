<div class="pop_mask hide">
    <div class="pop_box">
        <a class="pop_close">&times;</a>
        <div class="title_box">
            <p class="title">免费获取3套方案</p>
            <p class="subtitle">优质装修公司免费出方案，预算省40%</p></div>
        <div class="apply_form">
            <input name="apply_type" type="hidden" value="6" />
            <input name="apply_provider" type="hidden" value="" />
            <input name="name" type="text" placeholder="您的姓名" />
            <input name="phone" type="text" placeholder="手机号码" />
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
					<option value="">省/市</option>
                </select>
                <select class="js-city" name="city" id="city">
					<option value="">市/地区</option>
                </select>
            </div>
            <input name="apply" type="button" value="免费预约" />
			<p>全国服务热线<?= Yii::$app->params['siteHotline']; ?><br />
				为了方便我们联系，请留下您的联系方式，我们将严格保密
			</p>
        </div>
    </div>
</div>
