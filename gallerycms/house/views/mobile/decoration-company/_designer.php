    <!-- 设计师 -->
    <div class="designer " id="content-designer">
        <?php foreach ($infos as $info) { ?>
        <div class="list">
            <div class="list01">
			    <img src="<?= $info['photo']; ?>" alt="<?= $info['name']; ?>">
                <div class="listbg"></div>
                <div class="design">免费为我做设计</div>
                <div class="touxiang"><img src="<?= $info['photo']; ?>"></div>
				<span><?= $info['name']; ?></span>
            </div>
            <div class="list04">
                <a class="time">从业年限<span><?= $info['aptitude']; ?></span></a>
				<a class="type">擅长风格<span><?= $info['record']; ?></span></a>
            </div>
        </div>
        <?php } ?>
    </div>
