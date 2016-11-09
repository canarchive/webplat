<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['sms'];
$this->params['jsFooterFiles'] = [
	'jquery-2.1.0', 'foundation.min',
	'main', 'footable', 'tooltips', 'mustache', 'sms'
];
$this->params['currentNav'] = 'owner';
Yii::$app->params['seoTitle'] = '业主备注列表-' . Yii::$app->params['seoTitle'];
?>
<div class="container">
    <?= $this->render('_nav', ['curAction' => 'index']); ?>
    <section class="main-wrap sms-container">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">业主信息</div>
            </div>
            <ul class="breadcrumbs">
			    <li>针对业主<b><?= $ownerName; ?></b><b><?= $houseAddress; ?></b>的备注信息</li>
        </div>
        <div class="row full-width">
            <div class="small-12 columns">
                <div class="block">
                    <div class="block-hd">
                        <h2>业主列表</h2></div>
                    <div class="block-bd">
                        <table class="table table-bordered sms-template-list footable">
                            <thead>
                                <tr>
                                    <th class=""></th>
                                    <th data-hide="phone,tablet" class="time">时间</th>
                                    <th data-hide="phone,tablet" class="time">内容</th>
                            </thead>
                            <tbody>
                                <?php foreach ($infos as $info) { ?>
                                <?php if (!empty($info['content'])) { ?>
                                <tr>
								    <td><span class="label radius info">商家留言</span></td>
								    <td><?= date('Y-m-d H:i:s', $info['created_at']); ?></td>
								    <td><?= $info['content']; ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
								    <td><span class="label radius success">平台备注</span></td>
								    <td><?= date('Y-m-d H:i:s', $info['reply_at']); ?></td>
								    <td><?= $info['reply']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="pagination-centered"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>
<script>
function viewNote()
{
	var url = '<?= Url::to(['/house/owner/view-ajax']); ?>';
	var data = {
		'_csrf': $('#_csrf').val(),
		'type': 'notelist',
		'id': <?= $id; ?>
	};

    $.ajax({
	    type: "POST",
	    url: url,
		data: data,
        success: function(data,status) {
		}
	});
}
viewNote();
</script>

