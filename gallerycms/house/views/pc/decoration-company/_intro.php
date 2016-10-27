<?php
use yii\helpers\Url;
?>
<div class="pd-header">
    <?php echo $this->render('../common/_nav_mini', []); // 内容页顶部 ?>
    <!-- 面包屑导航主页样式 -->
    <div class="crumbs">
        <a href="/">首页</a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修公司</a><span class="sep">&gt;</span>
        <a href="javascript:void(0);">
		    <span class="btn-crumbs"><?= $info['name']; ?><i class="i-del"></i></span>
        </a>
    </div>
    <section class="pd-h-header">
        <div class="pd-hh-logo">
			<img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" class="pd-logo">
            <p class="pd-btn-design pd-btn free-order-pop">免费设计与报价</p>
            <p class="pd-hh-usercount">已服务&nbsp;&nbsp;
	            <a><?= $info['num_owner']; ?></a>&nbsp;&nbsp;位业主</p>
        </div>
        <div class="pd-hh-desc">
            <div class="pd-name"><h1><?= $info['name']; ?></h1></div>
            <div class="pd-current">
                <p>
                    <span class="pd-icon pd-icon-house">&nbsp;</span>实景作品:
					<a class="pd-current-cnt"><?= $info['num_realcase']; ?></a>
                </p>
                <p>
                    <span class="pd-icon pd-icon-carry"></span>直播工地:
					<a class="pd-current-cnt"><?= $info['num_working']; ?></a>
                </p>
				<p>业主评分:<a class="pd-current-cnt J_score"><?= $info['score']; ?></a></p>
				<p>口碑值:<a class="pd-current-cnt"><?= $info['praise']; ?></a></p>
            </div>
            <div class="pd-introduction J_word">
			    <p><?php $briefStr = empty($info['brief']) ? mb_substr($info['description'], 0, 200) : $info['brief']; echo $briefStr; ?></p>
            </div>
        </div>
        <div class="pd-hh-cert">
            <p class="pd-hc-item"><span class="pd-icon pd-icon-bao"></span>保障金先行赔付</p>
            <p class="pd-hc-item"><span class="pd-icon pd-icon-zheng"></span>施工资质权威认证</p>
            <p class="pd-hc-item"><span class="pd-icon pd-icon-huan"></span>环保用材，绿色施工</p>
            <p class="pd-contact"><span class="pd-icon pd-icon-phone"></span>预约热线</p>
			<a class="pd-contact"><?= Yii::$app->params['siteHotline']; ?></a>
        </div>
    </section>
</div>
