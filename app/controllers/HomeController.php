<?php
namespace App\controllers;

use App\models\Home;

class HomeController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new Home();
    }

    public function home()
    {
        $re = $this->model->getMsg();
        var_dump($re);
    }
}