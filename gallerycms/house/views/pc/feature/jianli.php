<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'service/measure', 'pages/index', 'layouts/page_header', 'layouts/page_footer', 'dpl', 
	'common', 'lib/footer',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['currentNav'] = $view;
$this->params['communityCode'] = isset($communityInfo['code']) ? $communityInfo['code'] : '';
?>
<?php echo $this->render('_nav', []); ?>
<div class="content" id="biaodan">
    <div class="content3" id="content3">
        <div id="bg3">
            <div class="position">
                <img src="http://pic.tugou.com/service/bg31.jpg">
                <img src="http://pic.tugou.com/service/bg32.jpg">
                <img src="http://pic.tugou.com/service/bg33.jpg">
                <div class="arrow01"></div>
                <div class="float apply_form">
                    <div class="title">申请免费监理</div>
                    <div class="fbody">
                        <p>权威管理上门严格验收，确保工程质量</p>
                        <div class="apply_form">
                            <input name="apply_type" type="hidden" value="6" />
                            <input name="name" type="text" placeholder="您的姓名" />
                            <input name="phone" type="text" placeholder="手机号码" />
                            <div class="select-group clearfix js-region-select-group">
                                <select class="js-province" name="province" id="province">
                                    <option value="">省/市</option></select>
                                <select class="js-city" name="city" id="city">
                                    <option value="">市/地区</option></select>
                            </div>
                        </div>
                        <input name="apply" type="button" value="免费申请" />
                        <b>
                            <a>注：</a>
                            <span>需在装修开工前预约资深监理师傅，提前安排验房时间。</span></b>
                    </div>
                </div>
            </div>
        </div>
        <div class="page31">
            <img src="http://pic.tugou.com/service/jg-md.jpg" class="img">
            <ul class="jgmd">
                <li id="jgmd-first">
                    <img src="http://pic.tugou.com/service/jg1.jpg"></li>
                <li>
                    <img src="http://pic.tugou.com/service/jg2.jpg"></li>
                <li>
                    <img src="http://pic.tugou.com/service/jg3.jpg"></li>
                <li>
                    <img src="http://pic.tugou.com/service/jg4.jpg"></li>
                <li>
                    <img src="http://pic.tugou.com/service/jg5.jpg"></li>
            </ul>
            <div class="vise">
                <img src="http://pic.tugou.com/service/jgm.jpg" class="mg">
                <ul class="jgm">
                    <li id="jgm-first">
                        <p>资深家装监理师傅</p>
                        <span>全程把关装修质量</span></li>
                    <li>
                        <p>严格验收关键节点</p>
                        <span>全面发现装修问题</span></li>
                    <li>
                        <p>详细记录验收表单</p>
                        <span>及时落实装修整改</span></li>
                    <li>
                        <p>施工效果拍照留底</p>
                        <span>有力保障装修权益</span></li>
                </ul>
            </div>
            <div class="viseone">
                <img src="http://pic.tugou.com/service/jg-d.jpg" class="mgd">
                <a class="a1">水电验收</a>
                <h2>居家装修，水电这类看不见的隐蔽工程是关键，如果隐蔽工程没有做好，表面装修的再漂亮，也是徒劳。</h2>
                <h3>隐蔽工程的验收主要是为了您之后生活中的使用方便和安全，其质量优劣对日后入住影响非常大，不仅施工要标准，更要把好验收这道关</h3>
                <i class="i1"></i>
                <div class="page32">
                    <div class="imgl">
                        <div class="img_up"></div>
                        <div class="img_down"></div>
                    </div>
                    <div class="imgr"></div>
                </div>
                <div class="page33">
                    <p>【我跟监理有话说】-水电验收</p>
                    <ul class="oul">
                        <li id="oul-first">
                            <span>NO.1</span>
                            <div class="li1_up">
                                <b>张师傅，水管是走顶还是走地好呢？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>各有利弊哈！一般建议走顶，安全性高，后期维修方便，但造价高，用料多；不过楼层不高的话也要根据实际情况选择，加上工人施工规范，后续问题还是很少的</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.2</span>
                            <div class="li1_up">
                                <b>薛师傅，各个装修公司的工地都去看了，怎么各家水管电线布置都不一样呢？正确的布线是怎么样的？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>水管的走向一般与墙体平行，而且应该避开电线管，漏水时触到电路，会引起危险的。铺设水路时，水管之间必须用接线相连，一般弯头都程90度。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.3</span>
                            <div class="li1_up">
                                <b>强弱电箱能否放在一起</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>不能完全放一起，强弱电磁场会相互干扰，正规做法要隔开60cm以上。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                    </ul>
                </div>
                <a class="a2">泥工验收</a>
                <h4>装修中，泥瓦和木工也是考验工人手艺的重要项目之一。</h4>
                <h5>木工制作工艺对整体的家装效果也有很大影响，瓷砖铺贴不合格会导致空鼓，平整度不够会影响美观和使用</h5>
                <h6>木工验收时，要仔细核对每个细节，把握好工程质量的第二道关口。</h6>
                <i>
                </i>
                <div class="page34">
                    <div class="imgl1">
                        <div class="img_up1"></div>
                        <div class="img_down1"></div>
                    </div>
                    <div class="imgr1"></div>
                </div>
                <div class="page33">
                    <p>【我跟监理有话说】-泥工验收</p>
                    <ul class="oul">
                        <li id="oul-first">
                            <span>NO.1</span>
                            <div class="li1_up">
                                <b>陈师傅，家里墙砖贴完了，怎么检验施工合格呢？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>墙砖验收先要看外观，看它的平整度，可以用手去摸感受，还可以用一元硬币滑磨法。然后要看内在，看是否有空鼓，可以用的小铁锤，听响声就知道空实。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.2</span>
                            <div class="li1_up">
                                <b>卫生间防水怎么检验呢？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>卫生间施工结束，将卫生间的所有下水堵住，在门口砌一道25厘米高的“砍”，然后在卫生间中灌入20厘米高的水。24小时后再检查四周墙面和地面有无渗漏现象。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.3</span>
                            <div class="li1_up">
                                <b>肖师傅，我听说过网格布，具体不知道用在什么地方的？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>网格布一般用在连接处，修补处，接缝的地方，起到加固，增大摩擦等作用。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                    </ul>
                </div>
                <a class="a3">油漆验收</a>
                <div class="fontsize">
                    <p>在室内装修时，除了墙面通常还会在相应的家具、门框等地方刷油漆以使这些家具美观并且保护其不受潮。</p>
                    <p>油漆验收主要验收标准是：油刷面的颜色一致，无别纹痕迹，不允许有脱皮、漏刷、反绣、泛白、透底、流坠、皱皮、裹棱及颜色不均等缺陷。</p>
                </div>
                <i>
                </i>
                <div class="page36">
                    <div class="imgl2"></div>
                    <div class="imgr2"></div>
                </div>
                <div class="page33">
                    <p>【我跟监理有话说】-油漆验收</p>
                    <ul class="oul">
                        <li id="oul-first">
                            <span>NO.1</span>
                            <div class="li1_up">
                                <b>清油和混油到底有什么不同</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>清油工艺是在木质纹路比较好的木材表面涂刷清漆，刷完仍可以清晰的看到木质纹路，很自然。混油工艺是在对木材表面进行必要的处理，像修补钉眼，打砂纸，刮腻子，然后在木材表面涂刷有颜色的不透明的油漆</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.2</span>
                            <div class="li1_up">
                                <b>徐师傅，家里就要刷乳胶漆啦？我该注意些什么呢？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>施工前把相邻木作、油漆、玻璃隔断，外墙玻璃幕框要保护遮挡好；施工中在涂料墙体没干前不要清刷地面，不然粉尘会粘上去。还有，注意同一房间的墙面用相同的材料，批号都要相同。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.3</span>
                            <div class="li1_up">
                                <b>建材商家都说，墙面装饰中硅藻泥是一种很好的环保材料，除了价高还有什么缺点呢？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>硅藻泥的话，大多数颜色很浅，不耐脏，也不防水，不能擦洗，潮湿地方不合适，会吸附分解空气重的灰尘，所以容易颜色变深，需要经常清理；凹凸不平，手感不佳；硬件不好，被碰撞后容易脱落。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                    </ul>
                </div>
                <a class="a3">竣工验收</a>
                <div class="fontsize">
                    <p>隐蔽工程、泥瓦、木工、油漆工程和杂项全部完成之后，需要进行最后一个节点-竣工验收</p>
                    <p>竣工验收主要检查橱柜、灯具面板、洁具、电器的安装是否合平规范，电路是否通电，以及对整个工程最后一次系统检查，以免有漏洞的问题。</p>
                    <p>通过竣工验收，为装修完美收官。</p>
                </div>
                <i>
                </i>
                <div class="page37">
                    <div class="imgl3"></div>
                    <div class="imgr3"></div>
                </div>
                <div class="page33">
                    <p>【我跟监理有话说】-竣工验收</p>
                    <ul class="oul">
                        <li id="oul-first">
                            <span>NO.1</span>
                            <div class="li1_up">
                                <b>整个硬装结束，电路方面我该怎么检验？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>主要检验一下电路是否是通电、电压是否是正常、开关操作是否灵活和插座安装位置是否正确，这个你放心，我会去陪同一起检验的。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.2</span>
                            <div class="li1_up">
                                <b>厨柜怎么检验合格？</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>关键看一下板材表面是否光滑、贴面是否平整牢固、有没有脱胶和起翘，推拉柜门和抽屉，看看是否灵活，还有看看配件是否齐全，螺丝是否牢固。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                        <li>
                            <span>NO.3</span>
                            <div class="li1_up">
                                <b>张师傅，房子装修完要通风多长的时间能够入住?</b>
                                <img src="http://pic.tugou.com/service/iconl.jpg" class="imgup1">
                                <img src="http://pic.tugou.com/service/peoplel.jpg" class="imgup2"></div>
                            <div class="li1_down">
                                <b>不能简单的看时间长短，如果室内装饰后空气达标，那么，就可以立即入住；装完很久，但室内空气仍未达标，仍然不能入住。一般的话，装修竣工后至少要过7天并经过空气质量验收合格才可入住。</b>
                                <img src="http://pic.tugou.com/service/iconr.jpg" class="imgdown1">
                                <img src="http://pic.tugou.com/service/peopler.jpg" class="imgdown2"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
