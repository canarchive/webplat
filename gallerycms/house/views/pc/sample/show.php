<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-casedetail',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-casedetail',
];
$this->params['currentNav'] = 'sample';
$this->params['friendLink'] = true;

$this->params['showPage'] = true;
?>
<!-- 兔狗主页导航栏 -->
<?php echo $this->render('../common/_nav_mini', []); // 内容页顶部 ?>
<div class="pd-header">
    <!-- 兔狗主页导航栏 -->
    <!-- <div class="pd-for-nav"></div> -->
    <!-- 面包屑导航主页样式 -->
    <div class="crumbs">
	    <a href="/">团家汇</a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/sample/index']); ?>">装修案例</a><span class="sep">&gt;</span>
		<a ><span class="btn-crumbs"><?= $info['name']; ?><i class="i-del"></i></span></a>
    </div>
</div>
<div class="pd-main">
    <div class="pd-case-content">
	    <p class="pd-c-title"><?= $info['name']; ?></p>
        <?php foreach ($info['picture'] as $pictureKey => $pictureInfo) { ?>
        <figure class="pd-c-item">
		    <img src="<?= $pictureInfo['url']; ?>" alt="<?= $pictureInfo['description']; ?>">
            <figcaption>
			    <span class="pd-page-number"><?= $pictureKey + 1; ?></span>
				<p class="pd-img-desc"><?= $pictureInfo['description']; ?></p>
            </figcaption>
        </figure>
        <?php } ?>
        <!-- <div class="pd-c-page">
        <p class="pd-btn"><span class="pd-icon-prev"></span>上一篇:<a class="pd-prev" href=""></a></p>
        <p class="pd-btn"><span class="pd-icon-next"></span>下一篇:<a class="pd-next" href=""></a></p></div>-->
    </div>
    <div class="pd-right-bar">
        <div class="pd-applyfix">
            <div class="aside-apply">
                <h3>个性定制我的家</h3>
                <p class="title sm pd-apply-title">免费获取3套设计方案，省40%装修款</p>
                <div class="apply_form">
                    <input name="apply_type" type="hidden" value="12" />
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
					<input name="apply" type="button" value="立即获取" />i
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">.beian{ width: 15px; height: 15px; display: inline-block; background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; background-size: 100%; position: relative; top: 2px; }</style>
