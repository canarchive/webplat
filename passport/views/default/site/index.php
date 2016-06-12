<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['styles_member'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'AddressesController@index';
?>
<main class='main-content user'>
<div class='wrapper'>
    <?php echo $this->render('../_user_nav', ['currentAction' => 'index']); ?>
    <div class='g'>
        <div class='gi lap-two-fifths desk-one-quarter user-aside'>
            <div class='user-data'>
                <div class='user-avatar'>
                    <a href="" target="_blank"><img class="fl" width="200" height="200" src="" /></a>
                </div>
                <div class='user-name'>
                    <p>U56160741</p>
                </div>
                <div class='user-actions'>
                    <p><a href="" class="home_info_head_modify fl" target="_blank">修改头像</a></p>
                </div>
                <ul class='user-data-info'>
                    <li class='user-info-user'>
                    <div class='user-info-icon'>
                    <span class='icon icon-star-circle'></span></div>
                    <div class='user-data-info-title'>
                    <p>VIP 会员 | 1级</p>
                    </div>
                    <p>
                    <a href='#'>晋升至2级</a></p>
                    </li>
                    <li class='user-info-dynamic'>
                        <div class='user-info-icon'>
                            <span class='icon icon-dollar-circle'></span>
                        </div>
                        <div class='user-data-info-title'>
                            <p>0 积分</p>
                        </div>
                        <p>
                            <a href='http://points.oppo.com/' target="_black">了解如何使用积分</a></p>
                    </li>
                </ul>
                <div class='advice'>
                    <div class='box box-banner sm'>
                        <a href='http://www.opposhop.cn/products/116' target="_blank">
                            <img alt='' src='/media/images/personal-center.jpg'>
                            <div class='content'>
                                <h1 class='h-epsilon'>所有原装及兼容配件均具有OPPO专家团队品质保证</h1>
                                <p class='banner-subtitle'>了解更多我们的产品保证和退换货政策</p> </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class='gi lap-three-fifths desk-three-quarters my-oppo-content slab-white-border'>
            <section class='brick-shadow'>
                <h1 class='h-epsilon'>您的最新动态</h1>
                <ul class='user-activity faq'>
                    <li class='user-info-personal'>
                        <div class='user-info-icon'>
                            <span class='icon icon-user-circle'></span>
                        </div>
                        <div class='activity-content'>
                            <h2 class='activity-title'>最近更新个人信息</h2>
                            <div class='activity-date'>
                                <p>2016年06月04日 11:19:27</p>
                            </div>
                            <div class='activity-details'>
                                <p>您的个人信息已更改!</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section class='brick-shadow'>
                <h1 class='h-epsilon'>服务板块推荐</h1>
                <li class='user-info-points user-info-item'>
                    <div class='user-info-icon'>
                        <span class='icon icon-points-circle'></span>
                    </div>
                    <div class='activity-content'>
                        <h2 class='activity-title'>积分商城</h2>
                        <div class='activity-details'>
                            <p>OPPO积分商城面对所有会员开放，购物即可赚积分，积分礼品兑不停</p>
                            <p>
                                <a href='http://points.oppo.com/' target="_blank">现在就去逛逛吧~</a></p>
                        </div>
                    </div>
                </li>
                <li class='user-info-center user-info-item'>
                    <div class='user-info-icon'>
                        <span class='icon icon-center-circle'></span>
                    </div>
                    <div class='activity-content'>
                        <h2 class='activity-title'>帮助中心</h2>
                        <div class='activity-details'>
                            <p>OPPO官网客服，为您提供最贴心的购物体验，解决您所有的购物疑问</p>
                            <p>
                                <a href='http://www.oppo.com/cn/service' target="_blank">您需要帮助吗？</a></p>
                        </div>
                    </div>
                </li>
                <li class='user-info-experience-store user-info-item'>
                    <div class='user-info-icon'>
                        <span class='icon icon-experience-store-circle'></span>
                    </div>
                    <div class='activity-content'>
                        <h2 class='activity-title'>体验店</h2>
                        <div class='activity-details'>
                            <p>最全的线下门店查询渠道，为您搜索最近的OPPO体验店，热情的接待，专业的服务</p>
                            <p>
                                <a href='http://www.oppo.com/cn/shops' target="_blank">OPPO体验店期待您的光临</a></p>
                        </div>
                    </div>
                </li>
                <li class='user-info-news user-info-item'>
                    <div class='user-info-icon'>
                        <span class='icon icon-news-circle'></span>
                    </div>
                    <div class='activity-content'>
                        <h2 class='activity-title'>OPPO品牌</h2>
                        <div class='activity-details'>
                            <p>最新最热的OPPO新闻，最快最全的市场动态，了解OPPO最新官方资讯</p>
                            <p>
                                <a href='http://www.oppo.com/cn/blogs' target="_blank">请关注OPPO新闻板块</a></p>
                        </div>
                    </div>
                </li>
            </section>
        </div>
    </div>
</div>
</main>
