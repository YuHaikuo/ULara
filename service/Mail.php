<?php
namespace Service;

use Nette\Mail\Message;

class Mail
{
    public $config;

    protected $from;

    protected $to;

    protected $title;

    protected $body;

    function __construct($to)
    {
        
    }
}