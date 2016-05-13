<?php
use yii\helpers\Url;
$siteInfos = $this->context->siteInfos;
$urlPre = Yii::getAlias('@shooturl');
?>
<?php $this->beginContent('@shoot/views/default/layouts/main.php'); ?>

<main class='main-content slab-light'>
    <div class="supports">
        <div class='wrapper'>
            <ul class='breadcrumb'>
                <li>
				    <a href='<?= Yii::getAlias('@shooturl'); ?>'>
                        首页<span>/</span>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0);'>
                        <?= $this->params['info']['sort']; ?><span>/</span>
                    </a>
                </li>
				<li><?= $this->params['info']['name']; ?></li>
            </ul>
        </div>
        <div class="g wrapper supports-help">
            <div class="gi one-whole lap-one-quarter desk-one-fifth">
                <ul class="g menulist">
                    <?php foreach ($siteInfos as $cKey => $infos) { ?>
                    <li class="gi one-whole">
                        <a class="menu">
							<span><?= $infos['name']; ?></span>
                            <span class="js-toggle-submenu toggle"></span>
                        </a>
                        <ul class="sub-menu ">
                            <?php foreach ($infos['infos'] as $aKey => $subInfo) { ?>
                            <li>
								<a href='<?= $urlPre . Url::to(['/info/help/index', 'code' => $subInfo['code']]); ?>' class='<?php if ($this->params['info']['code'] == $subInfo['code']) { echo 'clickable-light'; } ?>'><?= $subInfo['name']; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="gi one-whole lap-three-quarters desk-four-fifths supports-help-content slab-white">
                <div class="word-break article-response">
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->endContent(); ?>
