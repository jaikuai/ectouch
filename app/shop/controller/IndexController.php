<?php

namespace app\shop\controller;

class IndexController
{
    public function index()
    {
        return 'Shop Init.';
    }

    public function hello($name = 'ECTouch')
    {
        return 'hello,' . $name;
    }
}
