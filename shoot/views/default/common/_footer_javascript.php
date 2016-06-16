<?php
use yii\helpers\Url;

$jsFootersDefault = ['lib.min', 'custom_form', 'scripts', 'sdj'];
$jsFooters = isset($this->params['jsFooters']) ? $this->params['jsFooters'] : $jsFootersDefault;
foreach ($jsFooters as $jsFooter) {
	echo '<script src="'. Yii::getAlias('@asseturl') . '/shoot/default/js/' . $jsFooter . '.js"></script>';
}
?>
<script type="text/javascript">
var vm;
SHOOT.conf.BASE_URL = "<?= Yii::getAlias('@shooturl'); ?>";
SHOOT.conf.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
SHOOT.conf.ACCOUNT_URL = '<?= Yii::getAlias('@passporturl'); ?>';
SHOOT.conf.domains = [];
SHOOT.conf.jsonpDone = false;
SHOOT.conf.jsonpDone = true;

var url = window.PASSPORT_URL + '<?= Url::to(['/api/login-info']); ?>';
//callback for jsonp
var successCallback = function(data) {
	console.log(data);
    $('ul.log-area .hasLogout').removeClass('show').addClass('hidden');
    $('ul.log-area .hasLogin').removeClass('hidden').addClass('show');
    $('.n-messages').text("(" + data['message_number'] + ")");
    $('.user-menu').addClass('isLogin');
    $('.user-menu-toLogin').hide();
    if (data['message_number'] > 0 || data['cart_number'] > 0) {
        $('.js-open-user').addClass('point-red');
        if (data['message_number'] > 0) $('.user-menu-message a').addClass('point-red');
        if (data['cart_number'] > 0) $('.user-menu-cart a').addClass('point-red');
    };
    if (data['append'] != '') $('body').append(data['append']);
};
var errorCallback = function() {
    $('ul.log-area .hasLogin').removeClass('show').addClass('hidden');
    $('ul.log-area .hasLogout').removeClass('hidden').addClass('show');
};
$.ajax({
    url: url,
    type: 'GET',
    dataType: 'jsonp',
    error: function() {
        errorCallback();
    },
    success: function(data) {
		if (data.status == 200) {
            successCallback(data.data);
		} else {
			errorCallback();
		}
    }
});

$(function() {});
</script>
