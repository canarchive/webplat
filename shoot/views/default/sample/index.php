<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['styles'];
$this->params['controllerForJs'] = 'BlogsController@video';
?>
<main class='main-content slab-light blog-revision'>
    <div class='wrapper'>
        <div class='blog-nav'>
            <ul>
				<?php foreach ($goodsInfos as $goodsId => $goodsName) { ?>
                <li>
					<a href="<?= Url::to(['sample/index', 'id' => $goodsId]); ?>" class="oppo-tj <?php if ($goodsId == $currentId) { echo 'selected'; } ?>"><?= $goodsName; ?></a>
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
							<a href="<?= Yii::getAlias('@spreadurl') . Url::to(['/shoot/signup/index', 'goods_id' => $info['goods_id']]); ?>">
							    <img src="<?= $info['filepath']; ?>" width="540px" height="300px" style="width: 540px; height:300px;"/>
                                <span class='play-mask'></span>
                                <span class='blog-icon play-icon'></span>
                                <span class='play-iframe'></span>
                            </a>
                        </p>
                        <p class='other'><a href="" target="_black" class="oppo-tj"></a></p>
                    </div>
                </div>
                <?php } } ?>
            </div>
            <?php if ($pages > 1) { ?>
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
							<a href="http://www.oppo.com/cn/blogs/video?group_name=%E6%88%91%E4%BB%AC%E7%9A%84%E8%A7%86%E9%A2%91&page=2" rel="next">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>
