<?php
use yii\helpers\Url;
?>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/lib.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/custom_form.js?v=20150914144728"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/scripts.js?v=201506151120596"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/sdj.js?v=20160121142624"></script>
<script type="text/javascript">
var vm;
SHOOT.conf.BASE_URL = "<?= Yii::getAlias('@shooturl'); ?>";
SHOOT.conf.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
SHOOT.conf.ACCOUNT_URL = '<?= Yii::getAlias('@passporturl'); ?>';
SHOOT.conf.domains = [];
SHOOT.conf.jsonpDone = false;
SHOOT.conf.jsonpDone = true;

var url = SHOOT.conf.ACCOUNT_URL + '/auth/check';
//callback for jsonp
var successCallback = function(data) {
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
        successCallback(data);
    }
});

(function() {
    var controllerNameWithAction = "SupportsController@help".split('@');
    var controllerName = controllerNameWithAction[0];
    var actionName = controllerNameWithAction[1];
    var controller = SHOOT.controller[controllerName];
    if (controller) {
        action = controller()[actionName];
        if (action) {
            $(function() {
                vm = action();
            });
        }
    }
    // else console.log(controllerNameWithAction);
})();

$(function() {});
</script>
