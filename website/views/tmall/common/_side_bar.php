<?php
use yii\helpers\Url;
?>
<div class="tg_sideBar">
    <div class="tg_sideBar_nav">
        <div class="tg_sideBar_nav_cn">
            <ul class="tg_sideBar_4_connect">
                <li>
				    <a href="<?= Yii::getAlias('@passporturl'); ?>"><i class="tg_sideBar_login"></i></a>
                    <div class="tg_sideBar_hover">
                        <div id="tg_login"></div>
                        <div class="tg_common_white_jt">◆</div>
                    </div>
                </li>
                <li>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=2386870301&site=qq&menu=yes" target="_blank">
                        <i class="tg_sideBar_qq"></i>
                    </a>
                    <div class="tg_sideBar_hover">
                        <div class="tg_common_white_bg">
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=&site=qq&menu=yes" target="_blank">
                                客服QQ
                            </a>
                        </div>
                        <div class="tg_common_white_jt">◆</div>
                    </div>
                </li>
                <li>
                    <i class="tg_sideBar_phone"></i>
                    <div class="tg_sideBar_hover">
                        <div class="tg_common_white_bg">400 678 6701</div>
                        <div class="tg_common_white_jt">◆</div>
                    </div>
                </li>
                <!--<li>
                    <a href="http://amos.im.alisoft.com/msg.aw?v=2&uid=&site=cntaobao&s=2&charset=utf-8" target="_blank"><i class="tg_sideBar_ww"></i></a>
                    <div class="tg_sideBar_hover">
                        <div class="tg_common_white_bg">
                            <a href="http://amos.im.alisoft.com/msg.aw?v=2&uid=&site=cntaobao&s=2&charset=utf-8" target="_blank">阿里旺旺</a>
                        </div>
                        <div class="tg_common_white_jt">◆</div>
                    </div>
                </li>
                -->
                <li>
                    <a href="flow.php">
                        <div class="tg_shoppingCart">
                            <i class="tg_sideBar_gwc"></i>
                            <em>购物车</em>
                            <b class="tg_sideBar_num" id="buy_num">0</b>
                        </div>
                    </a>
                    <div class="tg_sideBar_hover">
                        <div id="tg_gwc" class="has_gwc_goods_wrapper"></div>
                        <div class="tg_common_white_jt">◆</div>
                    </div>
                </li>
                <li>
                    <i class="tg_sideBar_ewm"></i>
                    <div class="tg_sideBarWid150_hover">
                        <div class="tg_wid150_white_bg">
                            <dl>
                                <dd>
									<img src="<?= Yii::getAlias('@asseturl'); ?>/website/tmall/images/img/tg_ewm_jx.jpg" border="0px" /><br/>
                                    途高家居精选
                                </dd>
                                <dd>
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/website/tmall/images/img/tg_ewm_wd.jpg" border="0px" /><br/>
                                    途高家居微店
                                </dd>
                            </dl>
                        </div>
                        <div class="tg_wid150_white_jt">◆</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tg_sideBar_nav_ft">
            <ul>
                <li>
				    <a href="<?= Yii::getAlias('@passporturl') . Url::to(['req']); ?>" target="_blank">
                        <i class="tg_sideBar_chat"></i>
                    </a>
                    <div class="tg_sideBar_hover">
                        <div class="tg_common_white_bg">说几句吧</div>
                        <div class="tg_common_white_jt">◆</div>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <i class="tg_sideBar_returnTop"></i>
                    </a>
                    <div class="tg_sideBar_hover">
                        <div class="tg_common_white_bg">回到顶部</div>
                        <div class="tg_common_white_jt">◆</div>
                    </div>
                </li>
            </ul>
        </div>
        <input type="hidden" id="flag" value="">
        <input type="hidden" id="num" value="">
        <input type="hidden" id="username" value="">
    </div>
</div>
