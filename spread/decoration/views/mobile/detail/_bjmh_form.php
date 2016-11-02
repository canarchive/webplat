        <form class="zxd-form sjbj-form" id="form_zx" method="post" action="javascript:void(0);">
            <div class="apply_info">
                <div class="zxd-form-area">
                    <input id="zxd-area" name="square" type="number" placeholder="输入你的房屋面积">
					<label for="zxd-area">平方米</label>
                </div>
                <label class="row-select-wrap">
                    <select name="zhonglei" id="zhonglei" class="needsclick">
                        <option value="新房装修" selected="selected">新房装修</option>
                        <option value="二手房装修">二手房装修</option>
                        <option value="商铺办公装修">商铺办公装修</option></select>
                </label>
                <label class="row-select-wrap">
                    <select name="demo_zt" id="demo_zt" class="needsclick">
                        <option value="">请选择装修状态</option>
                        <option value='半个月内装修'>半个月内</option>
                        <option value='一个月装修'>一个月</option>
                        <option value='两个月'>两个月</option>
                        <option value='两个月以上'>两个月以上</option></select>
                </label>
                <div class="zxd-form-pz">
                    <label class="s1">
                        <select name="huxing" id="huxing" class="needsclick">
                            <option value="">请选择房屋户型</option>
                            <option value='小户型'>小户型</option>
                            <option value='公寓'>公寓</option>
                            <option value='别墅'>别墅</option>
                            <option value='普通住宅' selected='selected'>普通住宅</option></select>
                    </label>
                    <label class="s2">
                        <select id="shi" name="shi" class="needsclick">
                            <option value='1' selected='selected'>1室</option>
                            <option value='2'>2室</option>
                            <option value='3'>3室</option>
                            <option value='4'>4室</option>
                            <option value='5'>5室</option>
                            <option value='6'>6室</option></select>
                    </label>
                    <label class="s3">
                        <select id="ting" name="ting" class="needsclick">
                            <option value='0'>0厅</option>
                            <option value='1' selected='selected'>1厅</option>
                            <option value='2'>2厅</option></select>
                    </label>
                    <label class="s4">
                        <select id="chu" name="chu" class="needsclick">
                            <option value='0'>0厨</option>
                            <option value='1' selected='selected'>1厨</option></select>
                    </label>
                    <label class="s5">
                        <select id="wei" name="wei" class="needsclick">
                            <option value='0'>0卫</option>
                            <option value='1' selected='selected'>1卫</option>
                            <option value='2'>2卫</option>
                            <option value='3'>3卫</option></select>
                    </label>
                    <label class="s6">
                        <select id="yangtai" name="yangtai" class="needsclick">
                            <option value='0'>0阳台</option>
                            <option value='1' selected='selected'>1阳台</option>
                            <option value='2'>2阳台</option>
                            <option value='3'>3阳台</option></select>
                    </label>
                </div>
                <input id="truename" type="tel" name="truename" placeholder="输入姓名获取装修清单">
                <input id="mobile" type="tel" name="mobile" placeholder="输入手机号估算精确报价">
                <input type="hidden" name="openid" value="">
                <input type="hidden" name="fromapp" value="0">
                <input type="hidden" name="pagetype" value="127">
                <input type="hidden" name="isprice" value="1">
                <input type="hidden" id="post_url" value="/zb/post">
				<input id="zxd-form-submit" type="button" value="估算报价">
            </div> 
        </form>
