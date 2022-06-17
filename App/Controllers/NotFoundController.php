<?php

class NotFoundController
{
    public static function index()
    {
        require(new ViewModel())->extendPath('views/notfound.view.php');
    }
}
