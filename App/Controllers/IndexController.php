<?php

class IndexController
{
    public static function index()
    {
        require(new ViewModel())->extendPath('views/index.view.php');
    }
}
