<?php
use yii\helpers\Url;
?>
<div class="pd_b40">
<div class="wrap ie78">
<div class="mg_t20">
    <h4 class="nTitle">
        确认收货地址
    </h4>
    <ul class="comment_box detailed_address_list clearfix" id="d_address">
        <li area_id="110105" address_id="202071" onclick="i_address_n_click(this);"
        name="ul_address_n" class="address_box checked">
            <div class="contact_box">
                <span class=" inline col_666 f14">
                    王
                </span>
                &nbsp;&nbsp;
                <span class=" inline col_666 f14">
                    13811974106
                </span>
            </div>
            <div class="detailed_address_box">
                <p class=" f14 col_666 mg_t15 w250 escp" title="北京市市辖区朝阳区">
                    北京市&nbsp;&nbsp;朝阳区
                </p>
                <p class=" f12 col_666 lineH20">
                    南磨房
                </p>
            </div>
            <div class="edit_btn_box ">
                <a onclick="s_update_address('202071','王','13811974106','南磨房','北京市','市辖区','朝阳区','110105','1','110000','110100','100000');"
                href="javascript:;" class="inline col_link f14 mg_r15">
                    修改
                </a>
                <a onclick="delAddress('202071')" href="javascript:;" class="inline col_link f14">
                    删除
                </a>
            </div>
            <span class="inline default_addres ">
                <i class="inline spIcon">
                </i>
                <span class="inline col_666 f14">
                    默认地址
                </span>
            </span>
        </li>
        <input type="hidden" value="202071" id="i_address_id">
        <input type="hidden" value="110105" id="i_area_id">
        <li>
            <a onclick="s_new_address();" class="add_address_box">
                <i class="inline spIcon add_address_bg mg_t40">
                </i>
                <br>
                <span class="inline f18 col_999 mg_t15">
                    使用新地址
                    <em class="upfile_btn">
                    </em>
                </span>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
<div data-dialog="1457942449184" id="1457942449184" class="J_pop pop"
style="z-index: 10000; width: 750px; top: 77px; left: 336.5px; position: fixed; display: block;">
    <div class="pop_hd">
        <span class="pop_close">
        </span>
        <span class="pop_title f18">
            请输入新地址
        </span>
    </div>
    <div class="pop_bd" style="height: 250px;">
        <form id="form_address">
            <input type="hidden" value="0" id="i_address_id">
            <table cellspacing="10" width="100%" class="per_table">
                <tbody>
                    <tr>
                        <td align="right" width="20%">
                            <span class="col_ee5b47">
                            </span>
                            收货人姓名：&nbsp;
                        </td>
                        <td width="80%">
                            <input type="text" onkeypress="return ValidateSpecialCharacter()" class="inpCom w200 permy"
                            maxlength="12" name="i_n_receiver" value="" id="i_receiver">
                            <span id="receiver_msg">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <span class="col_ee5b47">
                            </span>
                            省市：&nbsp;
                        </td>
                        <td>
                            <div class="w120 mg_r10 posR f_l permy" id="provice_seletor">
                                <div class="J_select">
                                    <span class="sel_span" data-value="">
                                        --请选择--
                                    </span>
                                    <div class="sel_div" style="height: 0px;">
                                        <ul class="sel_ul">
                                            <li data-value="" data-hover="hover">
                                                --请选择--
                                            </li>
                                            <li data-value="110000" data-hover="hover">
                                                北京市
                                            </li>
                                            <li data-value="120000" data-hover="hover">
                                                天津市
                                            </li>
                                            <li data-value="130000" data-hover="hover">
                                                河北省
                                            </li>
                                            <li data-value="140000" data-hover="hover">
                                                山西省
                                            </li>
                                            <li data-value="150000" data-hover="hover">
                                                内蒙古
                                            </li>
                                            <li data-value="210000" data-hover="hover">
                                                辽宁省
                                            </li>
                                            <li data-value="220000" data-hover="hover">
                                                吉林省
                                            </li>
                                            <li data-value="230000" data-hover="hover">
                                                黑龙江省
                                            </li>
                                            <li data-value="310000" data-hover="hover">
                                                上海市
                                            </li>
                                            <li data-value="320000" data-hover="hover">
                                                江苏省
                                            </li>
                                            <li data-value="330000" data-hover="hover">
                                                浙江省
                                            </li>
                                            <li data-value="340000" data-hover="hover">
                                                安徽省
                                            </li>
                                            <li data-value="350000" data-hover="hover">
                                                福建省
                                            </li>
                                            <li data-value="360000" data-hover="hover">
                                                江西省
                                            </li>
                                            <li data-value="370000" data-hover="hover">
                                                山东省
                                            </li>
                                            <li data-value="410000" data-hover="hover">
                                                河南省
                                            </li>
                                            <li data-value="420000" data-hover="hover">
                                                湖北省
                                            </li>
                                            <li data-value="430000" data-hover="hover">
                                                湖南省
                                            </li>
                                            <li data-value="440000" data-hover="hover">
                                                广东省
                                            </li>
                                            <li data-value="450000" data-hover="hover">
                                                广西
                                            </li>
                                            <li data-value="460000" data-hover="hover">
                                                海南省
                                            </li>
                                            <li data-value="500000" data-hover="hover">
                                                重庆市
                                            </li>
                                            <li data-value="510000" data-hover="hover">
                                                四川省
                                            </li>
                                            <li data-value="520000" data-hover="hover">
                                                贵州省
                                            </li>
                                            <li data-value="530000" data-hover="hover">
                                                云南省
                                            </li>
                                            <li data-value="540000" data-hover="hover">
                                                西藏
                                            </li>
                                            <li data-value="610000" data-hover="hover">
                                                陕西省
                                            </li>
                                            <li data-value="620000" data-hover="hover">
                                                甘肃省
                                            </li>
                                            <li data-value="630000" data-hover="hover">
                                                青海省
                                            </li>
                                            <li data-value="640000" data-hover="hover">
                                                宁夏
                                            </li>
                                            <li data-value="650000" data-hover="hover">
                                                新疆
                                            </li>
                                        </ul>
                                        <div class="scr_com sel_scroll" style="height: 0px;">
                                            <div class="scr_monsemove sel_scroll_btn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w120 mg_r10 posR f_l permy" id="city_seletor">
                                <div class="J_select">
                                    <span class="sel_span" data-value="">
                                        --请选择--
                                    </span>
                                    <div class="sel_div" style="height: 0px;">
                                        <ul class="sel_ul">
                                            <li data-value="" data-hover="hover">
                                                --请选择--
                                            </li>
                                        </ul>
                                        <div class="scr_com sel_scroll" style="height: 0px;">
                                            <div class="scr_monsemove sel_scroll_btn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="absolute hidden_input2" name="J_sel_input">
                            </div>
                            <div class="w120 mg_r10 posR f_l permy" id="area_seletor">
                                <div class="J_select">
                                    <span class="sel_span" data-value="">
                                        --请选择--
                                    </span>
                                    <div class="sel_div" style="height: 0px;">
                                        <ul class="sel_ul">
                                            <li data-value="" data-hover="hover">
                                                --请选择--
                                            </li>
                                        </ul>
                                        <div class="scr_com sel_scroll" style="height: 0px;">
                                            <div class="scr_monsemove sel_scroll_btn">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="absolute hidden_input2" name="J_sel_input">
                            </div>
                            <input type="hidden" name="i_n_ADDR_ID" id="i_ADDR_ID">
                            <span id="area_msg">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <span class="col_ee5b47">
                            </span>
                            街道地址：&nbsp;
                        </td>
                        <td>
                            <input type="text" onkeyup="checkAddressLength();" onkeypress="return ValidateSpecialCharacter()"
                            class="inpCom w200 permy" maxlength="31" name="i_n_address" value="" id="i_address">
                            <span id="address_msg">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <span class="col_ee5b47">
                            </span>
                            手机号码：&nbsp;
                        </td>
                        <td>
                            <input type="text" class="inpCom w200 permy" maxlength="11" name="i_n_phone"
                            value="" id="i_phone">
                            <span id="phone_msg">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td class="isdefault">
                            <div class="openIcon inline cursor checkedc">
                            </div>
                            <input type="checkbox" id="i_default_address" checked="checked">
                            <label class="col_000" id="default_address_html">
                                设为默认地址
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="pop_ft" style="float: left; margin-left: 163px; margin-top: 8px;">
        <a href="javascript:void(0)" class="btnCom1 btnBg2 btnH1 inline pop_confirm h38 w120">
            <span>
                寄到该地址
            </span>
        </a>
    </div>
</div>
</script>
