<?php

class Admin
{
    // public static function loginOld($adminname, $password)
    // {
    //     global $pdo;

    //     $admin = [];
    //     $hashes_pwd = '';
    //     $sql = "SELECT `id`, `username`, `password` FROM `users` WHERE `username` = '$adminname'";

    //     if ($query = $pdo->query($sql)) {
    //         foreach ($query as $row) :
    //             $admin['id'] = $row['id'];
    //             $admin['username'] = $row['username'];
    //             $hashes_pwd = $row['password'];
    //         endforeach;

    //         if (!empty($admin['id']) && ($hashes_pwd === $password)) {
    //             return [true, $admin];
    //         }
    //     }

    //     //user not logged in
    //     return [false, 'De opgegeven gegevens komen niet overeen of gebruiker bestaat niet'];
    // }
}
