<?php
use yii\helpers\Url;
?>
<div class="scene line-bg">
    <h3>实景作品 所见即所得</h3>
    <p>真实作品，实景案例</p>
    <div class="items padTop15">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 3) { continue; }?>
		<a href="<?= Url::to(['/house/realcase/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
		    <img src="<?= $info['thumb']; ?>" width="277px" height="279px">
            <div class="recommend clearfix">
                <div class="word fn-left">
				    <p><?= $info['community_name']; ?></p>
					<p><?= $info['house_type']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?= $info['style']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</p>
                </div>
            </div>
        </a>
        <?php $i++;} ?>
    </div>
</div>
