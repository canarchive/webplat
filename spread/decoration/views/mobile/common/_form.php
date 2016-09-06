<form action="" method="post" class="form" onsubmit="return flase" id="order">
    <div class="input">
        <input type="text" name="name" class="name" id="name" placeholder="您的姓名" value="" />
    </div>
    <div class="input">
        <input type="tel" name="phone" class="phone" id="phone" placeholder="手机号码" value="" />
    </div>
	<input type="hidden" value="<?= $type; ?>" id="type" name="type">
    <div class="input-select js-region-select-group clearfix">
        <select name="province" id="province" class="city_select province js-province">
            <option value="0">省/市</option>
        </select>
        <select name="city" id="city" class="city_select city js-city">
            <option value="0">市/地区</option>
        </select>
    </div>
	<input type="button" value="<?= $title; ?>" id="entirety" class="submit-btn" />
</form>
<div class="alert" style="display:none">请输入姓名</div>
