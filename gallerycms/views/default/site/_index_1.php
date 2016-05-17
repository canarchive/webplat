<?php
use yii\helpers\Url;
?>
<!--第a部分 婚嫁开始-->
<div class=webwidth>
    <div class=qinggantop>
        <div class="tha-icon">
            <b></b>
        </div>
        <div class="colist">
            <?php foreach ($this->params['categoryInfos'] as $info) { if ($info['parent_id'] == 1) { ?>
			<a href="<?= Url::to(['/site/list', 'code' => $info['catdir']]); ?>" target="_blank">
                <?= $info['name']; ?>
            </a>
            <i>|</i>
            <?php } } ?>
        </div>
    </div>
    <div class="layab">
        <?php $infos[] = [
            'id' => 1, 'name' => '春季新娘手捧花制作方法', 'thumb' => 'http://www.wed114.cn/jiehun/uploads/allimg/160413/52-160413134U00-L.jpg'
        ];
        ?>
        <?php for ($i = 0; $i < 8; $i++) { foreach ($infos as $info) { ?>
        <dl class="dlbox">
            <dd>
                <div class="sgimg">
				    <a href="<?= Url::to(['/site/show', 'id' => $info['id']]); ?>" target=_blank>
					    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>" />
                    </a>
                    <p class="iatit">
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
<!--第a部分 婚嫁结束-->
