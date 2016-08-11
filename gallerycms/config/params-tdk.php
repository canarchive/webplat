<?php 
return [
    'site-index' => [
        'title' => '{{CITYNAME}}室内装修_{{CITYNAME}}房屋装修_{{CITYNAME}}房子装修_{{CITYNAME}}室内设计-【{{CITYNAME}}{{SITENAME}}】',
        'keyword' => '{{CITYNAME}}室内装修,{{CITYNAME}}房屋装修,{{CITYNAME}}房子装修,{{CITYNAME}}室内设计',
        'description' => '【{{CITYNAME}}{{SITENAME}}】中国家装首选平台,免费提供{{CITYNAME}}多家装修公司进行多对一服务,让装修业主找到真正属于自己喜欢的装修公司。提供：室内装修,房屋装修,房子装修,室内设计,等装修设计一站式服务。',
    ];
    'decoration-company-index' =>  [
        //'title' => '{{CITYNAME}}装修公司_{{CITYNAME}}装修公司大全|排名 - {{CITYNAME}}{{SITENAME}}装修网',
        //'keyword' => '{{CITYNAME}}装修公司,{{CITYNAME}}装修公司大全,{{CITYNAME}}装修公司排名',
        //'description' => '{{SITENAME}}{{CITYNAME}}装修网是一家致力于为广大{{CITYNAME}}业主提供家装、家居、建材等装修服务的家装平台,专业正规{{CITYNAME}}装修公司推荐,帮助{{CITYNAME}}业主轻松搞定装修!',
        'title' => '{{CITYNAME}}装修公司哪家最好_{{CITYNAME}}装修公司十大排名_{{CITYNAME}}装修网站大全-【{{CITYNAME}}{{SITENAME}}】',
        'keyword' => '{{CITYNAME}}装修公司哪家好,{{CITYNAME}}装修网站,{{CITYNAME}}装修公司排名,{{CITYNAME}}装修公司十大排名,{{CITYNAME}}装修网站大全,{{CITYNAME}}装修公司大全',
        'description' => '【{{SITENAME}}】{{CITYNAME}}装修网罗列出{{CITYNAME}}装修公司网站大全,帮业主快速了解{{CITYNAME}}装修公司哪家好？{{CITYNAME}}装修公司十大排名,从而解决您的装修问题。',
    ],
    'decoration-company-show' => [
        'title' => "{$datas['info']['name']}_{{CITYNAME}}{$datas['info']['name']}公司-【{{CITYNAME}}{{SITENAME}}】",
        'keyword' => "{$datas['info']['name']},{$datas['info']['name']}公司,{{CITYNAME}}{{SITENAME}}官网",
        'description' => "【{{CITYNAME}}{{SITENAME}}】{$datas['info']['name']}是{{CITYNAME}}{{SITENAME}}官网提供的装修设计公司。{$datas['info']['name']}免费为广大{{CITYNAME}}业主提供专业的验房、设计、监理服务。了解{$datas['info']['name']}怎么样？速上{{CITYNAME}}{{SITENAME}}官网！",
    ],
    'decoration-company-show-working' => [
        'title' => "{{CITYNAME}}{$info['name']}_{$info['merchantInfo']['name']}-【{{CITYNAME}}{{SITENAME}}】",
        'keyword' => "{{CITYNAME}}{$info['name']},{$info['merchantInfo']['name']}",
        'description' => "【{{SITENAME}}】【南鸿】浙江南鸿装饰股份有限公司提供{{CITYNAME}}{$info['name']}装修施工的每个细节,{{CITYNAME}}业主可以清楚知道装修的每个环节。装修施工选择{$info['merchantInfo']['name']},就是选择放心! ",
    ],
    'sample-list' => [
        //'title' => '【装修案例效果图】装修案例图片_装修设计案例-{{SITENAME}}装修效果图',
        //'keyword' => '装修案例效果图,装修案例图片,装修设计案例',
        //'description' => '{{SITENAME}}装修案例效果图专区,提供最新装修案例图片,装修设计案例包括简约,现代,中式,欧式,美式,田园等装修效果图',
        'title' => "{$tagStr}装修案例风格_{$tagStr}家装实景图片欣赏{$pageStr}-【{{SITENAME}}】",
        'keyword' => "{$tagStr}装修案例,{$tagStr}装修风格,{$tagStr}装修实景图,{$tagStr}装修图片欣赏",
        'description' => "【{{SITENAME}}】装修图片频道为您提供{$tagStr}装修案例风格,{$tagStr}家装实景图片欣赏,包括客厅、卧室、厨房、书房、阳台、电视墙、卫生间等系列室内装修设计图片。",
    ],
    'sample-show' => [
        'title' => "{$info['name']}_{$info['house_type']}设计装潢案例_装修效果图-【{{SITENAME}}】",
        'keyword' => "{$info['name']},{$info['house_type']}设计装潢案例",
        'description' => "【{{SITENAME}}】装修效果图专区,为您提供国内外专业全面的{$info['name']} {$info['house_type']}设计装潢案例,涵盖最流行的{$info['name']} {$info['house_type']}设计装潢案例大全、案例,找装修图,上{{SITENAME}}。",
    ],
    'realcase-list' => [
        //'title' => '【装修案例】装修实景案例大全|{{SITENAME}}家装',
        //'keyword' => '装修案例 , 装修实景案例大全 , {{SITENAME}}家装',
        //'description' => '装修案例大全由{{SITENAME}}家装提供，装修实景案例效果图中每一个装修案例都是装修公司的良心作品。装修选择{{SITENAME}}家装，就是选择更多优质装修公司!',
        'title' => '{{CITYNAME}}装修效果图-{{CITYNAME}}装修设计-{{CITYNAME}}装修实例图片大全-{{CITYNAME}}{{SITENAME}}装修设计效果图',
        'keyword' => '装修效果图，装修设计，装修实例，装修图片大全，装修图片',
        'description' => '【{{SITENAME}}】装修设计效果图大全为您提供{{CITYNAME}}多家装修公司与多种风格的装修设计效果图图片，聚集了各种风格的客厅、卧室、电视墙、卫生间等装修效果供大家装修欣赏与参考。',
    ];
    'realcase-show' => [
        'title' => "{$info['name']}-{$info['merchantInfo']['name']}-{{CITYNAME}}-{{SITENAME}}",
        'keyword' => "{$info['name']}-{$info['merchantInfo']['name']}",
        'description' => "{$info['name']} 由{$info['merchantInfo']['name']}负责设计施工，每一处的装修细节都是经过{$info['merchantInfo']['name']}细心设计和施工的。装修选择{$info['merchantInfo']['name']}，就是选择放心!",
    ];
    'region-region' => [
        'title' => "{{CITYNAME}}{$info['name_short']}家装公司排名_{{CITYNAME}}{$info['name_short']}装饰装潢设计-【{{CITYNAME}}{{SITENAME}}】",
        'keyword' => "{CITYNAME}}{$info['name_short']}家装公司排名，{{CITYNAME}}{$info['name_short']}装潢设计，{{CITYNAME}}{$info['name_short']}装修网，{{CITYNAME}}{$info['name_short']}装饰公司",
        'description' => "【{{CITYNAME}}{{SITENAME}}】为您提供{{CITYNAME}}{$info['name_short']}家装公司排名大全，并免费提供{{CITYNAME}}{$info['name_short']}装修上门量房设计等服务，以及装饰装潢报价与设计方案。进行多对一装修设计量房报价服务,让装修业主找到真正属于自己喜欢的装修设计公司。",
    ],
    'feature-yanfang' => [
        'title' => '{{CITYNAME}}免费验房_验房注意事项_验房公司_验房流程-【{{CITYNAME}}{{SITENAME}}】',
        'keyword' => '{{CITYNAME}}免费验房,{{CITYNAME}}验房注意事项,{{CITYNAME}}验房公司,{{CITYNAME}}验房流程',
        'description' => '【{{CITYNAME}}{{SITENAME}}】免费验房服务,给您提供验房注意事项,最优质的验房公司,以及详细的验房流程,全方面检测房屋质量,让您装修有保障！',
    ],
    'feature-sheji' => [
        'title' => '{{CITYNAME}}装修免费上门量房_{{CITYNAME}}装修免费设计出图-【{{CITYNAME}}{{SITENAME}}】',
        'keyword' => '{{CITYNAME}}装修免费上门量房,{{CITYNAME}}装修免费设计,{{CITYNAME}}装修免费出图',
        'description' => '【{{CITYNAME}}{{SITENAME}}】{{CITYNAME}}装修网,免费量房让您足不出户,享受装修多对一VIP服务,马上在线预约吧,比比哪家更满意！让装修变得更简单。免费提供{{CITYNAME}}业主,免费上门量房,免费设计,免费报价服务。',
    ],
    'feature-jianli' => [
        'title' => '{{CITYNAME}}{{CITYNAME}}免费装修监理_{{CITYNAME}}免费家装监理-【{{CITYNAME}}{{SITENAME}}】',
        'keyword' => '{{CITYNAME}}免费装修监理,{{CITYNAME}}免费家装监理',
        'description' => '【{{SITENAME}}】{{CITYNAME}}家装首选平台,{{CITYNAME}}专业团队,一对一免费监理服务,装修设计一站式服务。',
    ],
];
