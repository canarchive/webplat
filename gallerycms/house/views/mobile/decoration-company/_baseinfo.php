<!-- 公司简介 -->
<div class="introduce " id="content-baseinfo">
    <div class="listone">
        <h4 class="one01">品牌简介</h4>
        <p><?= $info['description']; ?>
    </div>
    <div class="listone">
        <h4 class="one02">全程品质保障</h4>
        <table class="listtable">
            <tr>
                <td>选材：</td>
                <td>工厂直供，品质保证</td>
            </tr>
            <tr>
                <td>量房：</td>
                <td>设计师免费上门量房</td>
            </tr>
            <tr>
                <td>设计：</td>
                <td>3天内免费出方案-->出具初期预算-->深化设计-->深化预算</td>
            </tr>
            <tr>
                <td>施工：</td>
                <td>优秀项目经理、精工班组团队一线施工；手机实时直播工地，全程掌握装修进度</td>
            </tr>
            <tr>
                <td>验收：</td>
                <td>装修管家全程一对一专业指导；免费第三方监理，节点验收</td>
            </tr>
            <tr>
                <td>售后：</td>
                <td>网站资质审核，质保金先行赔付；项目基础、隐蔽工程质量保证</td>
            </tr>
        </table>
    </div>
    <div class="listone">
        <h4 class="one03">公司地址</h4>
        <p><?= $info['address']; ?></p>
    </div>
    <div class="listone">
        <h4 class="one04">资质荣誉</h4>
        <div class="eight_principal">
            <a class="controller prev" href="javascript:;"></a>
            <a class="controller next" href="javascript:;"></a>
            <div class="eight_box">
                <?php foreach ($info['aptitude'] as $aptitude) { ?>
                <div class="eight_item">
                    <img alt="企业证书" src="<?= $aptitude['url']; ?>">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="list-footer"></div>
    <div class="footer">
        <a>申请免费设计</a>
    </div>
</div>
