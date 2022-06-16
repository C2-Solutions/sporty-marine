<?php

class AboutController
{
    public static function index()
    {
        require(new ViewModel())->extendPath('views/about.view.php');
    }
}
