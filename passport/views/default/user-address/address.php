<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['styles_member_address'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'AddressesController@index';
$this->params['jsFooters'] = [
	'my/jquery-1.9.1.min', 'jquery.lazyload.min', 'underscore-min', 
	'es5-shim.min', 'base64.min', 'custom_form', 
	'jquery.countdown.min', 'slick.min', 'my/responsive', 'picturefill.min', 
	'scripts-address', 'region-select', 'sdj-new',
];
?>
<script>
var regionLevel1 = <?= $regionLevel1; ?>;
</script>
<main class='main-content user'>
<div class='wrapper'>
    <?php echo $this->render('../_user_nav', ['currentAction' => 'address']); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <ul class="list-unstyled">
                    <strong class='error_msg_note'></strong>
                </ul>
            </div>
        </div>
    </div>
    <form class='g'>
        <div class='gi one-whole'>
            <div class='brick-shadow'>
                <div class='radio-title'>
					<strong>拍摄地址，您可以在这里管理维护您的拍摄地址</strong>
                </div>
                <div class="content">
                    <?php foreach ($infos as $info) { ?>
                    <div class="address-form-field">
					    <div class='address-form' data-address-id='<?= $info['id']; ?>'>
						    <div id='address-edit-<?= $info['id']; ?>' class='g'>
                                <div class='gi field lap-one-whole desk-one-quarter'>
                                    <label>*联系人姓名</label>
									<input type="hidden" name='id' value='<?= $info['id']; ?>' />
									<input type='text' name='consignee' value='<?= $info['consignee']; ?>'>
                                </div>
                                <div class='g'>
                                    <div class='gi field lap-one-whole desk-one-quarter'>
                                        <label>*手机号码</label>
										<input type='text' name='mobile' value='<?= $info['mobile']; ?>'>
                                    </div>
                                </div>
                                <div class='g field'>
                                    <label>*收货地址</label>
                                    <div class='g'>
                                        <div class='gi basic-input one-whole desk-one-fifth'>
                                            <span class='icon icon-grey-arrow-down'></span>
                                            <select id='select7595311' name='province_id' data-region-default="2"></select>
                                        </div>
                                        <div class='gi basic-input one-whole desk-one-fifth'>
                                            <span class='icon icon-grey-arrow-down'></span>
                                            <select id='select7595312' name='city_id' data-region-default="3"></select>
                                        </div>
                                        <div class='gi basic-input one-whole desk-one-fifth'>
                                            <span class='icon icon-grey-arrow-down'></span>
                                            <select id='select7595313' name='district_id' data-region-default="8"></select>
                                        </div>
                                    </div>
                                    <div class="g">
                                        <div class="gi desk-two-thirds one-whole">
											<input class='address-detail' type="text" name="address" value='<?= $info['address']; ?>'>
                                        </div>
                                    </div>
                                </div>
                                <div class='form-actions'>
                                    <div class='pull-left'>
                                        <a class='button-light pull-left address-update' href='javascript:;' data-id='759531'>保存</a>
										<a class='button-light pull-left address-cancel' href='javascript:;' data-id='759531'>取消</a>
                                    </div>
                                </div>
                                <div class="dividing-line"></div>
                            </div>
                        </div>
                        <div class='field radio-item dark xl'>
						    <input type="hidden" class="address-form-receiver" value="<?= $info['consignee']; ?>">
						    <input type="hidden" class="address-form-mobile" value="<?= $info['mobile']; ?>">
						    <input type="hidden" class="address-form-address" value="<?= $info['address']; ?>">
						    <input id='radio<?= $info['id']; ?>' name='id' type='radio' value='<?= $info['id']; ?>' checked>
							<label for='radio<?= $info['id']; ?>'>
                                <div class="g address-form-content">
    								<div class="gi desk-one-fifth one-whole"><?= $info['consignee']; ?></div>
    								<div class="gi desk-one-fifth one-whole"><?= $info['mobile']; ?></div>
    								<div class="gi desk-two-fifths one-whole"><?= $info['address']; ?></div>
                                </div>
                                <div class='links'>
								    <a onclick='vm.edit("<?= $info['id']; ?>")'>编辑</a>
									<a href='javascript:;' class='remove-address' data-id='<?= $info['id']; ?>'>删除</a>
                                </div>
                            </label>
                            </input>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <a class='button-light field' id="address_new" href='javascript:;'>添加新地址</a>
                <div class='js-content address-form-new' style='display:none;'>
                    <div id='address-create' class='g'>
                        <div class='gi field lap-one-whole desk-one-quarter'>
                            <label>*收货人姓名</label>
                            <input type='text' name='receiver'></div>
                        <div class='g'>
                            <div class='gi field lap-one-whole desk-one-quarter'>
                                <label>*手机号码</label>
                                <input type='text' name='mobile'></div>
                        </div>
                        <div class='g field'>
                            <label>*收货地址</label>
                            <div class='g'>
                                <div class='gi basic-input one-whole desk-one-fifth'>
                                    <span class='icon icon-grey-arrow-down'></span>
                                    <select id='select1' name='province_id'></select>
                                </div>
                                <div class='gi basic-input one-whole desk-one-fifth'>
                                    <span class='icon icon-grey-arrow-down'></span>
                                    <select id='select2' name='city_id'></select>
                                </div>
                                <div class='gi basic-input one-whole desk-one-fifth'>
                                    <span class='icon icon-grey-arrow-down'></span>
                                    <select id='select3' name='district_id'></select>
                                </div>
                            </div>
                            <div class="g">
                                <div class="gi desk-two-thirds one-whole">
                                    <input class='address-detail' type="text" name="address-detail" value='' placeholder="详细街道地址"></div>
                            </div>
                        </div>
                        <div class='g'>
                            <div class='gi field lap-one-whole desk-one-quarter'>
                                <label>联系邮箱</label>
                                <input type='text' name='email'></div>
                        </div>
                        <div class='form-actions'>
                            <div class='pull-left'>
                                <a class='button-light pull-left address-store' href='javascript:;'>保存</a>
                                <a class='button-light pull-left address-new-cancel' href='javascript:;'>取消</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</main>
