<?php 
use yii\helpers\Url;
?>
<div class="top">
    <span class="face">
	    <a><img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>"></a>
    </span>
    <ul>
        <li>
		    <span class="num"><?= intval($info['num_owner']); ?></span>
			<p class="msg">已服务业主</p>
        </li>
        <li class="break-line"></li>
        <li>
		    <span class="num"><?= $info['praise']; ?></span>
			<p class="msg">口碑值</p>
        </li>
        <li class="break-line"></li>
        <li>
		    <span class="num J_score"><?= $info['score']; ?></span>
			<p class="msg">业主评分</p>
        </li>
    </ul>
</div>
<ul class="item-list clearfix">
    <li <?php if ($action == 'realcase') { echo 'class="add"'; } ?>>
		<a href="<?= Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修实景</a>
    </li>
    <li <?php if ($action == 'working') { echo 'class="add"'; } ?>>
		<a href="<?= Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id'], 'action' => 'sjgd', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">工地实拍</a>
    </li>
    <li <?php if ($action == 'comment') { echo 'class="add"'; } ?>>
		<a href="<?= Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id'], 'action' => 'sjdp', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">业主点评</a>
    </li>
    <li <?php if ($action == 'info') { echo 'class="add"'; } ?>>
		<a href="<?= Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id'], 'action' => 'sjjj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">品牌简介</a>
    </li>
</ul>
