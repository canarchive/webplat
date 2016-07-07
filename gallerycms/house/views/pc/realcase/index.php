<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
	'provider/pd-channel',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'【装修案例】装修实景案例大全|兔狗家装';
//'装修案例 , 装修实景案例大全 , 兔狗家装';
//'装修案例大全由兔狗家装提供，装修实景案例效果图中每一个装修案例都是装修公司的良心作品。装修选择兔狗家装，就是选择更多优质装修公司!';
?>
<div class="banner">
	<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/case_banner.jpg">
</div>
<div class="pd-main">
    <div class="pd-main-body pd-channel">
        <div class="crumbs"></div>
        <!-- 实景案例 -->
        <div class="pd-realcase active">
            <div class="pd-rc-case">
                <div class="pd-showcase">
                    <!-- 频道页 新的case-item -->
                    <a href="http://bj.tugou.com/realcase/1393.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1466763930_2447433.jpeg@177h_299w_1e_1c" alt="别墅 美式 半包30"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">嘉林花园</p>
                                    <p class="ch-case-info">
                                        <span role="construction">别墅</span>
                                        <span role="style">美式</span>
                                        <span role="detail">半包30万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">314</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://hz.tugou.com/realcase/1371.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1466506575_4952851.jpeg@177h_299w_1e_1c" alt="四室两厅 欧式 半包12"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">权杖情结</p>
                                    <p class="ch-case-info">
                                        <span role="construction">四室两厅</span>
                                        <span role="style">欧式</span>
                                        <span role="detail">半包12万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">336</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://hz.tugou.com/realcase/1194.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1464072949_7109308.jpeg@177h_299w_1e_1c" alt="四室两厅 美式 半包10.8"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">春之歌</p>
                                    <p class="ch-case-info">
                                        <span role="construction">四室两厅</span>
                                        <span role="style">美式</span>
                                        <span role="detail">半包10.8万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">1677</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://sh.tugou.com/realcase/1081.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1463196280_6637144.jpeg@177h_299w_1e_1c" alt="别墅 美式 半包20"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">明媚之于家</p>
                                    <p class="ch-case-info">
                                        <span role="construction">别墅</span>
                                        <span role="style">美式</span>
                                        <span role="detail">半包20万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">474</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://hz.tugou.com/realcase/1080.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1463135825_5029345.jpeg@177h_299w_1e_1c" alt="三室两厅 美式 全包24"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">一见倾心</p>
                                    <p class="ch-case-info">
                                        <span role="construction">三室两厅</span>
                                        <span role="style">美式</span>
                                        <span role="detail">全包24万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">750</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://sh.tugou.com/realcase/1030.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1461910460_5941345.jpeg@177h_299w_1e_1c" alt="两室两厅 简约 全包23"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">精灵跃动</p>
                                    <p class="ch-case-info">
                                        <span role="construction">两室两厅</span>
                                        <span role="style">简约</span>
                                        <span role="detail">全包23万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">1028</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://sh.tugou.com/realcase/1028.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1461902831_5945962.jpeg@177h_299w_1e_1c" alt="四室两厅 混搭 全包64"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">畅想多瑙河</p>
                                    <p class="ch-case-info">
                                        <span role="construction">四室两厅</span>
                                        <span role="style">混搭</span>
                                        <span role="detail">全包64万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">1597</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://sh.tugou.com/realcase/1014.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1461832693_3531449.jpeg@177h_299w_1e_1c" alt="别墅 美式 全包64"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">返璞归真</p>
                                    <p class="ch-case-info">
                                        <span role="construction">别墅</span>
                                        <span role="style">美式</span>
                                        <span role="detail">全包64万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">328</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://sh.tugou.com/realcase/1012.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1461832196_1068508.jpeg@177h_299w_1e_1c" alt="两室两厅 简约 全包17"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">云净天清</p>
                                    <p class="ch-case-info">
                                        <span role="construction">两室两厅</span>
                                        <span role="style">简约</span>
                                        <span role="detail">全包17万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">839</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://sh.tugou.com/realcase/1011.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1461831929_1304617.jpeg@177h_299w_1e_1c" alt="两室两厅 美式 全包16"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">暖心天堂</p>
                                    <p class="ch-case-info">
                                        <span role="construction">两室两厅</span>
                                        <span role="style">美式</span>
                                        <span role="detail">全包16万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">490</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://nb.tugou.com/realcase/970.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1461547021_6553291.jpeg@177h_299w_1e_1c" alt="别墅 混搭 全包19"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">暖阳展颜</p>
                                    <p class="ch-case-info">
                                        <span role="construction">别墅</span>
                                        <span role="style">混搭</span>
                                        <span role="detail">全包19万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">951</p></div>
                            </div>
                        </div>
                    </a>
                    <!-- 频道页 新的case-item -->
                    <a href="http://nj.tugou.com/realcase/943.html" target="_blank">
                        <div class="case-item">
                            <div>
                                <img class="case-img" src="http://pic.tugou.com/realcase/1461123771_3269938.jpeg@177h_299w_1e_1c" alt="三室一厅 简约 半包6"></div>
                            <div class="ch-case-footer">
                                <div class="ch-left">
                                    <p class="ch-case-title">微生活</p>
                                    <p class="ch-case-info">
                                        <span role="construction">三室一厅</span>
                                        <span role="style">简约</span>
                                        <span role="detail">半包6万</span></p>
                                </div>
                                <div class="ch-right">
                                    <span class="ch-icon-foot"></span>
                                    <p class="ch-dat-fork">3389</p></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- -->
                <div class="page">
                    <p>
                        <!-- -->
                        <!-- -->
                        <!-- -->
                        <!---->
                        <!-- -->
                        <a class="btnpage on">1</a>
                        <!-- -->
                        <!---->
                        <!-- -->
                        <a class="btnpage" href="/realcase/p_2/">2</a>
                        <!-- -->
                        <!---->
                        <!-- -->
                        <a class="btnpage" href="/realcase/p_3/">3</a>
                        <!-- -->
                        <!---->
                        <!-- -->
                        <a class="btnpage" href="/realcase/p_4/">4</a>
                        <!-- -->
                        <!---->
                        <!-- -->
                        <a class="btnpage" href="/realcase/p_5/">5</a>
                        <!-- -->
                        <!---->
                        <!-- -->
                        <!--<em>···</em>-->
                        <!-- -->
                        <a href="/realcase/p_2/">下一页</a>
                        <!-- -->
                        <!-- -->
                        <a href="/realcase/p_11/">末页</a>
                        <!-- --></p>
                </div>
				<!-- -->
            </div>
        </div>
        <div id="pd-fault-footer"></div>
    </div>
</div>
<?php echo $this->render('../common/_pop_mask', []); ?>
<?php echo $this->render('../common/_signup', []); ?>
