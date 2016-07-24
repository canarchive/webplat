<ul class='steps'>
    <li class='one active'>
        <div class='step-content palm-right-text'>
            <h5 class='step-heading'>填写账户</h5>
            <div class='step-gradient'></div>
        </div>
	</li><li class='two <?php if ($step >= 2) { echo 'active'; } ?>'>
        <div class='step-content palm-right-text'>
            <h5 class='step-heading'>验证身份</h5>
            <div class='step-gradient'></div>
        </div>
	</li><li class='three <?php if ($step >= 3) { echo 'active'; } ?>'>
        <div class='step-content palm-right-text'>
            <h5 class='step-heading'>重置密码</h5>
            <div class='step-gradient'></div>
        </div>
	</li><li class='four <?php if ($step >= 4) { echo 'active'; } ?>'>
        <div class='step-content'>
            <h5 class='step-heading'>完成</h5>
            <div class='step-gradient'></div>
        </div>
    </li>
</ul>
