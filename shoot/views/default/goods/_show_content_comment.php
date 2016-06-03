        <div class="product-detail-tab y-tab-frame " id="product-detail-comments">
            <section>
                <div class="wrapper comments-wrapper">
                    <div class="y-comments-header clearfix">
                        <div class="reviews-switchable" id="comments-switchable">
                            <ul>
                                <li class="switchable checked">
                                    <a href="javascript:;" data-type="all" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'all-comments-button']);">
                                        <span class="cb-radio">
                                            <span class="cb-inner">
                                                <i>
                                                </i>
                                            </span>
                                        </span>
                                        <label>
                                            全部评价
                                        </label>
                                    </a>
                                </li>
                                <li class="switchable">
                                    <a href="javascript:;" data-type="hasimages" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', '晒图按钮']);">
                                        <span class="cb-radio">
                                            <span class="cb-inner">
                                                <i>
                                                </i>
                                            </span>
                                        </span>
                                        <label>
                                            晒图
                                            <span class="reviews-count" data-type="hasimages">
                                                （0）
                                            </span>
                                        </label>
                                    </a>
                                </li>
                                <li class="switchable">
                                    <a href="javascript:;" data-type="hasappend" onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'append-comment-button']);">
                                        <span class="cb-radio">
                                            <span class="cb-inner">
                                                <i>
                                                </i>
                                            </span>
                                        </span>
                                        <label>
                                            追评
                                            <span class="reviews-count" data-type="hasappend">
                                                （0）
                                            </span>
                                        </label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="comments-button">
                            <a class="button button-s" href="javascript:;" data-type="1" id="go-comment"
                            onclick="_optj.push(['_trackEvent', 'store', 'btn', 'comments', 'comment-button']);">
                                我要评论
                            </a>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div id="comments" class="y-comments-view"></div>
                    <div class="y-comment-pagination clearfix" id="comments-pagination"></div>
                    <div id="respond" class="y-comment-respond" style="display: none;">
                        <div class="y-comment-form">
                            <input type="hidden" id="comment-product-id" value="362">
                            <input type="hidden" id="comment-type" value="1">
                            <input type="hidden" id="comment-score" value="0">
                            <input type="hidden" id="comment-id" value="0">
                            <input type="hidden" id="comment-archive-ids" value="">
                            <div class="field y-form-star" id="comment-star-box">
                                <label>
                                    评分
                                </label>
                                <div class="group clearfix">
                                    <div class="comment-star" data-bind="rating">
                                        <a href="javascript:;" class="stars star-1" data-value="1">
                                            1
                                        </a>
                                        <a href="javascript:;" class="stars star-2" data-value="2">
                                            2
                                        </a>
                                        <a href="javascript:;" class="stars star-3" data-value="3">
                                            3
                                        </a>
                                        <a href="javascript:;" class="stars star-4" data-value="4">
                                            4
                                        </a>
                                        <a href="javascript:;" class="stars star-5" data-value="5">
                                            5
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="field y-form-list" id="comment-list-box" style="display: none;">
                                <label>
                                    请选择已提交的评论进行追评
                                </label>
                                <div id="comment-list">
                                    正在加载中...
                                </div>
                            </div>
                            <div class="field y-form-comment">
                                <label id="comment-label">
                                    内容
                                </label>
                                <textarea id="comment" placeholder="请输入评价内容, 内容不能超过200字！"></textarea>
                            </div>
                            <div class="y-comments-uploader" id="comments-uploader-container">
                                <a class="y-upload-button" href="javascript:;" id="comments-file">
                                    <i>
                                    </i>
                                    <span>
                                        上传图片
                                    </span>
                                </a>
                                <div class="y-upload-list">
                                    <ul id="comments-upload-list" style="display: none;"></ul>
                                </div>
                                <div class="y-upload-note">
                                    最大可支持上传
                                    <em>
                                        2
                                    </em>
                                    M以内的JPG,PNG格式图片，最多允许上传
                                    <em>
                                        4
                                    </em>
                                    张图片
                                </div>
                            </div>
                            <div class="y-form-button">
                                <a class="button button-s" href="javascript:;" id="submit-comment">
                                    提交评论
                                </a>
                                <a class="button button-s" href="javascript:;" id="comment-loading" style="display: none;">
                                    提交评论中...
                                </a>
                                <a class="button-light button-s" href="javascript:;" id="cancel-comment">
                                    取消评论
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
