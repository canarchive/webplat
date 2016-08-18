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
                                <th>预算</th>
                                <tr></thead>
                        <tbody>
                            <!-- 默认封装真实的全部数据，保持上下table 的header一致 -->
                            <tr>
                                <td>杨先生</td>
                                <td>东货厂路40号</td>
                                <td>78m&sup2;</td>
                                <td>混搭</td>
                                <td>4-5万</td></td>
                            </tr>
                            <tr>
                                <td>许女士</td>
                                <td>格林云墅</td>
                                <td>89m&sup2;</td>
                                <td>混搭</td>
                                <td>6-7万</td></td>
                            </tr>
                            <tr>
                                <td>史女士</td>
                                <td>满庭春</td>
                                <td>87m&sup2;</td>
                                <td>简约</td>
                                <td>6-7万</td></td>
                            </tr>
                            <tr>
                                <td>曹先生</td>
                                <td>德顺园</td>
                                <td>98m&sup2;</td>
                                <td>欧式</td>
                                <td>10-12万</td></td>
                            </tr>
                            <tr>
                                <td>徐女士</td>
                                <td>东王庄</td>
                                <td>70m&sup2;</td>
                                <td>美式</td>
                                <td>6-7万</td></td>
                            </tr>
                            <tr>
                                <td>赵女士</td>
                                <td>住总万科橙</td>
                                <td>78m&sup2;</td>
                                <td>简约</td>
                                <td>6-7万</td></td>
                            </tr>
                            <tr>
                                <td>陈女士</td>
                                <td>方安苑</td>
                                <td>270m&sup2;</td>
                                <td>简约</td>
                                <td>30-40万</td></td>
                            </tr>
                            <tr>
                                <td>刘女士</td>
                                <td>采育镇波尔多</td>
                                <td>180m&sup2;</td>
                                <td>简约</td>
                                <td>12-14万</td></td>
                            </tr>
                            <tr>
                                <td>贾女士</td>
                                <td>孔雀城英国宫</td>
                                <td>80m&sup2;</td>
                                <td>简约</td>
                                <td>5-6万</td></td>
                            </tr>
                            <tr>
                                <td>刘先生</td>
                                <td>马家堡</td>
                                <td>63m&sup2;</td>
                                <td>简约</td>
                                <td>3-4万</td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pd-m-tbody">
                    <table class="pd-table pd-tbody">
                        <tbody>
                            <tr>
                                <td>杨先生</td>
                                <td>东货厂路40号</td>
                                <td>78m&sup2;</td>
                                <td>混搭</td>
                                <td>4-5万</td></tr>
                            <tr>
                                <td>许女士</td>
                                <td>格林云墅</td>
                                <td>89m&sup2;</td>
                                <td>混搭</td>
                                <td>6-7万</td></tr>
                            <tr>
                                <td>史女士</td>
                                <td>满庭春</td>
                                <td>87m&sup2;</td>
                                <td>简约</td>
                                <td>6-7万</td></tr>
                            <tr>
                                <td>曹先生</td>
                                <td>德顺园</td>
                                <td>98m&sup2;</td>
                                <td>欧式</td>
                                <td>10-12万</td></tr>
                            <tr>
                                <td>徐女士</td>
                                <td>东王庄</td>
                                <td>70m&sup2;</td>
                                <td>美式</td>
                                <td>6-7万</td></tr>
                            <tr>
                                <td>赵女士</td>
                                <td>住总万科橙</td>
                                <td>78m&sup2;</td>
                                <td>简约</td>
                                <td>6-7万</td></tr>
                            <tr>
                                <td>陈女士</td>
                                <td>方安苑</td>
                                <td>270m&sup2;</td>
                                <td>简约</td>
                                <td>30-40万</td></tr>
                            <tr>
                                <td>刘女士</td>
                                <td>采育镇波尔多</td>
                                <td>180m&sup2;</td>
                                <td>简约</td>
                                <td>12-14万</td></tr>
                            <tr>
                                <td>贾女士</td>
                                <td>孔雀城英国宫</td>
                                <td>80m&sup2;</td>
                                <td>简约</td>
                                <td>5-6万</td></tr>
                            <tr>
                                <td>刘先生</td>
                                <td>马家堡</td>
                                <td>63m&sup2;</td>
                                <td>简约</td>
                                <td>3-4万</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="pd-m-applystep">
                <p class="pd-title">优秀设计师
				<a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjsjs', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="more">更多></a></p>
                <div class="designer">
                    <div class="case">
                        <img src="http://pic.tugou.com/designer/1451095525_4502383.jpeg" alt="设计师形象" />
                        <p class="name">蔡建超</span>
                            <p class="info">擅长欧式、地中海、中式风格</span>
                                <ol class="list">
                                    <li>
                                        <img src="http://pic.tugou.com/designer/1451095589_983768.jpeg" alt="设计师形象" />
                                        <p class="item-name">程振西</p>
                                        <p class="item-type">设计师</p></li>
                                    <li>
                                        <img src="http://pic.tugou.com/designer/1451095638_886979.jpeg" alt="设计师形象" />
                                        <p class="item-name">李政阳</p>
                                        <p class="item-type">设计师</p></li>
                                    <li>
                                        <img src="http://pic.tugou.com/designer/1451095681_077679.jpeg" alt="设计师形象" />
                                        <p class="item-name">吴琼</p>
                                        <p class="item-type">设计师</p></li>
                                </ol>
                    </div>
                </div>
            </div>
            <div class="pd-m-case">
                <p class="pd-title">装修实景
				    <a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="more">更多></a></p>
                <div class="pd-showcase">
                    <?php $i = 1; foreach ($realcaseInfos as $info) { if ($i > 3) { break; } ?>
                    <div class="case-item">
                        <figure>
        				    <a data-url="<?= Url::to(['/house/realcase/show', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
        						<img alt="<?= $info['name']; ?>" src="<?= $info['thumb']; ?>">
                            </a>
        					<p class="desc"><?= $info['community_name']; ?></p>
                        </figure>
                        <p class="case-info">
                            <img alt="装修管家" src="http://pic.tugou.com/weixin/userheader.png" class="designer-head">
        					<a role="construction"><?= $info['house_type']; ?></a>
        					<a role="style"><?= $info['style']; ?></a>
        					<a role="detail"><?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</a>
                        </p>
                    </div>
                    <?php $i++; } ?>
                </div>
            </div>
            <div class="pd-m-building">
                <p class="pd-title">工地实拍
				    <a href="<?= Url::to(['/house/decoration-company/show', 'id' => $info['id'], 'action' => 'sjgd', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="more">更多></a></p>
                <div class="pd-showbuild">
                    <?php $i = 1; foreach ($workingInfos as $info) { if ($i > 3) { break; } ?>
                    <div class="case-item">
                        <figure>
        				    <a data-url="<?= Url::to(['/house/decoration-company/show-working', 'id' => $info['id'], 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
        					    <img alt="直播工地" src="<?= $info['thumb']; ?>">
                            </a>
        					<p class="desc"><?= $info['status']; ?></p>
                        </figure>
                        <p class="case-info">
        				    <a data-role="building"><?= $info['community_name']; ?></a>-
        					<a data-role="owner"><?= $info['owner_name']; ?></a>的家
                        </p>
                        <p class="case-subinfo sm">
        				    <a data-role="area"><?= $info['area']; ?>m²</a>
        				    <a data-role="price"><?= $info['decoration_type'] . ' ' . $info['decoration_price']; ?>万</a>
                        </p>
                    </div>
                    <?php } ?>
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
            <input name="apply_type" type="hidden" value="6">
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
            <p class="sm">全国服务热线400-8617-000
                <br>为了方便我们联系，请留下您的联系方式，我们将严格保密</p></div>
    </div>
</div>
