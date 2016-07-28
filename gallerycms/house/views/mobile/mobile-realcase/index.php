<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/list',
];
$this->params['jsFiles'] = [
	'jquery', 'common', 'm_index', 'lib/total',
];
//'实景作品频道';
?>
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/dpl.css">
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/case/new-case.css">
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/m/css/company/company.css">
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/css/mobile/slick.css">
<link rel="stylesheet" type="text/css" href=" http://static.tugou.com/m/js/components/tugou-footer/css/tugou-footer.css">
<script src="http://static.tugou.com/js/weixin/jquery-1.11.3.min.js"></script>
<script src="http://static.tugou.com/m/js/common.js"></script>
<style>.case .list01 .channel{ font-size: 0.5rem;margin-top: 1.5rem; }</style>
<script>$(function() {
        $(".footer").click(function() { //弹出申请框
            $(".win_all").show();
        });
        $(".close a").click(function() { //关闭申请框
            $(".win_all").hide();
        });
})
</script>

<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="http://m.tugou.com" class="return"></a>实景作品
</div>
<div class="center">
    <!-- 实景作品 -->
    <div class="case ">
        <?php foreach ($infos as $info) { ?>
        <div class="list">
		    <a href="<?= Url::to(['/house/mobile-realcase/show', 'id' => $info['id']]); ?>">
                <div class="list01">
				    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>">
                    <div class="listbg"></div>
					<p><?= $info['community_name']; ?></p>
					<p class="channel"><?= $info['house_type']; ?>&nbsp;&nbsp;<?= $info['style']; ?>&nbsp;&nbsp;<?= $info['decoration_type'] . '' . $info['decoration_price']; ?></p>
                </div>
                <div class="list02">
                    <a class="left">
                        <b>
                            <img src="http://pic.tugou.com/" alt=""></b>
                        <span></span>装修管家</a>
                    <i class="new-case01">已有
                        <span>367</span>人浏览</i></div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
<div id="list_top" class="list_top"></div>
<?php echo $this->render('../common/_nav', []); ?>
<script src="http://static.tugou.com/js/slick.min.js"></script>
<script src="http://static.tugou.com/m/js/company/new-case.js"></script>
<script src=" http://static.tugou.com/m/js/components/tugou-footer/js/tugou-footer.js "></script>
<!-- <script type="text/javascript" src="http://static.tugou.com/js/ga.js"></script> --></body>
<script type="text/javascript" src="http://static.tugou.com/m/js/m-region.js"></script>

