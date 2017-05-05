<?php
use yii\helpers\Url;
?>
<div class="scene line-bg">
    <h3>靠谱商家 装修无忧</h3>
    <!--<p>真实作品，实景案例</p>-->
    <div class="items padTop15">
        <?php $i = 0; foreach ($infos as $info) { if ($i > 7) { continue; }?>
    	<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
		    <img src="<?= $info['logo']; ?>" width="277px" height="279px">
            <div class="recommend clearfix">
                <div class="word fn-left">
				    <p><?= $info['name']; ?></p>
                </div>
            </div>
        </a>
        <?php $i++;} ?>
    </div>
</div>
