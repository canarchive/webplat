	<div class="blackNav">
		<span class="left"></span>
		<ul class="clear">
			<li style="display:none">
				<a href="javascript:void(0);" target="_blank"></a>
			</li>
			<li>
				<a href="#baoming">团购报名</a>
			</li>
			<li>
				<a href="#djsp">特价商品</a>
			</li>
			<li>
				<a href="#czsj">参展商家</a>
			</li>
			<li>
				<a href="#yshbz">为什么选我们</a>
			</li>
							 	    <li>
				<a href="#tgbz">团购保障</a>
		    </li>
			<li>
				<a href="http://www.17house.com/zhucai/?s=2&k=sem%e5%9b%a2%e8%b4%ad%e4%bc%9a" target="_blank">377主材套餐</a>
			</li>
			<li>
				<a href="http://www.17house.com/zhengzhuang/?s=2&k=sem%e5%9b%a2%e8%b4%ad%e4%bc%9a" target="_blank">677整装套餐</a>
			</li>
		 </ul>

		<a class="userOne" href="javascript:;">
		    乘车路线	
		</a>

		<span class="right"></span>
	</div>

	<!-- 第一模块 end -->
	<div class="mainBgOne bgImg" style="background:#cf2142 url(<?= Yii::getAlias('@asseturlold') . '/grouponsem/tuig/images/banner003.jpg?verion=20160107'; ?>) center top no-repeat;">		
		<div class="mainBgOne_con main_item" id="ksbm">
			<!-- 报名 start -->
			<div class="mainBgOne_tab" id="baoming">		
				<h3 class="clear">
					<em>已有</em>
					<a id="grouponRegNumber" class="grouponRegNumber"><?= $info['signup_number']; ?></a>
					<em>人报名</em>
				</h3>
				<p>时间：<?= date('Y-m-d H:i', $info['start_at']) . '至' . date('Y-m-d H:i', $info['end_at']); ?></p>
				<p>地点：<?= $info['address']; ?></p>
				<div class="tabCon">花一天时间&nbsp;省一年工资&nbsp;比传统市场便宜<em>10%-35%</em></div>
				<div class="tabText">
					<input class="user_name" type="text" value="您的称呼">
					<input class="user_phone" type="text" value="您的电话">
					<span class="errorTips"></span>
				</div>
				<button class="tabBtn" id="signup-top">免费领取代金券</button>
				<div class="tabList">
					<ul class="tabList_scroll">
                    <?php if (isset($info['owners'])) { foreach ($info['owners'] as $owner) { ?>
                    	<li class="con_item">
						    <span class="s1"><?= $owner['owner_name']; ?></span>
                            <span class="s2">***</span>
                            <span class="s3"><?= substr_replace($owner['mobile'], '****', 3, 4); ?></span>
                        </li>
                    <?php } } ?>
					</ul>
				</div>
			</div>
			<!-- 报名 end -->
		</div>
	</div>

