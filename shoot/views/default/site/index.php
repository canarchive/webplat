<?php
$cssFiles = ['styles'];
$jsFiles = [];
?>
<?php echo $this->render('@shoot/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<?php echo $this->render('@shoot/views/default/common/_header'); ?>
<main class="main-content">
    <?php echo $this->render('_index_1'); ?>
    <?php echo $this->render('_index_2'); ?>
    <?php //echo $this->render('_index_3'); ?>
    <?php echo $this->render('_index_5'); ?>
    <?php echo $this->render('_index_4'); ?>
</main>
<?php echo $this->render('@shoot/views/default/common/_footer'); ?>
<?php echo $this->render('@shoot/views/default/common/_nav_right'); ?>

<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/lib.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/custom_form.js?v=20150914144728"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/scripts.js?v=201506151120596"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/sdj.js?v=20160121142624"></script>
<script type="text/javascript">
    var vm;
    OPPO.conf.BASE_URL = "http://www.oppo.com/cn";
    OPPO.conf.STORE_URL = 'http://www.opposhop.cn';
    OPPO.conf.ACCOUNT_URL = 'http://my.oppo.com';
    OPPO.conf.domains = [];
    OPPO.conf.jsonpDone = false;
    OPPO.conf.jsonpDone = true;

    var url = OPPO.conf.STORE_URL + '/auth/check';
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
        var controllerNameWithAction = "HomeController@index".split('@');
        var controllerName = controllerNameWithAction[0];
        var actionName = controllerNameWithAction[1];
        var controller = OPPO.controller[controllerName];
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
</script>

<?php echo $this->render('@shoot/views/default/common/_footer_base'); ?>
