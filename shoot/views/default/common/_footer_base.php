<script type="text/javascript">
    $(function() {});
</script>
<!-- 百度统计代码 -->
<script>
    var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?9cb8846b548404438c81aaa02eda4f0f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!-- 谷歌统计代码 -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
        function() { (i[r].q = i[r].q || []).push(arguments)
        },
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-66238290-1', 'auto');
    ga('send', 'pageview');
</script>
<!--oppo统计-->
<script>
    var _optj = _optj || [];

    (function() {
        var op = document.createElement("script");
        op.src = "http://static.oppo.com/tj/optj-1.0.4.min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(op, s);
    })();
</script>
<!--华扬统计-->
<script type="text/javascript">
    var _utaq = _utaq || [];
    _utaq.push(["trackPageView"]);
    _utaq.push(["enableLinkTracking"]); (function() {
        var utu = (("https:" == document.location.protocol) ? "https": "http") + "://sit.gentags.net/";
        _utaq.push(["setTrackerUrl", utu + "site/unids.gif"]);
        _utaq.push(["setSiteId", "1351"]);
        var utd = document,
        ut = utd.createElement("script"),
        s = utd.getElementsByTagName("script")[0];
        ut.type = "text/javascript";
        ut.defer = true;
        ut.async = true;
        ut.src = utu + "adagent/js/uta.js";
        s.parentNode.insertBefore(ut, s);
    })();
</script>
<noscript>
<img src="http://sit.gentags.net/site/img?site=1351" style="border:0" alt="" />
</noscript>
<script type="text/javascript">
    $(function() {
        $("body").on("click", ".oppo-tj",
        function() {
            if (typeof $(this).data('tj') != 'undefined' && typeof _optj != 'undefined') {
                var tj = $(this).data('tj');
                var tjs = tj.split("|");
                _optj.push(['_trackEvent', tjs[0], tjs[1], tjs[2], tjs[3]]);
            };
        });
    });
</script>
</body>
</html>
