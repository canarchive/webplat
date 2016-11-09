<?php
use yii\bootstrap\ActiveForm;
$this->params['currentNav'] = 'owner';
?>
<?= $this->render('_nav', ['curAction' => 'index']); ?>
<div class="container">
    <section class="main-wrap">
        <div class="pager-block">
            <div class="pager-title-block">
				<div class="title">留言反馈</div>
            </div>
            <ul class="breadcrumbs">
			    <li>针对业主<b><?= $ownerName; ?></b><b><?= $houseAddress; ?></b>沟通情况</li>
            </ul>
        </div>
        <div class="row full-width">
            <div class="small-12 columns">
                <div class="block">
                    <div class="block-bd">
                        <div class="block-content">
                            <form action="" method="post" id="captcha-form">
                            <?php $form = ActiveForm::begin(['options' => []]); ?>
                                <div class="row">
                                    <div class="small-12 medium-8 large-6 columns">
                                        <label for="domain">留言</label>
                                        <textarea name="content" id="content" class="captcha-domain" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <input type="submit" name="submit" class="button success tiny radius" value="提交" /></div>
                                </div>
                                <input type="hidden" name="id" value="<?= $id; ?>" />
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
