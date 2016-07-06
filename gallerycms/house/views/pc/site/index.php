<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'index', 'components/bxslider',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
?>

<div class="main-cont">
    <!-- sss -->
    <!--报名 轮播部分-->
    <div class="banner padTop20 clearfix">
        <!--立即预约表单-->
        <div class="appointment-form fn-left">
            <div class="title-tab clearfix">
                <a class="on" href="javascript:;">免费验房</a>
                <a href="javascript:;">免费设计报价</a>
                <a href="javascript:;">免费监理</a></div>
            <div class="body">
                <div class="title-tip padBtm20">
                    <p class="show">验房专家上门验房，全面检测房屋质量</p>
                    <p>免费获取3份设计 选取最满意设计稿</p>
                    <p>权威监理上门严格验收，确保工程质量</p>
                </div>
                <div class="apply-form">
                    <input name="apply_type" type="hidden" value="1" />
                    <input name="name" type="text" placeholder="您的姓名" class="inputEl" />
                    <input name="phone" type="text" placeholder="手机号码" class="inputEl" />
                    <div class="select-group clearfix js-region-select-group">
                        <select class="js-province" name="province" id="province">
                            <option value="">省/市</option></select>
                        <select class="js-city" name="city" id="city">
                            <option value="">市/地区</option></select>
                    </div>
                    <input name="applyBtn" type="button" value="我要预约" /></div>
                <p class="apply-tip">
                    <span>注：同一小区同批验房达到5户，可安排免费上门验房服务。</span>
                    <span class="hide">注：每户业主可同时获取3份设计比较，挑选最适合方案后个性化修改。</span>
                    <span class="hide">注：需在装修开工前预约资深监理师傅，提前安排验房时间。</span></p>
            </div>
        </div>
        <!--轮播-->
        <div class="carousel fn-left" id="tbanner">
            <!--轮播图片-->
            <div class="center-bar">
                <ul class="bxslider">
                    <li>
                        <a href="http://www.tugou.com/topic/kaopu/" target="_blank">
                            <img src="http://img.tugou.com/index/banner1.jpg" alt="一分钟找到靠谱装修公司"></a>
                    </li>
                    <li>
                        <a href="http://tuan.tugou.com/baoming/beijing/jiancai.html?tgsy" target="_blank">
                            <img src="http://img.tugou.com/index/lunbo_beijing.jpg" alt="建材团购"></a>
                    </li>
                    <li>
                        <a href="http://www.tugou.com/topic/kpzx2/" target="_blank">
                            <img src="http://img.tugou.com/index/banner_kpzx2.jpg" alt="靠谱装修季"></a>
                    </li>
                    <li>
                        <a href="http://www.tugou.com/topic/jy/30/?lunbo" target="_blank">
                            <img src="http://img.tugou.com/index/banner_al.jpg" alt="装修经验"></a>
                    </li>
                    <!-- <li>
                    <a href="http://www.tugou.com/topic/realcase/" target="_blank"><img src="http://img.tugou.com/index/banner_case_01.jpg" alt="实景作品"></a></li> -->
                    <!-- <li><a href="http://www.tugou.com/free/sheji/" target="_blank"><img src="http://img.tugou.com/index/banner2.jpg" alt="三套方案pk"></a></li> -->
                    <!-- <li>
                    <a href="http://www.tugou.com/free/guanjia/" target="_blank"><img src="http://img.tugou.com/index/banner3.jpg" alt="装修管家"></a></li> -->
                </ul>
                <span class="bx-prev"></span>
                <span class="bx-next"></span>
            </div>
        </div>
        <!--免费上门验房、免费设计、免费报价-->
        <div class="advert">
            <a class="item" href="http://www.tugou.com/free/yanfang/?test=1" target="_blank">
                <p class="padTop25">免费上门验房</p>
                <p class="padTop10">资深验房专家上门验房
                    <br />专业仪器检测房屋质量</p></a>
            <a class="item " href="http://www.tugou.com/free/sheji/" target="_blank">
                <p class="padTop25">免费3套设计方案</p>
                <p class="padTop10">3套设计方案比较
                    <br />合理规范空间</p></a>
            <a class="item last" href="http://www.tugou.com/free/price/" target="_blank">
                <p class="padTop25">在线报价器</p>
                <p class="padTop10">一分钟解决预算难题
                    <br />装修省40%</p></a>
        </div>
    </div>
    <!--找装修公司 388主材包 一口价模块-->
    <div class="modal padTop20">
        <div class="clearfix">
            <a class="item company" href="/provider/" target="_blank">
                <p class="title">找装修公司</p>
                <p class="padTop150">
                    <span class="padSpan1">免费设计量房</span>
                    <br/>优质装修公司放心挑</p></a>
            <a class="item  manager" href="http://www.tugou.com/free/guanjia/" target="_blank">
                <p class="title">找装修管家</p>
                <p class="padTop150">
                    <span class="padSpan4">一对一专业指导</span>
                    <br/>量身定制装修解决方案</p></a>
            <a class="item last group" href="http://tuan.tugou.com/baoming/beijing/jiancai.html" target="_blank">
                <p class="title">团装修建材</p>
                <p class="padTop150">
                    <span class="padSpan3">劲省30%－50%</span>
                    <br/>精选建材家具 爆款抢购</p></a>
        </div>
    </div>
    <!--服务保障-->
    <div class="service line-bg">
        <h3>为什么选择兔狗家装</h3>
        <p>八大无忧保障，装修更放心！</p>
        <div class="items padTop35">
            <a class="item1" href="/provider/" target="_blank">精选优质
                <br/>装修公司</a>
            <a class="item2" href="http://www.tugou.com/free/sheji/" target="_blank">明星设计师
                <br/>量身定制</a>
            <a class="item3" href="http://hz.tugou.com/principal/" target="_blank">一线主材
                <br/>质量保证</a>
            <a class="item4" href="http://www.tugou.com/free/gongyi/" target="_blank">108道标准
                <br/>施工工艺</a>
            <a class="item5" href="http://hz.tugou.com/act/special/gongdi.html" target="_blank">手机实时
                <br/>直播工地</a>
            <a class="item6" href="http://www.tugou.com/free/jianli/" target="_blank">权威监理
                <br/>5大节点验收</a>
            <a class="item7" href="http://www.tugou.com/free/guanjia/" target="_blank">装修管家
                <br/>全程指导</a>
            <a class="item8 last">质保金
                <br/>先行赔付</a></div>
    </div>
    <!--实景作品-->
    <div class="scene line-bg">
        <h3>实景作品 所见即所得</h3>
        <p>精选成功案例，快来看看兔狗装出的家！</p>
        <div class="items padTop15">
            <a href="http://su.tugou.com/realcase/898.html" target="_blank">
                <img src="http://img.tugou.com/index/scene1.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>原品素心</p>
                        <p>三室两厅&nbsp;&nbsp;&nbsp;&nbsp;简约&nbsp;&nbsp;&nbsp;&nbsp;半包9万</p>
                    </div>
                </div>
            </a>
            <a href="http://wx.tugou.com/realcase/891.html" target="_blank">
                <img src="http://img.tugou.com/index/scene2.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>MUJI式自在</p>
                        <p>一室两厅&nbsp;&nbsp;&nbsp;&nbsp;日式&nbsp;&nbsp;&nbsp;&nbsp;全包5.7万</p>
                    </div>
                </div>
            </a>
            <a href="http://wx.tugou.com/realcase/885.html" target="_blank">
                <img src="http://img.tugou.com/index/scene3.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>以简蕴灵</p>
                        <p>两室两厅&nbsp;&nbsp;&nbsp;&nbsp;简约&nbsp;&nbsp;&nbsp;&nbsp;全包13.5万</p>
                    </div>
                </div>
            </a>
            <a class="last" href="http://wx.tugou.com/realcase/690.html" target="_blank">
                <img src="http://img.tugou.com/index/scene4.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>泛新芽</p>
                        <p>三室两厅&nbsp;&nbsp;&nbsp;&nbsp;美式&nbsp;&nbsp;&nbsp;&nbsp;全包15万</p>
                    </div>
                </div>
            </a>
            <a href="http://wx.tugou.com/realcase/640.html" target="_blank">
                <img src="http://img.tugou.com/index/scene6.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>栖居生活之上</p>
                        <p>三室两厅&nbsp;&nbsp;&nbsp;&nbsp;混搭&nbsp;&nbsp;&nbsp;&nbsp;半包7.3万</p>
                    </div>
                </div>
            </a>
            <a href="http://hz.tugou.com/realcase/507.html" target="_blank">
                <img src="http://img.tugou.com/index/scene8.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>金色年华</p>
                        <p>两室两厅&nbsp;&nbsp;&nbsp;&nbsp;欧式&nbsp;&nbsp;&nbsp;&nbsp;半包11万</p>
                    </div>
                </div>
            </a>
            <a href="http://wx.tugou.com/realcase/506.html" target="_blank">
                <img src="http://img.tugou.com/index/scene7.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>古典玲珑</p>
                        <p>一室两厅&nbsp;&nbsp;&nbsp;&nbsp;欧式&nbsp;&nbsp;&nbsp;&nbsp;半包6万</p>
                    </div>
                </div>
            </a>
            <a class="last" href="http://wx.tugou.com/realcase/453.html" target="_blank">
                <img src="http://img.tugou.com/index/scene5.jpg">
                <div class="recommend clearfix">
                    <div class="word fn-left">
                        <p>清新丽家</p>
                        <p>两室两厅&nbsp;&nbsp;&nbsp;&nbsp;简约&nbsp;&nbsp;&nbsp;&nbsp;半包13万</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--直播工地-->
    <div class="live-site line-bg">
        <h3>直播工地 装修全透明</h3>
        <p>实时掌控施工进展，在家就可以看工地！</p>
        <div class="items padTop35">
            <!--直播工地 杭州-->
            <a href="http://bj.tugou.com/site/319.html" target="_blank">
                <img src="http://pic.tugou.com/buildingdiary/1452678466_6187413.jpeg@278w_218h_1e_1c">
                <div class="node">竣工阶段</div>
                <div class="recommend">
                    <p>观景园-郭先生的家</p>
                    <p>89㎡ 全包5万</p>
                </div>
            </a>
            <a href="http://bj.tugou.com/site/320.html" target="_blank">
                <img src="http://pic.tugou.com/buildingdiary/1452678747_474268.jpeg@278w_218h_1e_1c">
                <div class="node">泥木阶段</div>
                <div class="recommend">
                    <p>左家庄东里-张经理的家</p>
                    <p>67㎡ 全包3万</p>
                </div>
            </a>
            <a href="http://bj.tugou.com/site/299.html" target="_blank">
                <img src="http://pic.tugou.com/buildingdiary/1452649890_736288.jpeg@278w_218h_1e_1c">
                <div class="node">水电阶段</div>
                <div class="recommend">
                    <p>北太平庄-马先生的家</p>
                    <p>90㎡ 半包4万</p>
                </div>
            </a>
            <a class="last" href="http://bj.tugou.com/site/287.html" target="_blank">
                <img src="http://pic.tugou.com/buildingdiary/1452512420_3522682.png@278w_218h_1e_1c">
                <div class="node">水电阶段</div>
                <div class="recommend">
                    <p>西坝河东里-沈先生的家</p>
                    <p>79㎡ 半包3万</p>
                </div>
            </a>
            <!--直播工地 无锡--></div>
    </div>
    <!--最新签约-->
    <div class="new-sign line-bg">
        <h3>最近签约 他们都选了兔狗</h3>
        <p>真实业主评价，你的装修你来决定！</p>
        <div class="cont clearfix padTop35">
            <div class="carousel fn-left">
                <div class="clearfix">
                    <p class="title fn-left">热门小区</p>
                    <div class="slider-btn fn-right" id="hotSliderbar">
                        <a class="slider-prev fn-left" href="javascript:;"></a>
                        <a class="slider-next fn-right" href="javascript:;"></a>
                    </div>
                </div>
                <div class="carousel-tbanner items padTop10" id="hotSlider">
                    <div class="carousel-box clearfix" id="hotimgBox">
                        <!--根据不同城市动态加载最热小区--></div>
                </div>
            </div>
            <div class="message fn-right">
                <div class="title">
                    <p>业主评价</p>
                    <a>
                    </a>
                </div>
                <div class="pingjiaScroll">
                    <div class="items signed_comment_list">
                        <div class="item clearfix">
                            <img src="http://img.tugou.com/images/tugou5/avatar/avatar1.jpg" class="fn-left">
                            <div class="word">
                                <p class="">
                                    <span class="name">刘女士</span>
                                    <span class="eval">好评</span>
                                    <span class="time fn-right">3分钟前</span></p>
                                <!-- <p class="ellipsis ">设计师非常负责，设计图也根据我提出的想法做出了回应。设计师非常负责，设计图也根据我提出的想法做出了回应。</p> -->
                                <p class="ellipsis ">设计师非常负责，设计图也根据我提出的想法做出了回应。设计师...</p></div>
                        </div>
                        <div class="item clearfix">
                            <img src="http://img.tugou.com/images/tugou5/avatar/avatar2.jpg" class="fn-left">
                            <div class="word">
                                <p class="">
                                    <span class="name">赵先生</span>
                                    <span class="eval">好评</span>
                                    <span class="time fn-right">1天前</span></p>
                                <!-- <p class="ellipsis ">
                                师傅手艺还是很不错的，监理过来验收的时候也说师傅手艺好。之前为了找装修公司看了很多网站，也接到了很多电话，找了几家装修公司都感觉鱼龙混杂很不靠谱，还好选了兔狗，小微推荐过来的公司经过接触，都觉得还挺靠谱。
                                </p> -->
                                <p class="ellipsis ">师傅手艺还是很不错的，监理过来验收的时候也说师傅手艺好。之前..</p></div>
                        </div>
                        <div class="item clearfix">
                            <img src="http://img.tugou.com/images/tugou5/avatar/avatar3.jpg" class="fn-left">
                            <div class="word">
                                <p class="">
                                    <span class="name">徐先生</span>
                                    <span class="eval">好评</span>
                                    <span class="time fn-right">2015-12-31</span></p>
                                <!-- <p class="ellipsis">
                                买了套二手房，价格也不便宜，装修预算本就不高，再加上旧房子还需要拆改，其实也挺麻烦的。兔狗家装根据我的实际情况派了3家公司过来，都在住的地方附近，而且报价都在可承受范围内，对比后选了其中一家，期间小微一直在操心，真的非常感谢！
                                </p> -->
                                <p class="ellipsis">买了套二手房，价格也不便宜，装修预算本就不高，再加上旧房子...</p></div>
                        </div>
                        <!-- 暂定删除王先生的评价 -->
                        <!-- <div class="item clearfix">
                        <img src="http://img.tugou.com/images/tugou5/avatar/avatar4.jpg" class="fn-left">
                        <div class="word">
                        <p class=""><span class="name">王先生</span><span class="eval">好评</span><span class="time fn-right">2015-11-23</span></p>
                        <p class="ellipsis">
                        选了兔狗的整装套餐，工期用了45天，每部分工程都能按时完成，这个确实很棒！之前朋友有装修过结果工期一直拖着还很担心，抱着试试的心理选了兔狗家装的这个套餐，工期、施工、材料都很满意，感谢！
                        </p>
                        </div>
                        </div> -->
                        <div class="item clearfix">
                            <img src="http://img.tugou.com/images/tugou5/avatar/avatar5.jpg" class="fn-left">
                            <div class="word">
                                <p class="">
                                    <span class="name">刘先生</span>
                                    <span class="eval">好评</span>
                                    <span class="time fn-right">2015-10-2</span></p>
                                <!-- <p class="ellipsis">因为每天都要上班，其实没有太多精力去做装修，但是毕竟是住的地方也不能草率。兔狗家装的小微很棒，从报名开始到工程结束一直在跟进，还给我推送了很多装修知识，真的是省了很多心。</p> -->
                                <p class="ellipsis">因为每天都要上班，其实没有太多精力去做装修，但是毕竟是住...</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--装修效果图-->
    <div class="redecorate-img line-bg">
        <h3>装修效果图</h3>
        <p>看海量装修美图，为新家找灵感！</p>
        <div class="items padTop15">
            <a href="http://meitu.tugou.com/s1217.html" target="_blank">
                <img src="http://img.tugou.com/index/redecorate-img1.jpg">
                <div class="transparent-mask">清新自然混搭两居</div></a>
            <a href="http://meitu.tugou.com/d17520.html" target="_blank">
                <img src="http://img.tugou.com/index/redecorate-img2.jpg">
                <div class="transparent-mask">米色舒适现代客厅</div></a>
            <a class="last" href="http://meitu.tugou.com/d807.html" target="_blank">
                <img src="http://img.tugou.com/index/redecorate-img3.jpg">
                <div class="transparent-mask">现代美式时尚餐厅</div></a>
            <a href="http://meitu.tugou.com/s1218.html" target="_blank">
                <img src="http://img.tugou.com/index/redecorate-img4.jpg">
                <div class="transparent-mask">两室两厅轻美式生活</div></a>
            <a href="http://meitu.tugou.com/s1216.html" target="_blank">
                <img src="http://img.tugou.com/index/redecorate-img5.jpg">
                <div class="transparent-mask">现代时尚简约四居</div></a>
            <a class="last" href="http://meitu.tugou.com/d12649.html" target="_blank">
                <img src="http://img.tugou.com/index/redecorate-img6.jpg">
                <div class="transparent-mask">华美欧式卧室设计</div></a>
        </div>
    </div>
    <!--装修经验-->
    <div class="jy line-bg">
        <h3>装修经验</h3>
        <p>学习实用装修经验，避免装修猫腻！</p>
        <div class="items padTop35">
            <div>
                <a href="http://www.tugou.com/topic/jy/16/" target="_blank">
                    <img src="http://img.tugou.com/index/jy-img1.jpg"></a>
                <div class="recommend">
                    <a href="http://www.tugou.com/jy/19625.html" target="_blank">
                        <i class="dot">●</i>那些你一定要知道的验房标准程序</a>
                    <a href="http://www.tugou.com/jy/3262.html" target="_blank">
                        <i class="dot">●</i>实用二手房验收重点总结</a>
                    <a href="http://www.tugou.com/jy/4102.html" target="_blank">
                        <i class="dot">●</i>验房收房时有哪些相关的文件？</a></div>
            </div>
            <div>
                <a href="http://www.tugou.com/topic/jy/12/" target="_blank">
                    <img src="http://img.tugou.com/index/jy-img2.jpg"></a>
                <div class="recommend">
                    <a href="http://www.tugou.com/jy/19311.html" target="_blank">
                        <i class="dot">●</i>一分钟学会瓷砖选购小技巧</a>
                    <a href="http://www.tugou.com/jy/19407.html" target="_blank">
                        <i class="dot">●</i>遵循5个原则让铺贴瓷砖浪费远离你</a>
                    <a href="http://www.tugou.com/jy/451.html" target="_blank">
                        <i class="dot">●</i>一分钱教你清洁全屋瓷砖</a></div>
            </div>
            <div>
                <a href="http://www.tugou.com/topic/jy/10/" target="_blank">
                    <img src="http://img.tugou.com/index/jy-img3.jpg"></a>
                <div class="recommend">
                    <a href="http://www.tugou.com/jy/635.html" target="_blank">
                        <i class="dot">●</i>油漆到底应该怎么选？</a>
                    <a href="http://www.tugou.com/jy/3317.html" target="_blank">
                        <i class="dot">●</i>涂料选购中的常见五大骗局</a>
                    <a href="http://www.tugou.com/jy/4136.html" target="_blank">
                        <i class="dot">●</i>去除油漆味八大技巧</a></div>
            </div>
            <div class="last">
                <a href="http://www.tugou.com/topic/jy/9/" target="_blank">
                    <img src="http://img.tugou.com/index/jy-img4.jpg"></a>
                <div class="recommend">
                    <a href="http://www.tugou.com/jy/19152.html" target="_blank">
                        <i class="dot">●</i>装饰木材如何买？</a>
                    <a href="http://www.tugou.com/jy/3889.html" target="_blank">
                        <i class="dot">●</i>木工装修注意事项，你知道吗？</a>
                    <a href="http://www.tugou.com/jy/537.html" target="_blank">
                        <i class="dot">●</i>木门保养四大招</a></div>
            </div>
        </div>
    </div>
    <!--PK-->
    <div class="line-bg PK">
        <h3>兔狗家装PK传统装修</h3>
        <!--<p>找出我最喜欢的实景作品</p>-->
        <table class="cont marTop35">
            <thead>
                <tr>
                    <th>兔狗家装</th>
                    <th class="m-column">PK</th>
                    <th class="last">传统装修</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td class="first">
                        <div>
                            <p>优质装修公司，绝对靠谱
                                <br>网站资质审核，质保金先行赔付</p></div>
                    </td>
                    <td class="middle">资 质</td>
                    <td class="last">
                        <div>
                            <p>不正规，来路不明游击队
                                <br>投诉无门，损失自己承担</p></div>
                    </td>
                </tr>
                <tr>
                    <td class="first">
                        <div>
                            <p>3份报价比较，装修管家审核
                                <br>预算准确，价格透明
                                <br>杜绝恶意偷项漏项，后期增项不超过10%</p></div>
                    </td>
                    <td class="middle">价 格</td>
                    <td class="last">
                        <div>
                            <p>报价随意，无参考比较
                                <br>预算有水分，价格有猫腻
                                <br>低价诱惑签约，增项、漏项泛滥</p></div>
                    </td>
                </tr>
                <tr>
                    <td class="first">
                        <div>
                            <p>明星设计师一对一量身设计
                                <br>三套设计方案可选
                                <br>设计稿不满意，免费修改到满意为止</p></div>
                    </td>
                    <td class="middle">设 计</td>
                    <td class="last">
                        <div>
                            <p>设计师水平参差不齐
                                <br>设计方案单一
                                <br>修改设计稿要加钱</p></div>
                    </td>
                </tr>
                <tr>
                    <td class="first">
                        <div>
                            <p>工厂直供，正品保证，假一罚十
                                <br>价格透明，无中间环节
                                <br>安全配送，免费安装</p></div>
                    </td>
                    <td class="middle">材 料</td>
                    <td class="last">
                        <div>
                            <p>鱼龙混杂，以次充好
                                <br>层层回扣，价格不明
                                <br>配送安装另收费</p></div>
                    </td>
                </tr>
                <tr>
                    <td class="first">
                        <div>
                            <p>108道标准施工工艺
                                <br>手机直播工地，装修进度全程掌握
                                <br>权威监理5次上门严格验收</p></div>
                    </td>
                    <td class="middle">施 工</td>
                    <td class="last">
                        <div>
                            <p>无统一标准，工地不规范
                                <br>请假守工地，工期无保障
                                <br>无第三方质量监督</p></div>
                    </td>
                </tr>
                <tr>
                    <td class="first">
                        <div>
                            <p>线上线下全程监督，强大平台保障
                                <br>装修管家全程一对一指导，省心省力
                                <br>延长工程质保期，售后及时处理</p></div>
                    </td>
                    <td class="middle">服 务</td>
                    <td class="last">
                        <div>
                            <p>无监督，无保障
                                <br>过程繁杂，劳神劳力，无人问津
                                <br>无售后，逾期问题无法解决</p></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--服务流程-->
    <div class="flow line-bg marBtm85">
        <h3>服务流程</h3>
        <!--<p>找出我最喜欢的实景作品，把家装成别人羡慕的样子</p>-->
        <div class="items padTop35">
            <a>
                <div class="border item1">
                    <i>
                    </i>
                </div>
                <p>填写信息
                    <br/>发布装修需求</p></a>
            <a>
                <div class="border item2">
                    <i>
                    </i>
                </div>
                <p>设计师上门量房
                    <br/>出3套装修方案</p></a>
            <a>
                <div class="border item3">
                    <i>
                    </i>
                </div>
                <p>对比3套方案
                    <br/>选择到满意为止</p></a>
            <a>
                <div class="border item4">
                    <i>
                    </i>
                </div>
                <p>签订正式装修合同
                    <br/>&nbsp;</p></a>
            <a>
                <div class="border item5">
                    <i>
                    </i>
                </div>
                <p>确定开工时间
                    <br/>开始施工</p></a>
            <a>
                <div class="border item6">
                    <i>
                    </i>
                </div>
                <p>第三方监理上门验收
                    <br/>保障施工</p></a>
            <a class="last">
                <div class="border item7"></div>
                <p>竣工验收
                    <br/>给出服务评价</p></a>
        </div>
    </div>
</div>
<!--首页底部浮动报名条-->
<?php echo $this->render('../common/_signup', []); ?>
