<?php

namespace app\comtroller;

use bootstrap\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function show()
    {

        echo "index/show";
    }

    public function index()
    {
        return $this->view->make("index")->with("name", "你的名字是");
    }


    public function login()
    {
        dd($_SESSION['code']);
        return $this->view->make("login");
    }

    public function code()
    {
        header('Content-type: image/jpeg');
        $builder = new  CaptchaBuilder();
        $builder->build();
        $_SESSION['code'] = $builder->getPhrase();
        $builder->output();
    }

}


?>