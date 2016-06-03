<div class="product-view">
    <div class="product-view-tabs">
        <div class="wrapper">
            <ul class="clearfix tabs" id="product-tabs">
                <li class="oppo-tj  y-tab-active " data-hash="features">
                    <a href="javascript:;">
                        商品详情
                    </a>
                </li>
                <li class="oppo-tj " data-hash="params" data-tj="store|tab|product_detail|product_params">
                    <a href="javascript:;">
                        规格参数
                    </a>
                </li>
                <li class="oppo-tj " data-hash="comments">
                    <!--<a href="javascript:;" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'comment-tab']);">
                        用户评价
                        <span id="comment-total">(0)</span>
                    </a>-->
                </li>
            </ul>
            <div class="sticky-buy">
                <a href="javascript:;" class="go-buy oppo-tj" id="sticky-go-buy">
                    购买
                </a>
            </div>
        </div>
    </div>
    <div class="product-view-detail" id="product-detail">
        <?php echo $this->render('_show_content_detail', ['info' => $info]); ?>
        <?php echo $this->render('_show_content_param', ['info' => $info]); ?>
        <?php //echo $this->render('_list_content_comment', ['info' => $info]); ?>
    </div>
</div>
