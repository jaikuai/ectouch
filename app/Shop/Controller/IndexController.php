<?php

namespace App\Shop\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $this->show('Hello ECTouch','utf-8');
    }
}