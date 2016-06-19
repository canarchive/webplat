<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;

?>
<style>
#tip_message {
    z-index: 9999;
    position: fixed;
    left: 0;
    top: 40%;
    text-align: center;
    width: 100%;
}
 
#tip_message span {
    background-color: #03C440;
    opacity: .8;
    padding: 20px 50px;
    border-radius: 5px;
    text-align: center;
    color: #fff;
    font-size: 20px;
}
 
#tip_message span.error {
    background-color: #EAA000;
}
</style>
<?php
echo $this->render('_base_info', ['model' => $model]);
echo $this->render('_listinfo_address', ['model' => $model, 'addressInfos' => $addressInfos]);
?>
<script>
function addElemForUser(data)
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
				if (table == 'address') {
					var newContent = "<tr>"
						+ "<td>" + response.created_at + "</td>"
						+ "<td>" + response.created_at + "</td>"
						+ "<td>" + data.content + "</td>"
						+ "<td><textarea onchange='updateElemForUser(\"address\", " + response.id + ", \"note\", this.value)' row=\"2\" name=\"note\">" + data.note + "</textarea></td?";
						+ "</tr>";
				} else if (table == 'user_house') {
					var newContent = response.content;
				}
                ShowSuccessMessage("信息添加成功", 3000);
				$("#" + table + "_infos").append(newContent);
			} else {
                ShowErrorMessage(response.message, 3000);
			}
		}
	});
}

function updateElemForUser(table, info_id, field, value)
{
	var url = '';
	var data = {
	    'table': table,
		'info_id': info_id,
		'field': field,
		'value': value
	};
	console.log(data);
    $.ajax({
	    type: "POST",
	    url: url,
		data: data,
		dataType: "json",
        success: function(data) {
			if (data.status == 200) {
                ShowSuccessMessage("信息编辑成功", 3000);
			} else {
                ShowErrorMessage(data.message, 3000);
			}			
		}
	});
}
</script>
<script type="text/javascript">
$(document).ready(function(){
    //提示成功信息    
    ShowSuccessMessage = function(message, life) {
        var time = 5000;
        if (!life) {
            time = life;
        }
         
        if ($("#tip_message").text().length > 0) {
            var msg = "<span>" + message + "</span>";
            $("#tip_message").empty().append(msg);
        } else {
            var msg = "<div id='tip_message'><span>" + message + "</span>";
            $("body").append(msg);
        }
         
        $("#tip_message").fadeIn(time);
        setTimeout($("#tip_message").fadeOut(time), time);
    };
     
    //提示错误信息
    ShowErrorMessage = function(message, life) {
        ShowSuccessMessage(message, life);
        $("#tip_message span").addClass("error");
    };
     
    //ShowSuccessMessage("Hello success!", 5000); // 第二个参数life是指消息显示时间
    //ShowErrorMessage("Hello error!", 5000);
});
</script>
