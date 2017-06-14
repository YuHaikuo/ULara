<?php
namespace App\controllers;

use App\models\Home;
use Service\View;

class HomeController extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new Home();
    }

    public function home()
    {
        $re = $this->model->getOne();
        $this->view = View::make('home')->with('home', $re);
    }
}