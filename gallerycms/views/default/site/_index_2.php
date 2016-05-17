<?php
use yii\helpers\Url;
?>
<!-- 美容开始-->
<div class=webwidth>
    <div class=beautop>
        <div class="tha-icon">
            <b></b>
        </div>
        <div class="colist">
            <?php foreach ($this->params['categoryInfos'] as $info) { if ($info['parent_id'] == 1) { ?>
			<a href="<?= Url::to(['/site/list', 'code' => $info['catdir']]); ?>" target="_blank">
                <?= $info['name']; ?>
            </a>
            <i>|</i>
            <?php } } ?>
        </div>
    </div>
    <div class=webnrqg>
        <div class=zuo>
            <div class=qgmid4>

        <?php $infos[] = [
            'id' => 2, 'name' => '韩式花苞头发型扎法 独特花', 'thumb' => 'http://www.wed114.cn/jiehun/uploads/allimg/160413/52-1604132105430-L.jpg'
        ];
        ?>
        <?php for ($i = 0; $i < 8; $i++) { foreach ($infos as $info) { ?>
        <dl class="dlbox2">
            <dd>
                <div class="sgimg2">
				    <a href="<?= Url::to(['/site/show', 'id' => $info['id']]); ?>" target=_blank>
					    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>" />
                    </a>
                    <p class="iatit2">
                        <em class="left-arr"></em>
						<a href="<?= Url::to(['/site/show', 'id' => $info['id']]); ?>" class="txt" target=_blank><?= $info['name']; ?></a>
                        <em class="right-arr"></em>
                        <b class="bg"></b>
                    </p>
                </div>
            </dd>
        </dl>
        <?php } } ?>

                <dl class="dlbox2">
                    <dd>
                        <div class="sgimg2">
                            <a href="/jiehun/maozao/20160412144876.html" target=_blank>
                                <img src="/jiehun/uploads/allimg/160412/42-1604121G6330-L.jpg" alt="头发干枯毛躁怎么办 搞清头"
                                />
                            </a>
                            <p class="iatit2">
                                <em class="left-arr">
                                </em>
                                <a href="/jiehun/maozao/20160412144876.html" class="txt" target=_blank>
                                    头发干枯毛躁怎么办 搞清头
                                </a>
                                <em class="right-arr">
                                </em>
                                <b class="bg">
                                </b>
                            </p>
                        </div>
                    </dd>
                </dl>
                <dl class="dlbox2">
                    <dd>
                        <div class="sgimg2">
                            <a href="/jiehun/hanshixieliuhai/20160412144875.html" target=_blank>
                                <img src="/jiehun/uploads/allimg/160412/52-1604121FT90-L.jpg" alt="中长发加斜刘海怎么扎发 韩"
                                />
                            </a>
                            <p class="iatit2">
                                <em class="left-arr">
                                </em>
                                <a href="/jiehun/hanshixieliuhai/20160412144875.html" class="txt" target=_blank>
                                    中长发加斜刘海怎么扎发 韩
                                </a>
                                <em class="right-arr">
                                </em>
                                <b class="bg">
                                </b>
                            </p>
                        </div>
                    </dd>
                </dl>
                <dl class="dlbox2">
                    <dd>
                        <div class="sgimg2">
                            <a href="/jiehun/qiliuhaijuanfafaxing/20160412144874.html" target=_blank>
                                <img src="/jiehun/uploads/160412/42-1604121F243453.jpg" alt="齐刘海短卷发发型 瞬间提升"
                                />
                            </a>
                            <p class="iatit2">
                                <em class="left-arr">
                                </em>
                                <a href="/jiehun/qiliuhaijuanfafaxing/20160412144874.html" class="txt"
                                target=_blank>
                                    齐刘海短卷发发型 瞬间提升
                                </a>
                                <em class="right-arr">
                                </em>
                                <b class="bg">
                                </b>
                            </p>
                        </div>
                    </dd>
                </dl>
                <dl class="dlbox2">
                    <dd>
                        <div class="sgimg2">
                            <a href="/jiehun/qiliuhaijuanfafaxing/20160412144872.html" target=_blank>
                                <img src="/jiehun/uploads/160412/42-1604121A342117.jpg" alt="齐刘海长卷发发型图片 甜美"
                                />
                            </a>
                            <p class="iatit2">
                                <em class="left-arr">
                                </em>
                                <a href="/jiehun/qiliuhaijuanfafaxing/20160412144872.html" class="txt"
                                target=_blank>
                                    齐刘海长卷发发型图片 甜美
                                </a>
                                <em class="right-arr">
                                </em>
                                <b class="bg">
                                </b>
                            </p>
                        </div>
                    </dd>
                </dl>
                <dl class="dlbox2">
                    <dd>
                        <div class="sgimg2">
                            <a href="/jiehun/hanshiliuhai/20160412144877.html" target=_blank>
                                <img src="/jiehun/uploads/allimg/160412/52-1604121H6440-L.jpg" alt="斜刘海韩式编发发型步骤 修"
                                />
                            </a>
                            <p class="iatit2">
                                <em class="left-arr">
                                </em>
                                <a href="/jiehun/hanshiliuhai/20160412144877.html" class="txt" target=_blank>
                                    斜刘海韩式编发发型步骤 修
                                </a>
                                <em class="right-arr">
                                </em>
                                <b class="bg">
                                </b>
                            </p>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
        <!-- 第三部分 美容左end-->
        <div class=you>
            <li>
                <a href="/jiehun/xieliuhaifaxingtupian/20131203114437.html" target="_blank">
                    大脸女生斜刘海发型图片设计 让你瞬间拥有迷人小脸
                </a>
            </li>
            <li>
                <a href="/jiehun/huabaotoudezhafatujie/20160411144828.html" target="_blank">
                    韩式蓬松花苞头图解 轻松变成时尚达人
                </a>
            </li>
            <li>
                <a href="/jiehun/youzhifenmiwangsheng/20160411144826.html" target="_blank">
                    油性皮肤怎么改善 六大方法要注意
                </a>
            </li>
            <li>
                <a href="/jiehun/wanzitoudezhafatujie/20160411144825.html" target="_blank">
                    欧美丸子头的扎法图解 随意打造出活泼时尚范儿
                </a>
            </li>
            <li>
                <a href="/jiehun/hufa/20160411144811.html" target="_blank">
                    头发如何吹出光泽 自己动手吹出健康光泽秀发
                </a>
            </li>
            <li>
                <a href="/jiehun/changfanglianshihefaxing/20160411144806.html" target="_blank">
                    锥子脸适合什么发型 看女神陈紫函示范美美发型
                </a>
            </li>
            <li>
                <a href="/jiehun/faxing/20160411144803.html" target="_blank">
                    内扣发型怎么剪好看 内扣发型瘦脸为美丽加分
                </a>
            </li>
            <li>
                <a href="/jiehun/hanshifaxingzhafabuzhou/20160410144781.html" target="_blank">
                    半扎公主头怎么扎好看 半扎头发的方法图解
                </a>
            </li>
        </div>
        <!-- 第三部分 美容右end-->
    </div>
</div>
<!-- 美容结束-->
