<?php
namespace App\controllers;

use Service\View;

class BaseController
{
    protected $view;

    public function __construct()
    {

    }

    public function __destruct()
    {
        $view = $this->view;
        if ($view instanceof View ) {
            extract($view->data);
            require $view->view;
        }
    }
}