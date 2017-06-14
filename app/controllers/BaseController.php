<?php
namespace App\controllers;

use Service\Mail;
use Service\View;
use Nette\Mail\SmtpMailer;

class BaseController
{
    protected $view;

    protected $mail;

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

        $mail = $this->mail;
        if ($mail instanceof Mail) {
            $mailer = new SmtpMailer($mail->config);
            $mailer->send($mail);
        }
    }
}