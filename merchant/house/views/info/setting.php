<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->params['jsFooterFiles'] = [
	'jquery-2.1.0', 'foundation.min',
	'main',
];
Yii::$app->params['seoTitle'] = '信息编辑-' . Yii::$app->params['seoTitle'];
?>
<div class="container">
    <?= $this->render('_nav', ['curAction' => 'setting']); ?>
    <section class="main-wrap dash-main-wrap">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">账号设置</div>
                <div class="sub-title">修改密码、email</div>
            </div>
            <ul class="breadcrumbs">
                <li><a href="<?= Url::to(['/info/index']); ?>">概览</a></li>
                <li class="current">账号设置</li>
            </ul>
        </div>
        <div class="row full-width">
            <?php $form = ActiveForm::begin(['options' => []]); ?>
                <div class="small-12 columns">
                    <div class="block">
                        <div class="block-content">
                            <div class="panel">
                                <div class="alert">1.修改个人信息时，为保证安全，需要输入原密码
                                    <br/>2.修改邮箱需要重新进行验证</div></div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="password_old" class="inline">输入原密码：</label></div>
                                        <div class="small-9 columns">
											<input type="password" name="password_old" id="password_old" placeholder="如需修改信息，请输入您目前的账户密码" value="">
                                            <?php if (isset($info['field']) && $info['field'] == 'password_old') { ?>
											<span class="label alert radius"><?= $info['message']; ?></span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="password_new" class="inline">输入新密码：</label></div>
                                        <div class="small-9 columns">
                                            <input type="password" name="password_new" id="password_new" autocomplete="off" placeholder="6位数字字母组合，不能以_开头">
                                            <?php if (isset($info['field']) && $info['field'] == 'password_new') { ?>
											<span class="label alert radius"><?= $info['message']; ?></span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="password_new_repeat" class="inline">再次输入密码：</label></div>
                                        <div class="small-9 columns">
                                            <input type="password" id="password_new_repeat" name="password_new_repeat" autocomplete="off"></div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="old_mail" class="inline">原邮箱：</label></div>
                                        <div class="small-9 columns">
											<input type="text" id="old_mail" disabled placeholder="<?= $this->context->userInfo['email']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="new_mail" class="inline">输入新邮箱：</label></div>
                                        <div class="small-9 columns">
                                            <input type="text" id="email" name="email" placeholder="为了保证您及时收到Luosimao的通知，修改邮箱需要重新进行验证" value="">
                                            <?php if (isset($info['field']) && $info['field'] == 'email') { ?>
											<span class="label alert radius"><?= $info['message']; ?></span>
                                            <?php } ?>
										</div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="old_phone" class="inline">原用户名：</label></div>
                                        <div class="small-9 columns">
										<input type="text" id="old_phone" disabled value="<?= $this->context->userInfo['truename']; ?>">
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="mobile" class="inline">输入新用户名：</label></div>
                                        <div class="small-9 columns">
                                            <input type="text" id="truename" name="truename" />
										</div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="old_phone" class="inline">原手机号：</label></div>
                                        <div class="small-9 columns">
										<input type="text" id="old_phone" disabled value="<?= $this->context->userInfo['mobile']; ?>">
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-8 large-6 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label for="mobile" class="inline">输入新手机号：</label></div>
                                        <div class="small-9 columns">
                                            <input type="text" id="mobile" name="mobile" />
                                            <?php if (isset($info['field']) && $info['field'] == 'mobile') { ?>
											<span class="label alert radius"><?= $info['message']; ?></span>
                                            <?php } ?>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="small-12 columns">
                    <div class="setting-sub">
                        <input type="submit" name="submit" class="button small success radius" value="保存个人设置" /></div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </section>
</div>
<a href="#" class="exit-off-canvas"></a>
