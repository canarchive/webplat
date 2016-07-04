<?php
$cssFiles = ['list'];
$jsFiles = [
	'ismobile', 
];
?>
<?php echo $this->render('@gallerycms/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>

<?php echo $this->render('_list_nav'); ?>
<div class="overall">
    <div class="left">
        <div class="scrap">
		    <h1><?= $info['name']; ?></h1>
            <div class="spread">
                <span class="writor">
					发布时间：<?= date('Y-m-d', $info['updated_at']); ?>
                </span>
                <span class="writor">
					编辑：<?= $info['editor']; ?>
                </span>
                <span class="writor">
                    标签：
                </span>
                <span class="writor">
                    热度：
                    <script src="/jiehun/plus/count.php?view=yes&aid=145013&mid=42" type='text/javascript'
                    language="javascript">
                    </script>
                </span>
            </div>
        </div>
        <!--百度分享-->
        <script src='/jiehun/goto/my-65542.js' language='javascript'></script>
        <div class="takeaway">
            <span class="btn arr-left">
            </span>
            <p class="jjxq">
                44岁拉丁歌手瑞奇马丁16日在巴西出席活动，与新男友加万-约瑟夫十指紧扣公开恋情。他也在社交网站贴出合照，并承认恋情。
            </p>
            <span class="btn arr-right">
            </span>
        </div>
        <script src='/jiehun/goto/my-65541.js' language='javascript'>
        </script>
		<div class="substance"><?= $info['content']; ?></div>
        <!--分页上部主题链接-->
        <script src='/jiehun/goto/my-65538.js' language='javascript'>
        </script>
        <div class="x_page">
            <div id="145013" class="content-page 145013"></div>
        </div>
        <!--分页下部标签云-->
        <script src='/jiehun/goto/my-65539.js' language='javascript'></script>
        <div class="biaoqian"></div>
        <!--相关阅读 -->
        <div class="xgread">
            <div class="til">
                <h4>相关阅读</h4>
            </div>
            <div class="lef">
                <!--相关阅读主题链接-->
                <script src='/jiehun/goto/my-65540.js' language='javascript'></script>
            </div>
            <div class="rig">
                <ul>
                    <li>
                        <a href='/jiehun/oumeimingxing/20160418145013.html' target="_blank">
                            瑞奇马丁现任男友Jwan Yosef 走红毯正式公开恋情
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--频道推荐-->
        <div class="hotsnew">
            <div class="til">
                <h4>
                    频道推荐
                </h4>
            </div>
            <ul>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160418145014.html' target="_blank">
                            <img src="/jiehun/uploads/160418/52-16041P923253I.jpg" alt="贝嫂维多利亚42岁生日 老"
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160418145014.html'>
                            贝嫂维多利亚42岁生日 老
                        </a>
                    </p>
                </li>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160414144938.html' target="_blank">
                            <img src="/jiehun/uploads/160414/39-160414095Q94J.jpg" alt="科比NBA生涯简介 10大最疯"
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160414144938.html'>
                            科比NBA生涯简介 10大最疯
                        </a>
                    </p>
                </li>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160413144902.html' target="_blank">
                            <img src="/jiehun/uploads/160413/42-1604131116255a.jpg" alt="伊莎贝尔·阿佳妮个人资料"
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160413144902.html'>
                            伊莎贝尔·阿佳妮个人资料
                        </a>
                    </p>
                </li>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160412144849.html' target="_blank">
                            <img src="/jiehun/uploads/160412/42-160412104U0949.jpg" alt="黑眼豆豆成员将回归重组 "
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160412144849.html'>
                            黑眼豆豆成员将回归重组
                        </a>
                    </p>
                </li>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160411144789.html' target="_blank">
                            <img src="/jiehun/uploads/160411/52-160411095540T4.jpg" alt="童星Jake被无限期关押精神"
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160411144789.html'>
                            童星Jake被无限期关押精神
                        </a>
                    </p>
                </li>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160408144776.html' target="_blank">
                            <img src="/jiehun/uploads/allimg/160408/41-16040QJ0340-L.jpg" alt="艾滋男星查理辛买凶杀妻 "
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160408144776.html'>
                            艾滋男星查理辛买凶杀妻
                        </a>
                    </p>
                </li>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160408144722.html' target="_blank">
                            <img src="/jiehun/uploads/160408/42-16040P93602K1.jpg" alt="安妮·海瑟薇当妈 3月24日"
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160408144722.html'>
                            安妮·海瑟薇当妈 3月24日
                        </a>
                    </p>
                </li>
                <li>
                    <div class="tu">
                        <a href='/jiehun/oumeimingxing/20160405144585.html' target="_blank">
                            <img src="/jiehun/uploads/allimg/160405/41-1604051404280-L.jpg" alt="G罩杯嫩模寇特妮个人资料 "
                            />
                        </a>
                    </div>
                    <p>
                        <a href='/jiehun/oumeimingxing/20160405144585.html'>
                            G罩杯嫩模寇特妮个人资料
                        </a>
                    </p>
                </li>
            </ul>
        </div>
        <div class="hotsnew">
            <div class="til">
                <h4>相关知识</h4>
            </div>
            <div class="slidetg"></div>
        </div>
    </div>
    <div class="right">
        <!--右侧各种广告-->
<script src='<?= Yii::getAlias('@asseturl'); ?>/gallerycms/default/js/my-65545.js' language='javascript'></script>
        <!--右侧跟随广告-->
        <div class="rcross">
            <div class="div1" id="float">
                <script src='/jiehun/goto/my-65546.js' language='javascript'></script>
            </div>
        </div>
    </div>
</div>
<?php echo $this->render('@gallerycms/views/default/common/_footer'); ?>
