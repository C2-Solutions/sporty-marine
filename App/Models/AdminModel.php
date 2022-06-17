<?php

class Admin
{
    public static function login($username, $password)
    {
        global $pdo;

        if ($stmt = $pdo->prepare('SELECT id, password FROM users WHERE username = :username')) {
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
            $stmt->bindparam('username', $_POST['username']);
            $stmt->execute();
            // Store the result so we can check if the account exists in the database.
            $var = $stmt->fetch();

            $id = 

            var_dump($var['id']);
            exit();

            if ($stmt->num_rows > 0) {
                $stmt->bindparam($id, $password);
                $stmt->fetch();
                // Account exists, now we verify the password.
                // Note: remember to use password_hash in your registration file to store the hashed passwords.
                if (password_verify($_POST['password'], $password)) {
                    // Verification success! User has logged-in!
                    // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                    session_regenerate_id();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['name'] = $_POST['username'];
                    $_SESSION['id'] = $id;
                    echo 'Welcome ' . $_SESSION['name'] . '!';
                } else {
                    // Incorrect password
                    echo 'Incorrect username and/or password!';
                }
            } else {
                // Incorrect username
                echo 'Incorrect username and/or password!';
            }
        }
    }

    
    public static function loginOld($adminname, $password)
    {
        global $pdo;

        $admin = [];
        $hashes_pwd = '';
        $sql = "SELECT `id`, `username`, `password` FROM `users` WHERE `username` = '$adminname'";

        if ($query = $pdo->query($sql)) {
            foreach ($query as $row) :
                $admin['id'] = $row['id'];
                $admin['username'] = $row['username'];
                $hashes_pwd = $row['password'];
            endforeach;

            if (!empty($admin['id']) && ($hashes_pwd === $password)) {
                return [true, $admin];
            }
        }

        //user not logged in
        return [false, 'De opgegeven gegevens komen niet overeen of gebruiker bestaat niet'];
    }
}
