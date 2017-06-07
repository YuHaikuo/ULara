<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('test', function(){
	echo 'hello world';
});

Macaw::get('', 'App\controllers\HomeController@home');

Macaw::get('(:all)', function($uri){
	echo 'Not Found '.$uri;
});

Macaw::dispatch();
