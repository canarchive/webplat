<?php
use yii\helpers\Url;

?>
<aside class="sidebar">
    <ul class="side-list">
	    <li <?php if ($curAction == 'index') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/info/index']); ?>">个人面板</a>
        </li>
	    <li <?php if ($curAction == 'setting') { echo 'class="active"'; } ?>>
		    <a href="<?= Url::to(['/info/setting']); ?>">账号设置</a>
        </li>
    </ul>
</aside>
