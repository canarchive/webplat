<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;

?>

<?php
if (!empty($model)) {
    echo $this->render('_base_info', ['model' => $model, 'modelOwner' => $modelOwner]);
}
echo $this->render('_base_owner', ['model' => $model, 'modelOwner' => $modelOwner]);
echo $this->render('_listinfo_owner_house', ['modelGrouponOwner' => $model, 'modelOwner' => $modelOwner, 'ownerHouseInfos' => $ownerHouseInfos]);
echo $this->render('_listinfo_callback_log', ['modelGrouponOwner' => $model, 'modelOwner' => $modelOwner, 'callbackLogInfos' => $callbackLogInfos]);
?>
<script>
function addElemForOwner(data)
{
	var url = '';
	var table = data.table;
    $.ajax({
	    type: "POST",
	    url: url,
		data: data,
        success: function(response) {
			var status = response.status;
			if (status == 200) {
				if (table == 'callback') {
					var newContent = "<tr>"
						+ "<td>" + response.created_at + "</td>"
						+ "<td>" + response.created_at + "</td>"
						+ "<td>" + data.content + "</td>"
						+ "<td><textarea onchange='updateElemForOwner(\"callback\", " + response.id + ", \"note\", this.value)' row=\"2\" name=\"note\">" + data.note + "</textarea></td?";
						+ "</tr>";
				} else if (table == 'owner_house') {
					newContent = response.content;
				}
                alert('信息添加成功');
				$("#" + table + "_infos").append(newContent);
			} else {
                alert(response.message);
			}
		}
	});
}

function updateElemForOwner(table, info_id, field, value)
{
	var url = '';
	var data = {
	    'table': table,
		'info_id': info_id,
		'field': field,
		'value': value
	};
    $.ajax({
	    type: "POST",
	    url: url,
		data: data,
        success: function(data,status) {
            alert("Data: " + data + "\nStatus: " + status);
		}
	});
}
</script>
