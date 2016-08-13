<?php
use yii\helpers\Html;

foreach ($urlInfos as $code => $info) {
	$info['pc-url'] = 'http://' . str_replace('{{DOMAIN}}', $domain, $info['pc-url']);
	$info['mobile-url'] = Yii::getAlias('@m.gallerycmsurl') . $info['mobile-url'];
    $info['title'] = isset($tdkInfos[$code]) ? $tdkInfos[$code]['title'] : '';
    $info['keyword'] = isset($tdkInfos[$code]) ? $tdkInfos[$code]['keyword'] : '';
    $info['description'] = isset($tdkInfos[$code]) ? $tdkInfos[$code]['description'] : '';
	$urlInfos[$code] = $info;
}
//print_r($urlInfos) ;
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php $i = 0; foreach ($urlInfos as $code => $info) { ?>
                    <?php if ($i % 4 == 0) { echo '<tr>'; }?>
						<td>
                            <a href="<?= $info['pc-url']; ?>" target="_blank"><?= $info['name']; ?></a>--
                            <a href="<?= $info['mobile-url']; ?>" target="_blank">(移动端)</a>--
							<a href="#tdk-<?= $code; ?>">(tdk)</a>
                        </td>
                    <?php if ($i % 4 == 3) { echo '</tr>'; }?>
                    <?php $i++; } ?>
                    <?php if ($i % 4 != 3) { echo '</tr>'; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <thead>
                    <tr>
					    <th>通配符名称</th>
					    <th>描述</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
					    <td>{{SITENAME}}</td>
						<td>网站名称-<?= Yii::$app->params['siteName']; ?></td>
                    </tr>
                    <tr>
					    <td>{{CITYNAME}}</td>
						<td>当前分站名称，如"北京","武汉"等</td>
                    </tr>
                    <tr>
					    <td>{{INFONAME}}</td>
						<td>当前信息的名称，如"混搭三居清新森林系装修案例"等</td>
                    </tr>
                    <tr>
					    <td>{{TAGSTR}}</td>
						<td>信息列表中的标签信息，如”地中海风格三居“等</td>
                    </tr>
                    <tr>
					    <td>{{PAGESTR}}</td>
						<td>信息列表中的页数信息，如”第二页“等</td>
                    </tr>
                    <!--<tr>
					    <td>{{BASETITLE}}</td>
						<td>基本的页面标题:<?= Yii::$app->params['seoTitle']; ?></td>
                    </tr>
                    <tr>
					    <td>{{BASEKEYWORD}}</td>
						<td>基本的页面标题:<?= Yii::$app->params['seoKeyword']; ?></td>
                    </tr>
                    <tr>
					    <td>{{BASEDESCRIPTION}}</td>
						<td>基本的页面标题:<?= Yii::$app->params['seoDescription']; ?></td>
                    </tr>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <?php foreach ($urlInfos as $code => $info) { ?>
				<table class="table table-striped table-bordered responsive" id="tdk-<?= $code; ?>">
                    <tbody>
                    <tr>
					    <td>url名称</td>
					    <td><?= $info['name']; ?></td>
                    </tr>
                    <tr>
					    <td>PC-url</td>
                        <td><a href="<?= $info['pc-url']; ?>" target="_blank"><?= $info['pc-url']; ?></a></td>
                    </tr>
                    <tr>
					    <td>移动端-url</td>
                        <td><a href="<?= $info['mobile-url']; ?>" target="_blank"><?= $info['mobile-url']; ?></a></td>
                    </tr>
                    <?php if (!empty($info['title'])) { ?>
                    <tr>
					    <td>页面标题</td>
					    <td><?= $info['title']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php if (!empty($info['keyword'])) { ?>
                    <tr>
					    <td>关键字</td>
					    <td><?= $info['keyword']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php if (!empty($info['description'])) { ?>
                    <tr>
					    <td>描述</td>
					    <td><?= $info['description']; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
