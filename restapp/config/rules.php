<?php
return [
 	'PUT,PATCH <module>/users/<id>' => '<module>/user/update',
    'GET,HEAD <module>/users/<id>' => '<module>/user/view',
    'GET,HEAD <module>/users' => '<module>/user/index',
    'POST <module>/user/signin' => '<module>/user/signin',
    'POST <module>/user/signup' => '<module>/user/signup',

 	'PUT,PATCH <module>/addresses/<id>' => '<module>/user-address/update',
    'DELETE <module>/addresses/<id>' => '<module>/user-address/delete',
    'GET,HEAD <module>/addresses/<id>' => '<module>/user-address/view',
    'POST <module>/addresses' => '<module>/user-address/create',
    'GET,HEAD <module>/addresses' => '<module>/user-address/index',

    'GET,HEAD <module>/regions' => '<module>/region/index',
    'GET,HEAD <module>/regions/<id>' => '<module>/region/view',

    'POST <module>/sms/generate-code' => '<module>/sms/generate-code',
    'POST <module>/sms/check-code' => '<module>/sms/check-code',

 	'PUT,PATCH <module>/carts/<id>' => '<module>/cart/update',
    'DELETE <module>/carts/<id>' => '<module>/cart/delete',
    'GET,HEAD <module>/carts/<id>' => '<module>/cart/view',
    'GET,HEAD <module>/carts/all' => '<module>/cart/clear',
    'POST <module>/carts' => '<module>/cart/create',
    'GET,HEAD <module>/carts' => '<module>/cart/index',

 	'PUT,PATCH <module>/order-infos/<id>' => '<module>/order-info/update',
    'DELETE <module>/order-infos/<id>' => '<module>/order-info/delete',
    'GET,HEAD <module>/order-infos/<id>' => '<module>/order-info/view',
    'POST <module>/order-infos' => '<module>/order-info/create',
    'GET,HEAD <module>/order-infos' => '<module>/order-info/index',

    'POST <module>/accounts' => '<module>/account/create',
    'POST <module>/accounts/ask' => '<module>/account/ask',
    'GET,HEAD <module>/accounts' => '<module>/account/index',
    'GET,HEAD <module>/pingback' => '<module>/account/pingback',

    'GET,HEAD <module>/user-paytrades/view' => '<module>/user-paytrade/view',

    'GET,HEAD <module>/coupons/<id>' => '<module>/coupon/view',
    'GET,HEAD <module>/coupons' => '<module>/coupon/index',

 	'PUT,PATCH <module>/showoffs/<id>' => '<module>/showoff/update',
    'DELETE <module>/showoffs/<id>' => '<module>/showoff/delete',
    'GET,HEAD <module>/showoffs/<id>' => '<module>/showoff/view',
    'POST <module>/showoffs' => '<module>/showoff/create',
    'GET,HEAD <module>/showoffs' => '<module>/showoff/index',

 	'PUT,PATCH <module>/showoff-comments/<id>' => '<module>/showoff-comment/update',
    'DELETE <module>/showoff-comments/<id>' => '<module>/showoff-comment/delete',
    'GET,HEAD <module>/showoff-comments/<id>' => '<module>/showoff-comment/view',
    'POST <module>/showoff-comments' => '<module>/showoff-comment/create',
    'GET,HEAD <module>/showoff-comments' => '<module>/showoff-comment/index',

    'GET,HEAD <module>/goods/<id>' => '<module>/goods/view',
    'GET,HEAD <module>/goods' => '<module>/goods/index',

 	'PUT,PATCH <module>/goods-comments/<id>' => '<module>/goods-comment/update',
    'DELETE <module>/goods-comments/<id>' => '<module>/goods-comment/delete',
    'GET,HEAD <module>/goods-comments/<id>' => '<module>/goods-comment/view',
    'POST <module>/goods-comments' => '<module>/goods-comment/create',
    'GET,HEAD <module>/goods-comments' => '<module>/goods-comment/index',

    'GET,HEAD <module>/categories' => '<module>/category/index',
    'GET,HEAD <module>/categories/<id>' => '<module>/category/view',

    'GET,HEAD <module>/brands' => '<module>/brand/index',
    'GET,HEAD <module>/brands/<id>' => '<module>/brand/view',

];
