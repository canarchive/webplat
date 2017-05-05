<?php
use yii\helpers\Url;
?>
<div class="links-top">
    <ul>
        <li class=" links-add ">热门城市</li>
        <!--<li class="">栏目链接</li>
        <li class="">城市链接</li>
        <li class="">热门资讯</li>
		<li class="">热门图库</li>-->
    </ul>
	<!--<a href="/link.html" target="_blank">友链合作 ></a>-->
</div>
<div class="links-content">
    <div class="links-one" style="display: block;">
        <?php foreach (Yii::$app->params['companyInfos'] as $info) { ?>
		<a href="<?= Url::to(['/house/site/home', 'city_code' => $info['code_short']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>房屋装修</a>
        <?php } ?>
    </div>
</div>
