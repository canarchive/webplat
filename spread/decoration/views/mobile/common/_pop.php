<?php echo $this->render('_footer_button', []); ?>
<!--弹出层-->
<div class="win_all">
    <div class="window box">
        <h2>申请免费设计</h2>
        <p>免费获取3份设计&nbsp;选取满意设计稿</p>
        <form action="" method="post" class="form" onsubmit="return flase" id="order">
            <div class="win_input">
                <input type="text" name="" id="name" value="" placeholder="您的姓名" /></div>
            <div class="win_input">
                <input type="tel" name="" id="phone" value="" placeholder="手机号码" /></div>
            <div class="win_input js-region-select-group clearfix">
                <select name="province" id="province" class="city_select province js-province">
                    <option value="0">省/市</option></select>
                <select name="city" id="city" class="city_select city js-city">
                    <option value="0">市/地区</option></select>
            </div>
            <input type="hidden" id="type" value="7">
            <input type="hidden" id="remark" value="移动套图列表">
            <input type="button" class="win_sub" id="apply_button" value="立即申请" />
            <span class="note">
                <em>注：</em>每户业主可同时获取3份设计比较，挑选合适方案后个性化修改。</span></form>
        <div class="close">
            <a href="javascript:;"></a>
        </div>
    </div>
</div>
<div class="alert" style="display:none">请输入姓名</div>
