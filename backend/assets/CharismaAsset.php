<?php

namespace backend\assets;

class CharismaAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $baseUrl = '@asseturl/';

    /**
     * @inheritdoc
     */
    public $css = [
        'backend/css/charisma-app.css',
        'bower_components/fullcalendar/dist/fullcalendar.css',
        'bower_components/fullcalendar/dist/fullcalendar.print.css',
        'bower_components/chosen/chosen.min.css',
        'bower_components/colorbox/example3/colorbox.css',
        'bower_components/responsive-tables/responsive-tables.css',
        'bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css',
        'bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
        'backend/css/jquery.noty.css',
        'backend/css/noty_theme_default.css',
        'backend/css/elfinder.min.css',
        'backend/css/elfinder.theme.css',
        'backend/css/jquery.iphone.toggle.css',
        'backend/css/uploadify.css',
        'backend/css/animate.min.css',
        'backend/css/jquery.treeTable.css',
        'backend/css/jquery.treeview.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'bower_components/bootstrap/dist/js/bootstrap.min.js',
        'backend/js/jquery.cookie.js',
        'bower_components/moment/min/moment-with-locales.min.js',
        'bower_components/fullcalendar/dist/fullcalendar.min.js',
        'backend/js/jquery.dataTables.min.js',
        'bower_components/chosen/chosen.jquery.min.js',
        'bower_components/colorbox/jquery.colorbox-min.js',
        'backend/js/jquery.noty.js',
        'bower_components/responsive-tables/responsive-tables.js',
        'bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js',
        'bower_components/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        'backend/js/jquery.raty.min.js',
        'backend/js/jquery.iphone.toggle.js',
        'backend/js/jquery.autogrow-textarea.js',
        'backend/js/jquery.uploadify-3.1.min.js',
        'backend/js/jquery.history.js',
        'backend/js/charisma.js',
        'backend/js/jquery.treetable.js',
        'backend/js/jquery.treeview.js',
        'backend/js/common.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}
