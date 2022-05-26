<?php

class AdminController
{
    public function index()
    {
        view('admin/login');
    }

    public function login()
    {
        self::dashboardIndex();
    }

    public function dashboardIndex()
    {
        view('admin/dashboard');
    }


}
