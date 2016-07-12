<div class="pd-selfintro active" id="content-baseinfo">
    <div class="pd-self-basic">
        <p class="pd-title">品牌简介</p>
        <div class="pd-self-header">
		    <img alt="pd-welcome" src="<?= $info['picture']; ?>" class="pd-image">
			<div class="pd-desc"><?= $info['description']; ?></div>
        </div>
    </div>
    <div class="pd-self-steps">
        <p class="pd-title">全程品质保障</p>
        <div>
            <table class="pd-step-tbl">
                <tbody>
                    <tr>
                        <td class="pd-tbl-header">选材</td>
                        <td class="pd-tbl-desc">工厂直供，品质保证，假冒伪劣，假一罚十。</td></tr>
                    <tr>
                        <td class="pd-tbl-header">量房</td>
                        <td class="pd-tbl-desc">设计师免费上门量房。</td></tr>
                    <tr>
                        <td class="pd-tbl-header">设计</td>
                        <td class="pd-tbl-desc">（1）量房后，3天内免费出设计方案。
                            <br>（2）平面方案确定后，免费出具初期预算即概算。
                            <br>（3）设计合同签订后，施工合同签订前，深化设计，提供不少于8张基本图纸。
                            <br>（4）深化预算，水电预算决算不超5%，合同明确各项工艺单价，除水电其余部分决算不超10%。
                            <br></td></tr>
                    <tr>
                        <td class="pd-tbl-header">施工</td>
                        <td class="pd-tbl-desc">（1）使用政府示范合同，所有整改或变更项目均签署《项目变更单》及《施工进度调整单》开工后提供完整《施工节点及材料进场表》。
                            <br>（2）优秀项目经理、精工班组团队一线施工。
                            <br>（3）微信实时直播工地，装修进度全程掌控。
                            <br></td></tr>
                    <tr>
                        <td class="pd-tbl-header">验收</td>
                        <td class="pd-tbl-desc">（1）装修管家全程一对一专业指导，审核报价，指导选材，跟踪施工，安排监理，确保工期。
                            <br>（2）网站提供免费第三方监理，节点验收，提供一式三份监理验收报告。
                            <br></td></tr>
                    <tr>
                        <td class="pd-tbl-header">售后</td>
                        <td class="pd-tbl-desc">（1）装修公司网站资质审核，质保金先行赔付。
                            <br>（2）项目基础工程质保3年，隐蔽工程质保6年，终身维护。
                            <br></td></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="pd-self-cert">
        <p class="pd-title">资质荣誉</p>
        <div>
            <?php foreach ($info['aptitude'] as $aptitude) { ?>
			<img alt="企业证书" src="<?= $aptitude['url']; ?>" class="pd-cert-item">
            <?php } ?>
        </div>
    </div>
    <div class="pd-self-contact">
        <p class="pd-title">联系我们</p>
        <div class="sm">
            <div class="pd-sc-content">
			    <p><a role="address">地址:</a><?= $info['address']; ?></p>
				<p><a role="hot-line">预约热线:</a><?= Yii::$app->params['siteHotline']; ?></p>
            </div>
			<a class="pd-sc-hotline pd-btn free-order-pop">免费设计与报价</a>
        </div>
    </div>
</div>
