<?php
use yii\helpers\Url;
?>
<div class="pd-m-nav-box clearfix">
    <ul class="pd-m-nav">
        <li class="pd-nav-item pd-btn <?php if ($currentNav == 'showindex') { echo 'active'; } ?>" target="pd-index">
		<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">首页</a>
            <span class="pd-caret-down"></span>
			<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="pd-nav-link"></a>
        </li>
        <li class="pd-nav-item pd-btn <?php if ($currentNav == 'realcase') { echo 'active'; } ?>" target="pd-realcase">
		<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修实景</a>
            <span class="pd-caret-down"></span>
			<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="pd-nav-link"></a>
        </li>
        <li class="pd-nav-item pd-btn <?php if ($currentNav == 'working') { echo 'active'; } ?>" target="pd-buildfield">
		<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjgd', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">工地实拍</a>
            <span class="pd-caret-down"></span>
			<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjgd', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="pd-nav-link"></a>
        </li>
        <!-- <li class="pd-nav-item pd-btn" target="pd-designer">
        <a href="/design/195/">设计师</a>
        <span class="pd-caret-down"></span>
        <a href="/design/195/" class="pd-nav-link"></a></li> -->
        <li class="pd-nav-item pd-btn <?php if ($currentNav == 'comment') { echo 'active'; } ?>" target="pd-comment">
		<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjdp', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">业主点评</a>
            <span class="pd-caret-down"></span>
			<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjdp', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="pd-nav-link"></a>
        </li>
        <li class="pd-nav-item pd-btn <?php if ($currentNav == 'info') { echo 'active'; } ?>" target="pd-selfintro">
			<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjjj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">品牌简介</a>
            <span class="pd-caret-down"></span>
			<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjjj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="pd-nav-link"></a>
        </li>
    </ul>
</div>
