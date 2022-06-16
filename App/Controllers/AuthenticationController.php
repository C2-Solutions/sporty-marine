<?php

class AuthenticationController
{
    public static function index()
    {
        require(new ViewModel())->extendPath('views/admin/authenticate/' . PAGE_NAME . '.view.php');
    }

    // Log in user, create new session
    public static function login()
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

    // Log out user, destroy session
    public static function logout()
    {
        return;
    }

    // Send an email to invite a new user, create token
    public static function invite()
    {
        return;
    }

    // Delete user from the database, can not be current user
    public static function delete()
    {
        return;
    }
}
