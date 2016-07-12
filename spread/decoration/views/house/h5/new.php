<?php echo $this->render('_header', ['info' => $info, 'host' => $host]); ?>
	<div class="main H_main X_main">
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
				<p>奋斗数年终于有了属于自己的房子。这里不再是仅供睡觉的出租屋，在这里有生活、有情调、有期盼。</p>
			</div>
			<!--主卧-->
			<div class="L_kzao">
				<dl>
					<dt>主卧</dt>
					<dd>
						<b>设计巧妙 轻松扩容5㎡</b><br />飘窗外延 增加房屋利用空间
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/XK_bg.jpg" />
				</div>
				
			</div>
			<!--客房-->
			<div class="L_kzao L_kzao2">
				<dl>
					<dt>客房</dt>
					<dd>
						<b>空间强利用  储物娱乐两不误</b><br />小面积大作用，轻松扩容8㎡
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/XK_bg1.jpg" />
				</div>
			</div>
			<!--厨房-->
			<div class="L_kzao L_kzao3">
				<dl>
					<dt>厨房</dt>
					<dd>
						<b>厨房设计，内藏乾坤</b><br />巧妙利用空间，嵌入式设计厨房设备
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/XK_bg2.jpg" />
				</div>
			</div>
			<!--阳台-->
			<div class="L_kzao L_kzao4">
				<dl>
					<dt>阳台</dt>
					<dd>
						<b>合理利用阳台，巧妙扩容10%</b><br />阳光、生活、休闲和谐统一
					</dd>
				</dl>
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/XK_bg3.jpg" />
				</div>
				
			</div>
			<!--细节-->
			<div class="L_kzao L_kzao5">
				<div class="K_img">
					<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/XK_bg4.jpg" />
				</div>
				
			</div>
            <?php echo $this->render('_signup', ['info' => $info, 'host' => $host]); ?>
		</section>
        <?php echo $this->render('_footer', ['info' => $info, 'host' => $host, 'view' => $view]); ?>
	</div>
<input type="hidden" id="position" value="new" />
<input type="hidden" id="position_name" value="新房装修" />
<?php echo $this->render('_footer_base', ['info' => $info, 'host' => $host]); ?>
