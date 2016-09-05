<!DOCTYPE html>
<html lang="zh-cn">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>短信接口、短信api接口，可使用短信接口进行触发发送，或短信群发功能|Luosimao.com</title>
        <meta name="keywords" content="短信接口,短信验证码,短信提醒,通知短信,触发短信,php短信接口 ,java短信接口 ,python短信接口,c#短信接口" />
        <meta name="description" content="luosimao短信平台:短信群发、短信接口、触发短信" />
        <meta name="author" content="Luosimao,Techsylar.inc">
        <link rel="stylesheet" href="//s.luosimao.com/bower/asset/website.css?v=201608251421.css" />
        <script src="//s.luosimao.com/js/modernizr.js?v=201608251421.js"></script>
    </head>
    
    <body>
        <div class="off-canvas-wrap">
            <div class="inner-wrap">
                <div class="header hide-for-small">
                    <div class="row doc-width">
                        <div class="small-12 columns">
                            <div class="logo">
                                <a href="https://luosimao.com/" title="返回首页">Luosimao</a></div>
                            <div class="menu right">
                                <a href="https://my.luosimao.com/auth/login" class="button tiny radius success" title="登录">登录</a>
                                <a href="https://my.luosimao.com/auth/register" class="button tiny radius info" title="注册luosimao会员">注册</a></div>
                            <nav class="nav right">
                                <a href="https://luosimao.com/" title="首页">首页</a>
                                <a href="https://luosimao.com/service/sms" title="短信发送服务与价格" class="active">短信服务</a>
                                <a href="https://luosimao.com/service/mail" title="邮件发送服务与价格">邮件服务</a>
                                <a href="https://luosimao.com/service/voice" title="语音验证码服务与价格">语音验证</a>
                                <a href="https://luosimao.com/service/captcha" title="人机验证">人机验证</a>
                                <a href="https://luosimao.com/docs/guid/" title="Luosimao平台使用指南">使用指南</a>
                                <a href="https://luosimao.com/docs/api/" title="短信接口及语音接口介绍">API接口</a></nav>
                        </div>
                    </div>
                </div>
                <header class="header-mini show-for-small">
                    <div class="left logo">
                        <a href="https://luosimao.com/"></a>
                    </div>
                    <div class="menu right">
                        <a href="#" class="right-off-canvas-toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </header>
                <aside class="right-off-canvas-menu side-panel">
                    <nav class="nav">
                        <ul class="nav-list">
                            <li>
                                <a href="https://luosimao.com/" title="首页">首页</a></li>
                            <li>
                                <a href="https://luosimao.com/service/sms" title="短信发送服务与价格">短信服务</a></li>
                            <li>
                                <a href="https://luosimao.com/service/mail" title="邮件发送服务与价格">邮件服务</a></li>
                            <li>
                                <a href="https://luosimao.com/service/voice" title="语音验证码服务与价格">语音验证</a></li>
                            <li>
                                <a href="https://luosimao.com/service/captcha" title="人机验证">人机验证</a></li>
                            <li>
                                <a href="https://luosimao.com/docs/guid/" title="Luosimao平台使用指南">使用指南</a></li>
                            <li>
                                <a href="https://luosimao.com/docs/api/" title="短信接口及语音接口介绍">API接口</a></li>
                            <li>
                                <a href="https://my.luosimao.com/auth/login" class="button small radius success expand" title="登录">登录</a></li>
                            <li>
                                <a href="https://my.luosimao.com/auth/register" class="button small radius info expand" title="注册luosimao会员">注册</a></li>
                        </ul>
                    </nav>
                </aside>
                <div class="sms-banner">
                    <div class="row site-width">
                        <div class="small-12 columns">
                            <h1>提供专业、快速、低成本的短信平台发送和短信接口，满足各类企业需求</h1>
                            <h2>无论您是开发者还是市场人员，都可以快速开始您的业务</h2>
                            <div class="sub">
                                <a href="#sms-testing" class="button success small radius" title="立即免费测试">立即免费测试</a>
                                <a href="#sms-price" class="button primary small radius" title="短信服务、短信接口价格">查看价格列表</a></div>
                        </div>
                    </div>
                </div>
                <div class="sms-client">
                    <div class="row site-width">
                        <div class="small-12 columns">
                            <div class="title">
                                <h3>他们选择信任Luosimao</h3></div>
                        </div>
                        <ul class="small-block-grid-2 medium-block-grid-5 client-list">
                            <li>
                                <a title="猿题库" target="_blank" href="http://yuantiku.com/">
                                    <img alt="猿题库" src="//s.luosimao.com/images/website/brand/yuantiku.jpg"></a>
                            </li>
                            <li>
                                <a title="英孚教育" target="_blank" href="http://www.ef.com.cn/">
                                    <img alt="英孚教育" src="//s.luosimao.com/images/website/brand/ef.jpg"></a>
                            </li>
                            <li>
                                <a title="bilibili弹幕视频网" target="_blank" href="http://www.bilibili.com/">
                                    <img alt="bilibili弹幕视频网" src="//s.luosimao.com/images/website/brand/bilibili.jpg"></a>
                            </li>
                            <li>
                                <a title="什么值得买SMZDM" target="_blank" href="http://www.smzdm.com/">
                                    <img alt="什么值得买SMZDM" src="//s.luosimao.com/images/website/brand/smzdm.jpg"></a>
                            </li>
                            <li>
                                <a title="2144网页游戏" target="_blank" href="http://web.2144.cn/">
                                    <img alt="2144网页游戏" src="//s.luosimao.com/images/website/brand/2144.jpg"></a>
                            </li>
                            <li>
                                <a title="热酷网" target="_blank" href="http://www.rekoo.com/">
                                    <img alt="热酷网" src="//s.luosimao.com/images/website/brand/rekoo.jpg"></a>
                            </li>
                            <li>
                                <a title="唐山凤凰卡" target="_blank" href="http://www.chengtongka.com/">
                                    <img alt="唐山凤凰卡" src="//s.luosimao.com/images/website/brand/fenghuangka.jpg"></a>
                            </li>
                            <li>
                                <a title="春雨医生" target="_blank" href="http://www.chunyuyisheng.com/">
                                    <img alt="春雨医生" src="//s.luosimao.com/images/website/brand/chunyu.jpg"></a>
                            </li>
                            <li>
                                <a title="一起好" target="_blank" href="https://www.yiqihao.com/">
                                    <img alt="一起好" src="//s.luosimao.com/images/website/brand/yiqihao.jpg"></a>
                            </li>
                            <li>
                                <a title="福建日报" target="_blank" href="http://www.fjsen.com/">
                                    <img alt="福建日报" src="//s.luosimao.com/images/website/brand/fujianribao.jpg"></a>
                            </li>
                            <li>
                                <a title="玻森数据" target="_blank" href="http://bosonnlp.com/">
                                    <img alt="玻森数据" src="//s.luosimao.com/images/website/brand/bosen.jpg"></a>
                            </li>
                            <li>
                                <a title="teambition" target="_blank" href="https://www.teambition.com/">
                                    <img alt="teambition" src="//s.luosimao.com/images/website/brand/teambition.jpg"></a>
                            </li>
                            <li>
                                <a title="一兆韦德" target="_blank" href="http://www.1012china.com/">
                                    <img alt="一兆韦德" src="//s.luosimao.com/images/website/brand/yizhaoweide.jpg"></a>
                            </li>
                            <li>
                                <a title="爱定客" target="_blank" href="http://www.idx.com.cn/">
                                    <img alt="爱定客" src="//s.luosimao.com/images/website/brand/aidingke.jpg"></a>
                            </li>
                            <li>
                                <a title="云麦科技" target="_blank" href="http://www.iyunmai.com/">
                                    <img alt="云麦科技" src="//s.luosimao.com/images/website/brand/yunmai.jpg"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sms-api">
                    <div class="row site-width">
                        <div class="small-12 medium-6 columns sms-api-des">
                            <h3 class="title">标准的短信接口</h3>
                            <h6 class="sub-title">仅需少量开发，就快速接入您的日常业务</h6>
                            <ul class="no-bullet focus-des">
                                <li>提供完备状态查询，支持状态接口推送</li>
                                <li>详尽的在线接口文档，随时查阅，不断更新</li>
                                <li>标准HTTP接口，提供多种语言示例（PHP\JAVA\C#\NODE\PYTHON等）</li>
                                <li>支持多种返回格式 JSON/XML</li></ul>
                            <div class="goto">
                                <a href="https://luosimao.com/docs/api" class="button radius small" title="短信接口文档">立即查看短信接口文档</a></div>
                        </div>
                        <div class="small-12 medium-6 columns">
                            <div class="sms-describe">
                                <img alt="简单易用的短信接口" src="//s.luosimao.com/images/website/sms/sms_api.png" /></div>
                        </div>
                        <div class="small-12 columns">
                            <ul class="other-list small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                                <li>
                                    <div class="icon">
                                        <span class="sms-status"></span>
                                    </div>
                                    <h5>准确的发送状态</h5>
                                    <p class="des">提供快速准确的短信状态
                                        <br/>同时提供状态推送，少量开发即可对接</p></li>
                                <li>
                                    <div class="icon">
                                        <span class="sms-data"></span>
                                    </div>
                                    <h5>完善的数据统计</h5>
                                    <p class="des">详尽的发送统计和历史查询
                                        <br>发送情况，一手掌握</p></li>
                                <li>
                                    <div class="icon">
                                        <span class="sms-back"></span>
                                    </div>
                                    <h5>在线发送系统</h5>
                                    <p class="des">直接通过在线发送系统发送短信。
                                        <br>简单学习，易于使用。</p></li>
                                <li>
                                    <div class="icon">
                                        <span class="sms-contact"></span>
                                    </div>
                                    <h5>丰富的会员管理</h5>
                                    <p class="des">提供通讯录对会员进行更有效的管理
                                        <br/>支持导入会员列表，针对分组发送</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sms-fast">
                    <div class="row site-width">
                        <div class="small-12 medium-6 columns">
                            <div class="sms-describe">
                                <img alt="全面快速的短信发送能力" src="//s.luosimao.com/images/website/sms/sms_fast.png" /></div>
                        </div>
                        <div class="small-12 medium-6 columns sms-info">
                            <h3 class="title">全面快速的短信发送能力</h3>
                            <ul class="no-bullet focus-des">
                                <li>支持全国三网发送（移动、电信、联通）</li>
                                <li>支持虚拟运营商170号段</li>
                                <li>短信接口支持高并发大容量</li>
                                <li>支持查看上行回复</li></ul>
                        </div>
                        <div class="small-12 columns">
                            <ul class="other-list small-block-grid-1 medium-block-grid-2 large-block-grid-4">
                                <li>
                                    <div class="icon">
                                        <span class="sms-code"></span>
                                    </div>
                                    <h5>网站、APP短信验证码</h5>
                                    <p class="des">通过短信验证码校验用户真实信息
                                        <br/>注册杜绝虚假用户，登陆账号安全验证</p></li>
                                <li>
                                    <div class="icon">
                                        <span class="sms-shopping"></span>
                                    </div>
                                    <h5>订单、发货、物流提醒</h5>
                                    <p class="des">将订单，发货，物流信息通过短信及时发送给用户
                                        <br/>提升服务质量，服务客户更贴心</p></li>
                                <li>
                                    <div class="icon">
                                        <span class="sms-send"></span>
                                    </div>
                                    <h5>通知、公文、动账提醒</h5>
                                    <p class="des">提醒短信，客户通知，账号变动提醒
                                        <br/>及时告知客户，为用户体验全面加分</p></li>
                                <li>
                                    <div class="icon">
                                        <span class="sms-alert"></span>
                                    </div>
                                    <h5>监控告警短信</h5>
                                    <p class="des">服务器监控，系统问题警告，业务新动态通知
                                        <br/>随时了解业务运转情况，及时发现系统问题</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sms-progress">
                    <div class="backside"></div>
                    <div class="row site-width">
                        <div class="small-12 columns">
                            <dl class="tabs vertical" data-tab>
                                <dt class="side-title">短信服务接入流程</dt>
                                <dd class="tab-title active">
                                    <a href="#process1">
                                        <i class="num">1</i>注册Luosimao账户</a></dd>
                                <dd class="tab-title">
                                    <a href="#process2">
                                        <i class="num">2</i>添加短信签名与模板</a></dd>
                                <dd class="tab-title">
                                    <a href="#process3">
                                        <i class="num">3</i>开发对接测试</a></dd>
                                <dd class="tab-title">
                                    <a href="#process4">
                                        <i class="num">4</i>服务购买</a></dd>
                                <dd class="tab-title">
                                    <a href="#process5">
                                        <i class="num">5</i>发布上线</a></dd>
                            </dl>
                            <div class="tabs-content">
                                <div class="content active" id="process1">
                                    <div class="process-icon">
                                        <img src="//s.luosimao.com/images/website/sms/process1.png" alt="注册Luosimao账户"></div>
                                    <div class="process-title">注册Luosimao账户</div>
                                    <div class="process-summary">现在注册Luosimao,即可获得10条免费测试短信
                                        <br>可用于后台批量测试发送或API接口对接测试</div>
                                    <div class="process-sub">
                                        <a href="https://my.luosimao.com/auth/register" target="_blank" class="button radius tiny">立即注册</a>
                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=1845808782&site=qq&menu=yes" target="_blank" class="button radius tiny success">联系客服</a></div>
                                </div>
                                <div class="content" id="process2">
                                    <div class="process-icon">
                                        <img src="//s.luosimao.com/images/website/sms/process2.png" alt="添加短信模板"></div>
                                    <div class="process-title">添加短信签名与模板</div>
                                    <div class="process-summary">短信签名为标识短信发送者身份所用,通常为公司名称,产品名称或网站名称等.
                                        <br>可在管理中心 - 短信 - 签名管理处进行添加.
                                        <br>所有在Luosimao发送的短信都会先审核再发送,如需通过API免审发送短信
                                        <br>可在管理中心 - 短信 - 短信模板处提交,模板生效后即可免审</div>
                                    <div class="process-sub">
                                        <a href="https://luosimao.com/docs/sms/8#check" target="_blank" title="查看短信内容相关规定" class="button radius tiny">查看短信内容相关规定</a></div>
                                </div>
                                <div class="content" id="process3">
                                    <div class="process-icon">
                                        <img src="//s.luosimao.com/images/website/sms/process3.png" alt="开发对接测试"></div>
                                    <div class="process-title">开发对接测试</div>
                                    <div class="process-summary">Luosimao提供的是标准的HTTP发送接口,只需少量开发即可轻松对接
                                        <br>支持各类开发语言(PHP\JAVA\C#\ASP\NODE\PYTHON等)
                                        <br>同时提供状态推送\上行回复\余额查询\批量发送等多样化的接口,满足您的各类需求</div>
                                    <div class="process-sub">
                                        <a href="https://luosimao.com/docs/api" target="_blank" title="短信api接口文档" class="button radius tiny">短信接口文档</a></div>
                                </div>
                                <div class="content" id="process4">
                                    <div class="process-icon">
                                        <img src="//s.luosimao.com/images/website/sms/process4.png" alt="服务购买"></div>
                                    <div class="process-title">服务购买</div>
                                    <div class="process-summary">Luosimao提供丰富的套餐选择,满足不同的发送量需求
                                        <br>支持支付宝\网银在线直接充值,灵活方便,余额即时到账
                                        <br>支持开具发票,购买后可以直接在后台申请</div>
                                    <div class="process-sub">
                                        <a href="https://luosimao.com/docs/guid/17" target="_blank" title="Luosimao服务购买和开票说明" class="button radius tiny">查看购买及开票说明</a></div>
                                </div>
                                <div class="content" id="process5">
                                    <div class="process-icon">
                                        <img src="//s.luosimao.com/images/website/sms/process5.png" alt=""></div>
                                    <div class="process-title">发布上线</div>
                                    <div class="process-summary">完成以上步骤后,就可以发布上线了提供对外服务
                                        <br>您也可以随时登录Luosimao查看发送状态和数据统计</div>
                                    <div class="process-sub">
                                        <a href="https://my.luosimao.com/" target="_blank" title="进入Luosimao管理中心" class="button radius tiny">前往管理中心</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sms-price-table" id="sms-price">
                    <div class="row site-width">
                        <div class="title">
                            <h3>短信购买支持在线支付，余额即时到账，使用方便快捷</h3></div>
                        <ul class="price-list small-block-grid-1 large-block-grid-5">
                            <li>
                                <div class="item">
                                    <p class="name">1万条短信包</p>
                                    <p class="price">￥550</p>
                                    <p class="des">包含10,000条短信
                                        <br/>￥0.055/条
                                        <br/>支持接口/批量发送
                                        <br/>永久使用</p>
                                    <p class="sub">
                                        <a href="https://my.luosimao.com/auth/register?goods=4" class="button expand success radius small" title="立即购买1万条短信包">立即购买</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <p class="name">2万条短信包</p>
                                    <p class="price">￥1060</p>
                                    <p class="des">包含20,000条短信
                                        <br/>￥0.053/条
                                        <br/>支持接口/批量发送
                                        <br/>永久使用</p>
                                    <p class="sub">
                                        <a href="https://my.luosimao.com/auth/register?goods=22" class="button expand success radius small" title="立即购买2万条短信包">立即购买</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="item hot-sale">
                                    <p class="name">10万条短信包</p>
                                    <p class="price">￥5000</p>
                                    <p class="des">包含100,000条短信
                                        <br/>￥0.05/条
                                        <br/>支持接口/批量发送
                                        <br/>永久使用</p>
                                    <p class="sub">
                                        <a href="https://my.luosimao.com/auth/register?goods=7" class="button expand success radius small" title="立即购买10万条短信包">立即购买</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <p class="name">20万条短信包</p>
                                    <p class="price">￥9600</p>
                                    <p class="des">包含200,000条短信
                                        <br/>￥0.048/条
                                        <br/>支持接口/批量发送
                                        <br/>永久使用</p>
                                    <p class="sub">
                                        <a href="https://my.luosimao.com/auth/register?goods=14" class="button expand success radius small" title="立即购买20万条短信包">立即购买</a></p>
                                </div>
                            </li>
                        </ul>
                        <ul class="price-list small-block-grid-1 large-block-grid-5">
                            <li>
                                <div class="item">
                                    <p class="name">40万条短信包</p>
                                    <p class="price">￥18000</p>
                                    <p class="des">包含400,000条短信
                                        <br/>￥0.045/条
                                        <br/>支持接口/批量发送
                                        <br/>永久使用</p>
                                    <p class="sub">
                                        <a href="https://my.luosimao.com/auth/register?goods=23" class="button expand success radius small" title="立即购买40万条短信包">立即购买</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <p class="name">100万条短信包</p>
                                    <p class="price">￥40000</p>
                                    <p class="des">包含1,000,000条短信
                                        <br/>￥0.04/条
                                        <br/>支持接口/批量发送
                                        <br/>永久使用</p>
                                    <p class="sub">
                                        <a href="https://my.luosimao.com/auth/register?goods=29" class="button expand success radius small" title="立即购买100万条短信包">立即购买</a></p>
                                </div>
                            </li>
                        </ul>
                        <div class="price-table-etc">
                            <i class="fa fa-exclamation-circle "></i>如您的每月发送量超过50万条或有更大数量的套餐购买需求，请
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=1845808782&site=qq&menu=yes" class="button tiny radius" title="更多数量需求请联系客服代表">联系我们</a></div>
                    </div>
                </div>
                <div class="sms-testing" id="sms-testing">
                    <div class="inner">
                        <h4 class="title">免费短信测试</h4>
                        <div class="row">
                            <div class="small-12 columns">
                                <label>请输入手机号：</label>
                                <input type="text" class="mobile" required autocomplete="off" /></div>
                            <div class="small-12 columns">
                                <div class="l-captcha" data-site-key="e7b4d20489b69bab25771f9236e2c4be"></div>
                            </div>
                            <div class="small-12 columns">
                                <div class="testing-sub">
                                    <a href="#" class="button success radius small sender" title="发送测试短信">发送测试短信</a></div>
                                <div class="test-limited">每个号码每天限测试三次</div></div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="row site-width">
                        <div class="small-12 columns">
                            <div class="company-logo">
                                <a href="http://www.techsylar.com/" target="_blank" title="Techsylar.Inc"></a>
                            </div>
                            <div class="footer-inner">
                                <div class="bottom-link">
                                    <a href="https://luosimao.com/docs/about" title="关于我们">关于我们</a>
                                    <a href="https://luosimao.com/docs/guid/31" title="隐私政策">隐私政策</a>
                                    <a href="https://luosimao.com/docs/guid/18" title="服务条款">服务条款</a>
                                    <a href="https://luosimao.com/docs/about/27" title="联系我们">联系我们</a>
                                    <a href="https://luosimao.com/docs/api" title="短信接口">接口文档</a>
                                    <a href="http://weibo.com/luosimaocom/" target="_blank" title="新浪微博">新浪微博</a></div>
                                <div class="company-info ">
                                    <div class="footer-tips ">
                                        <span class="bottom-tips">客服热线 021-31234560 &nbsp;</span>
                                        <span class="bottom-tips">客服工作时间 9:00-18:00（周日和节日除外）</span></div>&copy; 2016 铁壳网络
                                    <a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备11011422号</a>增值电信经营许可证 B2-20150858
                                    <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31010702001336">
                                        <img src="//s.luosimao.com/images/website/beian.png" style="margin-right:5px" />沪公网安备 31010702001336号</a></div>
                            </div>
                        </div>
                    </div>
                </footer>
                <script>var _hmt = _hmt || []; (function() {
                        var hm = document.createElement("script");
                        hm.src = "//hm.baidu.com/hm.js?588936199c3632c17bd6fb753b9bc3a6";
                        var s = document.getElementsByTagName("script")[0];
                        s.parentNode.insertBefore(hm, s);
                    })();</script>
                <!--Kefuzu Chat Script Start-->
                <script type="text/javascript">var __kc = __kc || {};
                    __kc.o = 'xYqLOt8sL3oa'; (function() {
                        var kc = document.createElement('script');
                        kc.type = 'text/javascript';
                        kc.async = true;
                        kc.src = ('https:' == document.location.protocol ? 'https://': 'http://') + 'v1.kefuzu.com/static/v1/dist/widget.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(kc, s);
                    })();</script>
                <!--Kefuzu Chat Script End-->
                <a href="#" class="exit-off-canvas"></a>
            </div>
        </div>
        <div id="myModal" class="reveal-modal tiny test-modal" data-reveal>
            <h5>提示信息</h5>
            <p class="message"></p>
            <a class="close-reveal-modal">&#215;</a></div>
        <script src="//s.luosimao.com/js/jquery-2.1.0.js?v=201608251421.js"></script>
        <script src="//s.luosimao.com/js/foundation.min.js?v=201608251421.js"></script>
        <script src="//captcha.luosimao.com/static/dist/api.js"></script>
        <script src="//s.luosimao.com/js/module/app.js?v=201608251421.js"></script>
    </body>

</html>
