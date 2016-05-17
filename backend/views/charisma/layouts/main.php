<?php

use yii\bootstrap\NavBar;
use backend\assets\CharismaAsset;
use backend\assets\Ltie9Asset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Json;

CharismaAsset::register($this);
Ltie9Asset::register($this);

$controller = $this->context;
$menuInfos = $controller->menuInfos;
$menus = isset($menuInfos['menus']) ? $menuInfos['menus'] : [];
$menusJson = Json::encode($menus);
//$this->title = $menuInfos['menuTitle'];
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">
    <title><?= Html::encode($this->title) ?></title>

	<link id="bs-css" href="<?= Yii::getAlias('@asseturl/backend'); ?>/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <script src="<?= Yii::getAlias('@asseturl'); ?>/bower_components/jquery/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl/backend'); ?>img/favicon.ico">

    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php echo $this->render('topbar', ['menus' => $menus]); ?>
<div class="ch-container">
    <div class="row">
        <?php echo $this->render('left-menu', ['menus' => $menus]); ?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
			<?php if ($controller->showSubnav) { ?>
            <div>
                <ul class="breadcrumb">
            <?php
            $subnavString = '';
            foreach ($menuInfos['appMenus'] as $appMenu) {
                if ($appMenu['display'] > 3) continue;
                $styleStr = ($menuInfos['currentMenu']['method'] == $appMenu['method']) ? 'style="color:#009900;"' : '';
                $urlStr = ($menuInfos['currentMenu']['method'] == $appMenu['method']) ? 'javascript:void(0);' : $appMenu['url'];
                $subnavString .= "<li><a href='{$urlStr}' {$styleStr}>{$appMenu['name']}</a></li>";
            }
            echo $subnavString;
            ?>
                </ul>
            </div>
            <?php } ?>
            <?= $content ?>
            <?php //echo $this->render('content'); ?>
            <!-- content ends -->
        </div><!--/#content.col-md-0-->
    </div><!--/fluid-row-->

    <hr>
    <?php echo $this->render('modal'); ?>
    <?php //echo $this->render('footer'); ?>

</div><!--/.fluid-container-->

<?php $this->endBody() ?>

<script language="javascript">
$(document).ready(function(){
  var current_theme = $.cookie('current_theme')==null ? 'cerulean' :$.cookie('current_theme');
  switch_theme(current_theme);

  $('#themes a[data-value="'+current_theme+'"]').find('i').addClass('icon-ok');

  $('#themes a').click(function(e){
    e.preventDefault();
    current_theme=$(this).attr('data-value');
    $.cookie('current_theme',current_theme,{expires:365});
    switch_theme(current_theme);
    $('#themes i').removeClass('icon-ok');
    $(this).find('i').addClass('icon-ok');
  });

  function switch_theme(theme_name)
  {
	$('#bs-css').attr('href','<?= Yii::getAlias('@asseturl'); ?>/backend/css/bootstrap-'+theme_name+'.min.css');
  }
});

var menuJsons = <?= $menusJson; ?>;

function setLeftNav(parentCode)
{
  $("#baseMenu>li").attr("class", "");
  var currentBaseMenu = "baseMenu_" + parentCode;
  $("#" + currentBaseMenu).attr("class", "active");

  var subMenuStr = '';
  var isActive = '';
  var haveActive = false;
  var currentController = '';
  var currentMethod = '';
  $.each(menuJsons, function(i,n) {
    if (n.parent_code == parentCode) {
      subMenuStr += '<li class="nav-header hidden-tablet">' + n.name + '</li>';
      $.each(menuJsons, function(i1, n1) {
        if (n1.parent_code == n.code && n1.display == 2) {
		  if (n1.id == '<?= $menuInfos['currentMenu']['id']; ?>') {
            isActive = 'class="active"';
			haveActive = true;
          }
		  subMenuStr += '<li class="abc" ' + isActive + ' id="left_menu_' + n1.code + '"><a class="ajax-link" href="<?= Yii::getAlias('@backendurl'); ?>' + n1.url + '"><i class="icon-align-justify"></i><span class="hidden-tablet">' + n1.name + '</span></a></li>';
          isActive = '';
        }
      });
    }
  });

  $("#leftMenu").html(subMenuStr);
  $("#leftMenu").show();
  $("#leftMenuContent").hide();

  if (!haveActive) {
	  var appMenusJson = <?= Json::encode($menuInfos['appMenus']);?>;
      $.each(appMenusJson, function(i2, n2) {
		  if (!haveActive && n2.display == 2) {
			  $("#left_menu_" + n2.code).addClass("active");
			  haveActive = true;
		  }
	  });
  }
}
setLeftNav('<?php $baseMenu = isset($menuInfos['parentMenu']['code']) ? $menuInfos['parentMenu']['code'] : 'backend_panel'; echo $baseMenu; ?>');
var showCatType = typeof(showCat);
if (showCatType == 'function') {
    showCat();
}

function updateElemByAjax(url, info_id, field, value)
{
	var data = {
		'info_id': info_id,
		'field': field,
		'value': value
	};
    $.ajax({
	    type: "POST",
	    url: url,
		data: data,
        success: function(data,status) {
            alert("Data: " + data + "\nStatus: " + status);
		}
	});
}

function operationForSelected(url)
{
	var elems = $("input[name='selection[]']");
	var selections = '';
    elems.each(function(index,item) {
		if ($(this).prop('checked')) {
			selections += ',' + $(this).val();
		}
    });
	alert(selections);

    $.ajax({
	    type: "POST",
	    url: url,
		data: {selections: selections},
        success: function(data,status) {
            alert("Data: " + data + "\nStatus: " + status);
		}
	});
}
</script>
</body>
</html>
<?php $this->endPage() ?>
