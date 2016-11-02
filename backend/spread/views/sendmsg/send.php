<?php
use yii\helpers\Html;

?>
<div class="box col-md-12">
    <div class="box-inner">
        <div data-original-title="" class="box-header well">
            <h2>
                <i class="glyphicon glyphicon-edit"></i>分站和商家--&gt;基本信息管理--&gt;添加</h2>
            <div class="box-icon"></div>
        </div>
        <div class="box-content">
            <div class="menu-form">
                <?php $form = ActiveForm::begin(); ?>
                    <div class="form-group field-merchantbank-merchant_id required">
                        <label class="control-label" for="merchantbank-merchant_id">商家ID</label>
                        <select id="merchantbank-merchant_id" class="form-control" name="MerchantBank[merchant_id]">
                            <option value="">Select Merchant</option>
                            <option value="1">克洛尼</option>
                            <option value="2">中海建林（北京）</option>
                            <option value="3">天元煜锐建筑</option>
                            <option value="22585">abc</option>
                            <option value="22586">aaa</option></select>
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-name required">
                        <label class="control-label" for="merchantbank-name">账户名</label>
                        <input id="merchantbank-name" class="form-control" name="MerchantBank[name]" maxlength="128" type="text">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-bank_name required">
                        <label class="control-label" for="merchantbank-bank_name">银行名称</label>
                        <select id="merchantbank-bank_name" class="form-control" name="MerchantBank[bank_name]">
                            <option value="">Select Bank Name</option>
                            <option value="ICBC">工商银行</option>
                            <option value="BOC">中国银行</option></select>
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-bank_opening">
                        <label class="control-label" for="merchantbank-bank_opening">开户行</label>
                        <input id="merchantbank-bank_opening" class="form-control" name="MerchantBank[bank_opening]" maxlength="128" type="text">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-bank_account required">
                        <label class="control-label" for="merchantbank-bank_account">账号</label>
                        <input id="merchantbank-bank_account" class="form-control" name="MerchantBank[bank_account]" maxlength="128" type="text">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-typeinfos">
                        <label class="control-label" for="merchantbank-typeinfos">Type Infos</label>
                        <select id="merchantbank-typeinfos" class="form-control" name="MerchantBank[typeInfos]">
                            <option value="">Select Type</option>
                            <option value="inuse">常用</option>
                            <option value="bak">备用</option></select>
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-orderlist">
                        <label class="control-label" for="merchantbank-orderlist">排序</label>
                        <input id="merchantbank-orderlist" class="form-control" name="MerchantBank[orderlist]" type="text">
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-statusinfos">
                        <label class="control-label" for="merchantbank-statusinfos">Status Infos</label>
                        <select id="merchantbank-statusinfos" class="form-control" name="MerchantBank[statusInfos]">
                            <option value="">Select Status</option>
                            <option value="0" selected="">停用</option>
                            <option value="1">正常</option></select>
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group field-merchantbank-description">
                        <label class="control-label" for="merchantbank-description">描述</label>
                        <textarea id="merchantbank-description" class="form-control" name="MerchantBank[description]" rows="2"></textarea>
                        <p class="help-block help-block-error"></p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">添加信息</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
