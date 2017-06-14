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

    public function sendResponse($data, $status = 200, $contentType = 'application/json')
    {
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->getStatusCodeMessage($status);
        header($status_header);
        header('Content-type: '. $contentType .'; charset=utf-8');
        echo json_encode($data);
        exit;
    }

    public function getStatusCodeMessage($status)
    {
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error'
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
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