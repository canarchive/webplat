<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['styles_member'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'AddressesController@index';
?>
<?php $this->beginPage() ?>
<main class='main-content user'>
    <div class='wrapper'>
        <div class='myOppo-menu'>
            <h1 class='h-gamma'>预约摄影</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <ul class="list-unstyled">
                        <strong class='error_msg_note'></strong>
                    </ul>
                </div>
            </div>
        </div>
        <div class='g'>
            <div class='gi lap-two-fifths desk-one-quarter user-aside'>
                <div class='user-data-info' style="display: ;">
                    <h2 class='message-box-title'>直接电话咨询</h2>
                    <button class='button button-primary full-width' id='save_password'>
                        <a href="tel:13811974106">13811974106</a>
                    </button>
                </div>
                <div class="user-data-info msg_password"></div>
            </div>
            <div class='gi lap-three-fifths desk-three-quarters my-oppo-content slab-white-border'>
                <form method="POST" action="http://my.oppo.com/user/profile/140634132" accept-charset="UTF-8">
                <section class='brick-shadow'>
                    <input name="_method" type="hidden" value="PUT">
                    <input name="_token" type="hidden" value="ymaskyxpXmdRozGZkhaFkCsT6SSzRchcuwyZhtMe">
                    <div class='g g-wrapper-s'>
                        <div class='gi field two-thirds'>
                            <label>拍摄类型：</label>
                            <div class='my-oppo-content-edit basic-input' style="display: block;">
                                <span class='icon icon-grey-arrow-down'></span>
                                <select id='select' name='gender'>
                                    <option value='' selected>请选择</option>
                                    <option value='1'>女装</option>
                                    <option value='0'>童装</option>
                                    <option value='0'>写真</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class='g g-wrapper-s'>
                        <div class='gi field two-thirds'>
                            <label>*称呼：</label>
                            <div class='my-oppo-content-edit' style="display: block;">
                                <input id="user_profile_form" name="username" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class='g g-wrapper-s'>
                        <div class='gi field two-thirds'>
                            <label>*手机号：</label>
                            <div class='my-oppo-content-edit' style="display: block;">
                                <input id="user_profile_form" name="username" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class='g g-wrapper-s'>
                        <div class='gi two-thirds'>
                            <label>需求描述：</label>
                            <div class='my-oppo-content-edit' style="display: block;">
                                <textarea id="message" name="message" ></textarea>
                            </div>
                        </div>
                    </div>
                </section>
                <div class='form-actions brick-shadow'>
                    <div class='form-actions-right'>
                        <a class='my-oppo-content-save button-light button-save-form' style="display:block;" data-trigger='submit'>保存</a>
                    </div>
                </div>
                </form> 
            </div>
        </div>
    </div>
</main>
