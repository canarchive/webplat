<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="row">
    <div class="box col-md-12">
        <?php $i = 1; foreach ($infos as $database => $tables) { ?>
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
			    <h2><i class="glyphicon glyphicon-user"></i><?= $database; ?></h2>
                <div class="box-icon"> </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered responsive">
                    <tbody>
                    <?php foreach ($tables as $table => $info) { ?>
                    <tr>
					    <td><?= $table; ?></td>
                        <td><?= $info['comment']; ?></td>
						<td>
						    <a data-pjax="0" aria-label="查看" title="查看" href="javascript:showInfo(<?= $i; ?>);" class="btn-setting-log">
							    <span class="glyphicon glyphicon-eye-open" ><input type="hidden" id="data_<?= $i; ?>" value='<?= json_encode($info['fields']); ?>' /></span>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<script>
function showInfo(id)
{
	var data = $("#data_" + id).val();
	data = eval('(' + data + ')');
	console.log(data);
	var content = '';
	$.each(data, function(index,item) { 
        content += '<tr><th>' + index + '</th><td>' + item + '</td></tr>';
    }); 	
   	$('#content_view').html(content);
   	$('#logModal').modal('show');
}
</script>
<div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="logModal" class="modal fade in" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-inner">
                            <div class="box-header well" data-original-title="">
                                <h2>
                                    <i class="glyphicon glyphicon-edit"></i>
                                    字段列表详情
                                </h2>
                                <div class="box-icon"></div>
                            </div>
                            <div class="box-content">
                                <table class="table table-striped table-bordered detail-view" id="w0">
                                    <tbody id="content_view"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a data-dismiss="modal" class="btn btn-default" href="#">Close</a>
            </div>
        </div>
    </div>
</div>
