<?php
use yii\helpers\Url;
?>
<div class="banner padTop20 clearfix">
    <!--立即预约表单-->
    <div class="appointment-form fn-left">
        <div class="title-tab clearfix">
            <a class="on" href="javascript:;">免费验房</a>
            <a href="javascript:;">免费设计报价</a>
			<a href="javascript:;">免费监理</a>
        </div>
        <div class="body">
            <div class="title-tip padBtm20">
                <p class="show">验房专家上门验房，全面检测房屋质量</p>
                <p>免费获取3份设计 选取最满意设计稿</p>
                <p>权威监理上门严格验收，确保工程质量</p>
            </div>
            <div class="apply-form">
                <input name="apply_type" type="hidden" value="1" />
                <input name="name" type="text" placeholder="您的姓名" class="inputEl" />
                <input name="phone" type="text" placeholder="手机号码" class="inputEl" />
                <div class="select-group clearfix js-region-select-group">
                    <select class="js-province" name="province" id="province">
						<option value="">省/市</option>
                    </select>
                    <select class="js-city" name="city" id="city">
						<option value="">市/地区</option>
                    </select>
                </div>
				<input name="applyBtn" type="button" value="我要预约" />
            </div>
            <p class="apply-tip">
                <span>注：同一小区同批验房达到5户，可安排免费上门验房服务。</span>
                <span class="hide">注：每户业主可同时获取3份设计比较，挑选最适合方案后个性化修改。</span>
				<span class="hide">注：需在装修开工前预约资深监理师傅，提前安排验房时间。</span>
            </p>
        </div>
    </div>
    <!--轮播-->
    <div class="carousel fn-left" id="tbanner">
        <!--轮播图片-->
        <div class="center-bar">
            <ul class="bxslider">
                <li>
				    <a href="<?= Url::to(['/house/feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/banner1.jpg" alt="一分钟找到靠谱装修公司">
                    </a>
                </li>
                <li>
				    <a href="<?= Url::to(['/house/feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/banner_kpzx2.jpg" alt="靠谱装修季">
                    </a>
                </li>
                <li>
				    <a href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/banner_al.jpg" alt="装修经验">
                    </a>
                </li>
            </ul>
            <span class="bx-prev"></span>
            <span class="bx-next"></span>
        </div>
    </div>
    <!--免费上门验房、免费设计、免费报价-->
    <div class="advert">
	    <a class="item" href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
            <p class="padTop25">免费上门验房</p>
            <p class="padTop10">资深验房专家上门验房<br />专业仪器检测房屋质量</p>
        </a>
		<a class="item " href="<?= Url::to(['/house/feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
            <p class="padTop25">免费3套设计方案</p>
			<p class="padTop10">3套设计方案比较<br />合理规范空间</p>
        </a>
		<a class="item last" href="<?= Url::to(['/house/feature/index', 'view' => 'baojia', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">
            <p class="padTop25">在线报价器</p>
			<p class="padTop10">一分钟解决预算难题<br />装修省40%</p>
        </a>
    </div>
</div>
