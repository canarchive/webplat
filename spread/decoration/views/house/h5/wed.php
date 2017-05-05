<?php echo $this->render('_header', ['info' => $info, 'host' => $host]); ?>
	<div class="main H_main">
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
			<div class="L_zhuangxiu">
				<p>婚房不仅要满足二人世界的浪漫生活需求，也要给未来1+1=3的生活留出足够的拓展空间。</p>
			</div>
			<!--主卧-->
			<div class="L_kzao">
				<dl>
					<dt>主卧</dt>
					<dd>
						<b>温馨婚房合理布局 实用率+10%</b><br />色调搭配暖色为主  空间利用考虑未来规划
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/HK_bg.jpg" />
				</div>
				
			</div>
			<!--儿童房-->
			<div class="L_kzao L_kzao2">
				<dl>
					<dt>儿童房</dt>
					<dd>
						<b>合理搭配布局 保证孩子健康成长</b><br />集观察、思考、游戏为一体的宝宝成长空间
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/HK_bg2.jpg" />
				</div>
			</div>
			<!--卫生间-->
			<div class="L_kzao L_kzao3">
				<dl>
					<dt>卫生间</dt>
					<dd>
						<b>匆忙的早晨，洗澡化妆两不干扰</b><br />干湿分离，狭小空间奇妙设计
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/HK_bg3.jpg" />
				</div>
				<ul>
					<li><span>干湿分离-</span>洗澡化妆互不干扰</li>
					<li><span>马桶-</span>经典巧妙</li>
					<li><span>浴缸+淋浴-</span>满足全家不同需求</li>
				</ul>
				
			</div>
			<!--储物-->
			<div class="L_kzao L_kzao4">
				<dl>
					<dt>储物</dt>
					<dd>
						<b>每一寸空间充分利用</b><br />家中的物品随着日子的流逝只会越来越多，强大的储物空间必不可少。
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/HK_bg4.jpg" />
				</div>
				
			</div>
			<!--细节-->
			<div class="L_kzao L_kzao5">
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/HK_bg5.jpg" />
				</div>
				
			</div>
            <?php echo $this->render('_signup', ['info' => $info, 'host' => $host]); ?>
		</section>
        <?php echo $this->render('_footer', ['info' => $info, 'host' => $host, 'view' => $view]); ?>
	</div>
<input type="hidden" id="position" value="wed" />
<input type="hidden" id="position_name" value="婚房装修" />
<?php echo $this->render('_footer_base', ['info' => $info, 'host' => $host]); ?>
