<?php
use Illuminate\Database\Capsule\Manager as Capsule;

//定义BASE_PATH
define('BASE_PATH', __DIR__);

//Autoload自动载入
require '../vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule;

$capsule->addConnection(require '../config/database.php');

$capsule->bootEloquent();

//whoops 错误提示
$whoops = new \Whoops\Run();

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());

$whoops->register();