<?php
use Illuminate\Database\Capsule\Manager as Capsule;
//Autoload自动载入
require '../vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection(require '../config/database.php');

$capsule->bootEloquent();
//配置路由
require '../config/routes.php';