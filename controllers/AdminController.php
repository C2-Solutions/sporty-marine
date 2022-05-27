<?php

class AdminController
{
    public $models;

    public function __construct()
    {
        $this->models = new Models();
    }

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

    public function adminModelIndex()
    {
        $content['models'] = false;

        $models = $this->models->getAll();

        if(true === !empty($models)) :
            $content['products'] = $models;
        endif;

        view('admin/models', $content);
    }
}
