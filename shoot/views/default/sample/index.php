<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['styles'];
$this->params['controllerForJs'] = 'BlogsController@video';
?>
<main class='main-content slab-light blog-revision'>
    <div class='wrapper'>
        <div class='blog-nav'>
            <ul>
				<?php foreach ($categoryInfos as $catId => $info) { ?>
                <li>
					<a href="<?= Url::to(['sample/list', 'id' => $catId]); ?>" class="oppo-tj <?php if ($catId == $currentId) { echo 'selected'; } ?>"><?= $info['name']; ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class='blog-category'></div>
        <div class='blog-video-list'>
            <div class='g g-wrapper-s'>
                <?php if (empty($infos)) { ?>
                <h3>没有相关信息<h3>
				<?php } else { foreach ($infos as $info) { ?>
                <div class='gi lap-one-half one-whole'>
                    <div class='blog-video'>
                        <div class='info'>
                            <div class='g g-wrapper-s'>
							    <div class='gi lap-one-half one-whole'><?= $info['filename']; ?></div>
                                <div class='gi lap-one-half one-whole align-right'>
                                    <!--<ul>
                                        <li>
											<span class='blog-icon icon-view'></span>6
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="info-zan" data-zan='138'>
                                                <span class='blog-icon icon-zan'></span>
                                            </a>
											<span class='pcount'>3066</span>
                                        </li>
                                    </ul>-->
                                </div>
                            </div>
                        </div>
                        <p class='image'>
                            <a href="javascript:;" onclick="vm.playVideo(138, this)">
                                <img src="http://static.oppo.com/archives/201603/20160317040305Bk7hfo5eXIHhOMdM.jpg" />
                                <span class='play-mask'></span>
                                <span class='blog-icon play-icon'></span>
                                <span class='play-iframe'></span>
                            </a>
                        </p>
                        <p class='other'>2016-03-17
                            <a href="http://www.oppo.com/cn/product/p/r9/index.html" target="_black" class="oppo-tj" data-tj="www|link|blog|recomend-138">OPPO R9</a></p>
                    </div>
                </div>
                <?php } } ?>
            </div>
            <div class='page_pagination  page_first '>
                <div class="text-center">
                    <ul class="pagination">
                        <li class="disabled">
							<span>&laquo;</span>
                        </li>
                        <?php for ($i = 1; $i < $pages; $i++) { ?>
						<?php if ($i == $page) { ?> 
						<li class="active">
						    <span><?= $i; ?></span>
                        </li>
                        <?php } else { ?>
                        <li>
						    <a href="<?= Url::to(['sample/index', 'page' => $i, 'id' => $currentId]); ?>"><?= $i; ?></a>
                        </li>
                        <?php } ?>
                        <?php } ?>
                        <li>
                            <a href="http://www.oppo.com/cn/blogs/video?group_name=%E6%88%91%E4%BB%AC%E7%9A%84%E8%A7%86%E9%A2%91&page=2" rel="next">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
