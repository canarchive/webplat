<?php
use yii\helpers\Url;
?>
<!--视觉开始-->
<div class=webwidth>
    <div class=vstop>
        <div class="tha-icon">
            <b></b>
        </div>
        <div class="colist">
            <?php foreach ($this->params['levelInfos'][1] as $info) { if ($info['parent_id'] == 1) { ?>
			<a href="<?= Url::to(['/site/list', 'code' => $info['catdir']]); ?>" target="_blank">
                <?= $info['name']; ?>
            </a>
            <i>|</i>
            <?php } } ?>
        </div>
    </div>
    <div class="layab">
        <?php $infos[] = [
            'id' => 3, 'name' => '李小璐堂妹李小宅生活照曝光', 'thumb' => 'http://www.wed114.cn/jiehun/uploads/allimg/160413/41-1604131915250-L.jpg'
        ];
        ?>
        <?php for ($i = 0; $i < 8; $i++) { foreach ($infos as $info) { ?>
        <dl class="dlbox3">
            <dd>
                <div class="sgimg3">
				    <a href="<?= Url::to(['/site/show', 'id' => $info['id']]); ?>" target=_blank>
					    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>" />
                    </a>
                    <p class="iatit3">
                        <em class="left-arr"></em>
						<a href="<?= Url::to(['/site/show', 'id' => $info['id']]); ?>" class="txt" target=_blank><?= $info['name']; ?></a>
                        <em class="right-arr"></em>
                        <b class="bg"></b>
                    </p>
                </div>
            </dd>
        </dl>
        <?php } } ?>
    </div>
</div>
<!--视觉结束-->
