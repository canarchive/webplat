<?php

$gridViewParams = [
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        'id',
		'manager_id',
		'manager_username',
		'roles',
		'menu_code',
		'menu_name',
		[
            'attribute' => 'created_at',
            'value'=> function($model){
                return  date('Y-m-d H:i:s',$model->created_at);
            },
        ],
		[
			'format' => 'raw',
			'attribute' => 'view',
			'value' => function($model) {
				$data = json_encode(unserialize($model->data));
				$value = <<<EOD
<a data-pjax="0" aria-label="查看" title="查看" href="javascript:showInfo({$model->id});" class="btn-setting-log">
    <span class="glyphicon glyphicon-eye-open" ><input type="hidden" id="data_{$model->id}" value='$data' /></span>
</a>
EOD;
               return $value;
			},
		],
    ],
];

$searchContent = $this->render('_search', array_merge($searchDatas, ['model' => $searchModel]));
echo $this->render('@app/views/common/listinfo', ['gridViewParams'  => $gridViewParams, 'searchContent' => $searchContent]);
?>
<script>
function showInfo(id)
{
	var data = $("#data_" + id).val();
	data = eval('(' + data + ')');
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
                                    日志详情
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
