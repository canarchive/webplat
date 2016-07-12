<?php echo $this->render('_header', ['info' => $info, 'host' => $host]); ?>
	<div class="main">
		<div class="banner">
			<p>每日限额&nbsp;<i>50</i>&nbsp;名 &nbsp;今日仅剩&nbsp;<span>4</span>&nbsp;名</p>
			<a href="#sign_up"></a>
		</div>
		<section>
			<ul class="list_nav">
				<li>
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/L_yuyue.jpg" />
					<b>免费预约&nbsp;</b>>
				</li>
				<li>
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/L_liangfang.jpg" />
					<b>上门量房&nbsp;</b>>
				</li>
				<li>
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/L_seji.jpg" />
					<b>免费设计</b>
				</li>
			</ul>
			<div class="L_zhuangxiu"><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/L_zhuangxiu.jpg" /></div>
			<div class="L_xy">
				<dl>
					<dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/L_xyt.jpg" /></dt>
					<dd>
						通过整体翻新，重新规划房屋格局，增加收纳功能，消灭水电隐患，重塑一个更加舒适、实用的幸福空间。
						<p>您有疑问，可以问我</p>
					</dd>
				</dl>
			</div>
			<!--空间再造-->
			<div class="L_kzao">
				<dl>
					<dt></dt>
					<dd>
						<b>空间再造</b><br />感受全新收纳体验与视觉盛宴
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/K_bg.jpg" />
				</div>
				<div class="K_list">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/W_x.jpg" /><p>我们通过丰富经验，利用专业设计，不仅可将您的房屋扩容30%、还能放大宽广的视觉效果。</p>
				</div>
			</div>
			<!--水电改造-->
			<div class="L_kzao L_kzao2">
				<dl>
					<dt></dt>
					<dd>
						<b>水电改造</b><br />节能省水，给您更安心的生活
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/K_bg2.jpg" />
				</div>
				<div class="K_list">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/W_x.jpg" /><p>居家安全最重要的一环，就是水电工程。我们拥有专业人员负责施工，给您的家人最好的安全保证。</p>
				</div>
			</div>
			<!--厨卫换新-->
			<div class="L_kzao L_kzao3">
				<dl>
					<dt></dt>
					<dd>
						<b>厨卫换新</b><br />更贴近生活需求的装修服务
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/K_bg3.jpg" />
				</div>
				<ul>
					<li><span>墙地面-</span>色彩搭配统一</li>
					<li><span>操作台-</span>烹饪操作人性化</li>
					<li><span>整体空间-</span>足够的回转余地</li>
					<li><span>橱柜-</span>储物功能强大</li>
				</ul>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/K_bg4.jpg" />
				</div>
				<ul>
					<li><span>浴室柜+台下盆-</span>漂亮实用</li>
					<li><span>马桶-</span>经典巧妙</li>
					<li><span>马赛克腰线-</span>活泼亮丽</li>
					<li><span>淋浴房-</span>干湿分离 好打理</li>
				</ul>
				<div class="K_list">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/W_x.jpg" /><p>我们为您解决烦恼，专业人员依多年经验提出有效施工方案，让您居家环境更安心。</p>
				</div>
			</div>
			<!--环保粉刷-->
			<div class="L_kzao L_kzao4">
				<dl>
					<dt></dt>
					<dd>
						<b>环保粉刷</b><br />墙面处理，给家焕然一新的感受
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/K_bg5.jpg" />
				</div>
				<div class="K_list">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/W_x.jpg" /><p>居家安全最重要的一环，就是水电工程。我们拥有专业人员负责施工，给您的家人最好的安全保证。</p>
				</div>
			</div>
            <?php echo $this->render('_signup', ['info' => $info, 'host' => $host]); ?>
		</section>
        <?php echo $this->render('_footer', ['info' => $info, 'host' => $host, 'view' => $view]); ?>
	</div>
<input type="hidden" id="position" value="old" />
<input type="hidden" id="position_name" value="老房装修" />
<?php echo $this->render('_footer_base', ['info' => $info, 'host' => $host]); ?>
