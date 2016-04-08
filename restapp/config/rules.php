<?php
return [
 	'PUT,PATCH <module>/users/<id>' => '<module>/user/update',
    'GET,HEAD <module>/users/<id>' => '<module>/user/view',
    'GET,HEAD <module>/users' => '<module>/user/index',

 	'PUT,PATCH <module>/addresses/<id>' => '<module>/user-address/update',
    'DELETE <module>/addresses/<id>' => '<module>/user-address/delete',
    'GET,HEAD <module>/addresses/<id>' => '<module>/user-address/view',
    'POST <module>/addresses' => '<module>/user-address/create',
    'GET,HEAD <module>/addresses' => '<module>/user-address/index',

    'POST <module>/user/signin' => '<module>/user/signin',
    'POST <module>/user/signup' => '<module>/user/signup',

    'GET,HEAD <module>/regions' => '<module>/region/index',
    'GET,HEAD <module>/regions/<id>' => '<module>/region/view',

    'POST <module>/sms/generate-code' => '<module>/sms/generate-code',
    'POST <module>/sms/check-code' => '<module>/sms/check-code',

    'GET,HEAD <module>/goods/<id>' => '<module>/goods/view',
    'GET,HEAD <module>/goods' => '<module>/goods/index',

    'GET,HEAD <module>/goods' => '<module>/goods/index',

 	'PUT,PATCH <module>/carts/<id>' => '<module>/cart/update',
    'DELETE <module>/carts/<id>' => '<module>/cart/delete',
    'GET,HEAD <module>/carts/<id>' => '<module>/cart/view',
    'POST <module>/carts' => '<module>/cart/create',
    'GET,HEAD <module>/carts' => '<module>/cart/index',

];
