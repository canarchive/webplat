<?php
use yii\helpers\Url;

?>
    <!--顶部-->
    <div class="g-toolbar clrfix">
      <div class="w1190">
        <ul class="fl">
          <li class="f-collect">
            <div class="u-menu-hd">
              <a id="btnTFavorite" href="javascript:;" title="收藏">收藏</a>
            </div>
          </li>
          <li class="f-gap"><s></s></li>
          <li id="liMobile" class="u-arr">
            <div class="u-menu-hd transparent-png">
			<a href="<?= Yii::getAlias('@websiteurl') . Url::to(['info/app/mobile']); ?>" target="_blank" title="手机云购">手机云购</a>
              <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
            </div>
            <div class="u-select">
              <p>
			      <a href="<?= Yii::getAlias('@websiteurl') . Url::to(['info/app/mobile']); ?>" target="_blank">
                  <img src="http://skin.1yyg.com/images/andriod.jpg?v=150123" />
                  下载客户端
                </a>
              </p>
            </div>
          </li>
        </ul>
        <ul id="ulTopRight" class="fr">
          <li id="liMember" class="u-arr-1yyg" style="display: none;">
            <div class="u-menu-hd">
			  <a href="<?= Yii::getAlias('@passporturl'); ?>" title="我的<?= Yii::$app->params['baseTitle']; ?>">我的<?= Yii::$app->params['baseTitle']; ?></a>
              <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
            </div>
            <div class="u-select">
			  <span><a href="<?= Yii::getAlias('@paytradeurl') . Url::to(['orderlist/index']); ?>" title="云购记录">云购记录</a></span>
			  <span><a href="<?= Yii::getAlias('@paytradeurl') . Url::to(['bingo/index']); ?>" title="获得的商品">获得的商品</a></span>
			  <span><a href="<?= Yii::getAlias('@passporturl') . Url::to(['userinfo/index']); ?>" title="个人设置">个人设置</a></span>
            </div>
          </li>
          <li class="f-gap" style="display: none;"><s></s></li>
          <li id="liHome" style="display: none;">
            <div class="u-menu-hd">
              <a href="http://member.1yyg.com/" title="我的<?= Yii::$app->params['baseTitle']; ?>">我的<?= Yii::$app->params['baseTitle']; ?></a>
            </div>
          </li>
          <li class="f-gap" style="display: none;"><s></s></li>
          <li id="liTopUMsg" class="u-arr-news" style="display: none;">
            <div class="u-menu-hd">
			  <a href="<?= Yii::getAlias('@passporturl') . Url::to(['message/index']); ?>" title="消息">消息</a>
              <h3 style="display: none;"></h3>
              <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
            </div>
            <div class="u-select">
			  <span><a href="<?= Yii::getAlias('@passporturl') . Url::to(['message/system']); ?>" title="系统消息">系统消息</a></span>
			  <span><a href="<?= Yii::getAlias('@passporturl') . Url::to(['message/friend-apply']); ?>" title="好友请求">好友请求</a></span>
			  <span><a href="<?= Yii::getAlias('@passporturl') . Url::to(['message/comment-reply']); ?>" title="好友请求">评论回复</a></span>
			  <span><a href="<?= Yii::getAlias('@passporturl') . Url::to(['message/private']); ?>" title="私信" class="f-msg">私信</a></span>
            </div>
          </li>
          <li class="f-gap" style="display: none;"><s></s></li>
          <li>
            <div class="u-menu-hd">
			  <a href="<?= Yii::getAlias('@paytradeurl') . Url::to(['account/recharge']); ?>" title="充值">充值</a>
            </div>
          </li>
          <li class="f-gap"><s></s></li>
          <li>
            <div class="u-menu-hd">
			  <a href="<?= Yii::getAlias('@websiteurl') . Url::to(['info/help/index']); ?>" title="帮助">帮助</a>
            </div>
          </li>
          <li class="f-gap"><s></s></li>
          <li>
            <div class="u-menu-hd">
			  <a href="<?= Yii::getAlias('@websiteurl'); ?>/info/contact/complain.html" title="投诉">投诉</a>
            </div>
          </li>
          <li class="f-gap" style="display: none;"><s></s></li>
          <li id="lizxkf" class="f-zxkf" style="display: none;">
            <div class="u-menu-hd">
              <a id="btnTopQQ" href="javascript:;" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
            </div>
          </li>
          <li class="f-zxkf" style="display: none;">
           <div class="u-menu-hd">
		     <a href="<?= Yii::getAlias('@websiteurl'); ?>" title="<?= Yii::$app->params['baseTitle']; ?>首页" class="orange"><?= Yii::$app->params['baseTitle']; ?>首页</a>
           </div>
         </li>
        </ul>
      </div>
    </div><!--头部-->

