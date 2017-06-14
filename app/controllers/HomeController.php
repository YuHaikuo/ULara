<?php
namespace App\controllers;

use App\models\Home;
use Service\Mail;
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

    public function sendMailHand()
    {
        $this->mail = Mail::to('923027610@qq.com')->from('yhkwings@163.com')
            ->title('这是一封邮件，并测试是否被系统识别为垃圾邮件~')->content('<h1>Hello</h1>');
        echo 1;
    }
}