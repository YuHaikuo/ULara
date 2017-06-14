<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('test', function(){
	echo 'hello world';
});

Macaw::get('', 'App\controllers\HomeController@home');
Macaw::get('testSendMail', 'App\controllers\HomeController@sendMailHand');
Macaw::get('testRedis', 'App\controllers\HomeController@testRedis');

Macaw::$error_callback = function() {
	throw new Exception("404 Not Found 您访问的内容不存在");
};

Macaw::dispatch();
