<?php

class AdminController
{
    public static function index()
    {
        require(new ViewModel())->extendPath('views/admin/dashboard.view.php');
    }
}