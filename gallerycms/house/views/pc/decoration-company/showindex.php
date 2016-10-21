<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['currentNav'] = 'company';
$this->params['friendLink'] = true;

$this->params['showPage'] = true;
$this->context->mobileMappingUrl = Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<?php echo $this->render('_intro', ['info' => $info]); ?>
<section class="pd-main">
    <div class="pd-main-body">
        <?php echo $this->render('_nav', ['info' => $info, 'currentNav' => $action]); ?>
        <!-- 首页 -->
        <div class="pd-index active clearfix" style="margin-top: 10px;">
            <div class="pd-m-apply">
                <p class="pd-title">最新申请设计服务
					<span class="pd-ma-btn pd-btn free-order-pop">我要申请</span>
                </p>
                <div class="pd-m-thead">
                    <table class="pd-table pd-thead">
                        <thead>
                            <tr>
                                <th>业主</th>
                                <th>小区</th>
                                <th>面积</th>
                                <th>风格</th>
                                <tr></thead>
                        <tbody>
                            <!-- 默认封装真实的全部数据，保持上下table 的header一致 -->
                            <?php foreach ($ownerInfos as $ownerInfo) { ?>
                            <tr>
							    <td><?= $ownerInfo['name']; ?></td>
							    <td><?= $ownerInfo['community_name']; ?></td>
								<td><?= $ownerInfo['area']; ?>m&sup2;</td>
							    <td><?= $ownerInfo['decoration_type']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="pd-m-tbody">
                    <table class="pd-table pd-tbody">
                        <tbody>
                            <?php foreach ($ownerInfos as $ownerInfo) { ?>
                            <tr>
							    <td><?= $ownerInfo['name']; ?></td>
							    <td><?= $ownerInfo['community_name']; ?></td>
								<td><?= $ownerInfo['area']; ?>m&sup2;</td>
							    <td><?= $ownerInfo['decoration_type']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php if (count($designerInfos) > 0) { $designerInfoFirst = array_pop($designerInfos); ?>
            <div class="pd-m-applystep">
                <p class="pd-title">优秀设计师
                <a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjsjs', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="more">更多></a></p>
                <div class="designer">
                    <div class="case">
                        <img src="<?= $designerInfoFirst['photo']; ?>" alt="设计师形象" />
                        <p class="name"><?= $designerInfoFirst['name']; ?></span>
                        <p class="info"><?= $designerInfoFirst['title']; ?></span>
                        <ol class="list">
                            <?php $i = 0; foreach ($designerInfos as $designerInfo) { if ($i > 2) { break; } ?>
                            <li>
                                <img src="<?= $designerInfo['photo']; ?>" alt="<?= $designerInfo['name']; ?>" />
                                <p class="item-name"><?= $designerInfo['name']; ?></p>
                                <p class="item-type"><?= '设计师';//$designerInfo['title']; ?></p>
                            </li>
                            <?php $i++; } ?>
                        </ol>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="pd-m-case">
                <p class="pd-title">装修实景
				    <a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="more">更多></a></p>
                <div class="pd-showcase">
                    <?php $i = 1; foreach ($realcaseInfos as $rInfo) { if ($i > 3) { break; } ?>
                    <div class="case-item">
                        <figure>
        				    <a data-url="<?= Url::to(['/house/realcase/show', 'id' => $rInfo['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
        						<img alt="<?= $rInfo['name']; ?>" src="<?= $rInfo['thumb']; ?>">
                            </a>
        					<p class="desc"><?= $rInfo['ownerInfo']['brief']; ?></p>
                        </figure>
                        <p class="case-info">
                            <!--<img alt="装修管家" src="http://pic.tugou.com/weixin/userheader.png" class="designer-head">-->
        					<a role="construction"><?= $rInfo['ownerInfo']['brief']; ?></a>
        					<!--<a role="style"><?= $rInfo['ownerInfo']['style']; ?></a>
        					<a role="detail"><?= $rInfo['ownerInfo']['decoration_type'] . ' ' . $rInfo['ownerInfo']['decoration_price']; ?>万</a>-->
                        </p>
                    </div>
                    <?php $i++; } ?>
                </div>
            </div>
            <div class="pd-m-building">
                <p class="pd-title">工地实拍
				    <a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjgd', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="more">更多></a></p>
                <div class="pd-showbuild">
                    <?php $i = 1; foreach ($workingInfos as $wInfo) { if ($i > 4) { break; } ?>
                    <div class="case-item">
                        <figure>
        				    <a data-url="<?= Url::to(['/house/decoration-company/show-working', 'id' => $wInfo['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
        					    <img alt="直播工地" src="<?= $wInfo['thumb']; ?>">
                            </a>
        					<p class="desc"><?= $wInfo['status']; ?></p>
                        </figure>
                        <p class="case-info">
        				    <a data-role="building"><?= $wInfo['ownerInfo']['community_name']; ?></a>-
        					<a data-role="owner"><?= $wInfo['ownerInfo']['name']; ?></a>的家
                        </p>
                        <p class="case-subinfo sm">
        				    <a data-role="area"><?= $wInfo['ownerInfo']['area']; ?>m²</a>
        				    <a data-role="price"><?= $wInfo['ownerInfo']['decoration_type'] . ' ' . $wInfo['ownerInfo']['decoration_price']; ?>万</a>
                        </p>
                    </div>
                    <?php $i++; } ?>
                </div>
            </div>
        </div>
    </div>
    <div id="pd-fault-footer"></div>
</section>
<div class="pop_mask hide">
    <div class="pop_box">
        <a class="pop_close">&times;</a>
        <div class="title_box">
            <p class="title">免费为我做设计</p>
            <p class="subtitle">免费获取3份设计选取满意设计稿</p></div>
        <div class="apply_form">
		    <input name="apply_type" type="hidden" value="company-showindex">
            <input name="apply_provider" type="hidden" value="195">
            <input name="name" type="text" placeholder="您的姓名">
            <input name="phone" type="text" placeholder="手机号码">
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input name="apply" type="button" value="立即预约">
            <p class="sm">全国服务热线<?= Yii::$app->params['siteHotline']; ?>
                <br>为了方便我们联系，请留下您的联系方式，我们将严格保密</p></div>
    </div>
</div>
