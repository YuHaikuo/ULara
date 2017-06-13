<?php
namespace App\models;

class Home extends Base
{
    protected $table = 'home';

    protected $fillable = ['site_name', 'status'];

    public function getMsg()
    {
        /*测试读从库*/
        return $this->where('id', 3)->get()->toArray();
    }

    public function addMsg()
    {
        /*测试写主库*/
        $arr = ['site_name'=>'不用猜了哈哈哈','status'=>1];
        return $this->insert($arr);
    }
}