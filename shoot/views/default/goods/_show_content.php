<?php
use yii\helpers\Url;
?>
<div class="product-view">
    <div class="product-view-tabs">
        <div class="wrapper">
            <ul class="clearfix tabs" id="product-tabs">
                <!--<li class="oppo-tj  y-tab-active " data-hash="features">
                    <a href="javascript:;">商品详情</a>
                </li>-->
                <li class="oppo-tj y-tab-active" data-hash="params" data-tj="store|tab|product_detail|product_params">
                    <a href="javascript:;">样片</a>
                </li>
                <li class="oppo-tj " data-hash="comments">
                    <!--<a href="javascript:;" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'comment-tab']);">
                        用户评价
                        <span id="comment-total">(0)</span>
                    </a>-->
                </li>
            </ul>
            <div class="sticky-buy">
			    <a href="<?= Yii::getAlias('@spreadurl') . Url::to(['/shoot/signup/index', 'goods_id' => $info['id']]); ?>" class="go-buy oppo-tj" >预约拍摄</a>
            </div>
        </div>
    </div>
    <div class="product-view-detail" id="product-detail">
        <?php //echo $this->render('_show_content_detail', ['info' => $info]); ?>
        <?php echo $this->render('_show_content_param', ['info' => $info, 'sampleInfos' => $sampleInfos]); ?>
        <?php //echo $this->render('_list_content_comment', ['info' => $info]); ?>
    </div>
</div>
