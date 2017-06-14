<?php
namespace App\controllers;

use App\models\Home;
use Service\Mail;
use Service\View;
use Service\Redis;

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
        $this->sendResponse($re);
    }

    public function sendMailHand()
    {
        $this->mail = Mail::to('923027610@qq.com')->from('yhkwings@163.com')
            ->title('这是一封邮件，并测试是否被系统识别为垃圾邮件~')->content('<h1>Hello</h1>');
    }

    public function testRedis()
    {
        Redis::set('projectname', 'composer mvc');
        echo Redis::get('projectname');
    }
}