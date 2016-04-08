<div class="tg_center_right">
    <!--<i class="Specialproduct"></i>-->
    <div class="Specialproduct_goods">
        <!--<dl>
            <dd>
                <ul class="Specialproduct_name Specialproduct_goods_pic rslides1  Specialproduct_tj" >
                    <li>
                        <a href="#" target="_blank">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/website/tmall/images/img/Specialproduct01.jpg">
                            <em class="Specialproduct_bg"><i class="Specialproduct_price">123元</i></em>
                        </a>
                    </li>
                </ul>
            </dd>
        </dl>-->
        <div class="Specialproduct_tj">
            <dl>
                <dd>
                    <ul class="Specialproduct_name Specialproduct_goods_pic">
                        <?php for ($i = 1; $i < 7; $i++) { ?>
                        <li>
                            <a href="javascript: void(0);">
								<img src="<?= Yii::getAlias('@asseturl') . "/website/tmall/images/img/banner{$i}.jpg"; ?>">
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </dd>
                <dd style="height:330px">
                    <div class="tg_wx_pay">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/website/tmall/images/img/tg_ewm.jpg" border="0" />
                    </div>
                </dd>
            </dl>
        </div>
    </div>
</div>
