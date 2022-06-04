<?php

class Admin
{
    public static function login($adminname, $password)
    {
        global $conn;

        $admin = [];
        $hashes_pwd = '';
        $sql = "SELECT `id`, `username`, `password` FROM `admins` WHERE `username` = '$adminname'";

        if ($query = $conn->query($sql)) :
            foreach ($query as $row) :
                $admin['id']         =   $row['id'];
                $admin['username']   =   $row['username'];

                $hashes_pwd = $row['password'];
            endforeach;

            if (!empty($admin['id'])) :
                if ($hashes_pwd === $password) :
                    return [true, $admin];
                endif;
            endif;
        endif;

        //user not logged in
        return [false, 'De opgegeven gegevens komen niet overeen of gebruiker bestaat niet'];
    }
}
