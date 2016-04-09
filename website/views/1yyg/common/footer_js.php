<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/1yyg/js/JQuery181.js"></script>
<script language="javascript" type="text/javascript">
var Base = {
  head: document.getElementsByTagName("head")[0] || document.documentElement,
  Myload: function(B, A) {
    this.done = false;
    B.onload = B.onreadystatechange = function() {
      if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
        this.done = true;
        A();
        B.onload = B.onreadystatechange = null;
        if (this.head && B.parentNode) {
          this.head.removeChild(B)
        }
      }
    }
  },
  getScript: function(A, C) {
    var B = function() {};
    if (C != undefined) {
      B = C
    }
    var D = document.createElement("script");
    D.setAttribute("language", "javascript");
    D.setAttribute("type", "text/javascript");
    D.setAttribute("src", A);
    this.head.appendChild(D);
    this.Myload(D, B)
  },
  getStyle: function(A, CB) {
    var B = function() {};
    if (CB != undefined) {
      B = CB
    }
    var C = document.createElement("link");
    C.setAttribute("type", "text/css");
    C.setAttribute("rel", "stylesheet");
    C.setAttribute("href", A);
    this.head.appendChild(C);
    this.Myload(C, B)
  }
}
function GetVerNum() {
  var D = new Date();
  return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0': D.getMinutes().toString().substring(0, 1))
}
Base.getScript('<?= Yii::getAlias('@asseturl/website'); ?>/1yyg/js/Bottom.js?v=' + GetVerNum());

</script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl/website'); ?>/1yyg/js/yungou1121.js"></script>
<div style="display: none;">
  <script src="http://s96.cnzz.com/z_stat.php?id=1000146610&web_id=1000146610" language="JavaScript"></script>
</div>

