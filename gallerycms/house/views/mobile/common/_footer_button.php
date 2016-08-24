<style type="text/css">.icon-consult { display: inline-block; width: 0.8rem; height: 1.25rem; background: url("<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m-consult.png") no-repeat center; background-size: 0.6rem 0.6rem; vertical-align: middle; margin-top: -0.2rem; margin-right: 7px } .list-consult { display: none; } .footer-bar { width: 100%; height: 100%; border-collapse: collapse; border-spacing: 0; } .footer-bar td { text-align: center; vertical-align: middle; } footer { width: 100%; height: 2.2rem; line-height: 2.2rem; position: fixed; bottom: 0; z-index: 99; max-width: 750px; } footer table { margin: 0; padding-top: 0; border-collapse: collapse; border-spacing: 0; } footer td { font-size: 0.88rem; color: #fff; background-size: 18%; height: 2.2rem; line-height: 2.2rem; } footer .qq-btn { font-size: 0.58rem; color: #444444; background-color: #fff; } footer .apply-btn { font-size: 0.68rem; color: #fff; background-color: #00b7b1; }</style>
<footer class="tugou-footer app-hide">
    <table class="footer-bar">
        <tr>
            <td class="qq-btn" style="border-right:none;width: 38.2%" onclick="nTalk.im_openInPageChat();">
                <span class="icon-consult"></span>在线咨询</span>
            </td>
            <td style="width:61.8%" class="apply-btn">免费预约设计</td></tr>
    </table>
</footer>
<script type="text/javascript">
$(function() {
    $(".apply-btn").click(function() { //弹出申请框
        $(".win_all").show();
    });
    $(".close a").click(function() { //关闭申请框
        $(".win_all").hide();
    });
});
</script>
