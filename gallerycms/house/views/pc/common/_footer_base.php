<!-- page footer link -->
<div class="footer-links">
    <div class="links">
        <?php
        if (isset($this->params['friendLink'])) { 
    	    echo $this->render('./_friend'); 
        }
        ?>
        <div class="links-footer">
            <div class="links-left">
			    <p><?= Yii::$app->params['siteCopyRightInfo']; ?></p>
				<p><?= Yii::$app->params['siteIcpInfo']; ?>&nbsp;&nbsp; <?= Yii::$app->params['siteHotline']; ?></p>
            </div>
            <div class="links-right">
                <a></a>
                <a id='___szfw_logo___' href='https://credit.szfw.org/CX20151215012655370386.html' target='_blank' rel="nofollow"></a>
                <a></a>
            </div>
        </div>
    </div>
</div>
