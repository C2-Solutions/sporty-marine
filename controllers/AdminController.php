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
        $content = [];

        $adminname = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $admin = Admin::login($adminname, $password);

        if (true == !empty($admin)) :
            if (false === $admin[0]) :
                $content['errorMessage'] = $admin[1];

                view('admin/login', $content);
                return false;
            endif;

            $admin = $admin[1];

            if (true == !empty($admin)) :
                $_SESSION['adminid']     =   (!empty($admin['id'])) ? $admin['id'] : '';
                $_SESSION['username']    =   (!empty($admin['username'])) ? $admin['username'] : '';

                return redirect('admin-dashboard');
            endif;
        endif;

        $content['errorMessage'] = 'Er heeft zich een fout voor gedaan';
        view('admin/login', $content);
        return false;
    }

    public function dashboardIndex()
    {
        view('admin/dashboard');
    }

    public function adminModelIndex()
    {
        $content['models'] = false;

        $models = $this->models->getAll();

        if (true === !empty($models)) :
            $content['models'] = $models;
        endif;

        view('admin/models', $content);
    }

    public function logout()
    {
        session_destroy();
        return redirect('/');
    }
}
