<?php
$controllerForJs = isset($this->params['controllerForJs']) ? $this->params['controllerForJs'] : '';
?>
<?php if (!empty($controllerForJs)) { ?>
<script>
(function() {
	var controllerNameWithAction = "<?= $controllerForJs; ?>".split('@');
    var controllerName = controllerNameWithAction[0];
    var actionName = controllerNameWithAction[1];
    var controller = SHOOT.controller[controllerName];
    if (controller) {
        action = controller()[actionName];
        if (action) {
            $(function() {
                vm = action();
            });
        }
    }
    // else console.log(controllerNameWithAction);
})();
</script>
<?php } ?>

<!-- baidu-start -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?2f240d770269e8e329da54c65d56bb65";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!-- baidu-end -->
<?php if (isset($this->params['pingxxPay'])) { ?>
<script type="text/javascript" src="https://one.pingxx.com/lib/pingpp_one.js"></script>
<?php } ?>
</body>
</html>
