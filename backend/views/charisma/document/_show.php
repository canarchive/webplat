<?php if (isset($style)) { echo $style; } ?>
<div id="menu">
	<h3 id="menu_title">目录</h3>
	<ul>
    <?php foreach ($datas as $key => $value) { ?>
	<li onclick="document.getElementById(currentItem).className = ''; currentItem = this.id; this.className = 'current';" <?php if ($key == 1) { echo 'class="current"'; } ?> id="i<?= $key; ?>"><a href="#p<?= $key; ?>"><?= $value['title']; ?></a></li>
    <?php } ?>
	</ul>
</div>
<div id="content">
    <?php foreach ($datas as $key => $value) { ?>
	<h3 id="p<?= $key; ?>"><?= $value['title']; ?></h3>
    <?= $value['content']; ?>
    <?php } ?>
		
	<div id="footer"> 最后修改时间：2013-09-26</div>
</div>
