<?php

class AdminController
{
    public function index()
    {
        require(new ViewModel())->extendPath('views/admin/authenticate/' . PAGE_NAME . '.view.php');
    }

    public function login()
    {
        $content = [];

        $adminname = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $admin = Admin::login($adminname, $password);

        if (!empty($admin)) :
            if (!$admin[0]) :
                $content['errorMessage'] = $admin[1];

                view('admin/login', $content);
                return false;
            endif;

            $admin = $admin[1];

            if (!empty($admin)) :
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

    public function logout()
    {
        session_destroy();
        return redirect('/');
    }
}
