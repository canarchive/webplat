<?php
return [
    'cityInfos' => require(__DIR__ . '/to8to-city.php'),
    'companylist' => 'http://{{CITYCODE}}.to8to.com/company/list_{{PAGE}}.html',
    'showUrls' => [
        'certificate' => 'http://{{CITYCODE}}.to8to.com/zs/{{INFOID}}/integrity-certificate-1.html',
        'intro' => 'http://{{CITYCODE}}.to8to.com/zs/company{{INFOID}}/',
        'integrity' => 'http://{{CITYCODE}}.to8to.com/zs/integrity{{INFOID}}/',
        'index' => "http://{{CITYCODE}}.to8to.com/zs/{{INFOID}}/",
        //'news' => "http://bj.to8to.com/zs/news1009502/",
        //'news-1' => "http://bj.to8to.com/zs/1009502/news-1-1.html",
        //'connect' => "http://bj.to8to.com/zs/1009502/company-connect-1.html",
        //'star' => "http://bj.to8to.com/zs/fiveStar.php?uid=1009502",
    ],
    'infoUrls' => [
        'realcase' => 'http://{{CITYCODE}}.to8to.com/zs/{{INFOID}}/case-0-{{PAGE}}.html',
        'working' => 'http://{{CITYCODE}}.to8to.com/zs/visit.php?uid={{INFOID}}&act=0&page={{PAGE}}',
        'comment' => 'http://{{CITYCODE}}.to8to.com/zs/yz_dp.php?uid={{INFOID}}&page={{PAGE}}',
        'designer' => 'http://{{CITYCODE}}.to8to.com/zs/{{INFOID}}/team-0-{{PAGE}}.html',
    ],
];

//'deisgnerShow' => "http://bj.to8to.com/zs/1009502/team-display-t64989.html",
//'realcaseShow' => "http://bj.to8to.com/zs/1009502/3851140visit1-display-1.html",
//'workginShow' => "http://bj.to8to.com/zs/1009502/2307252visit1-display-1.html",
