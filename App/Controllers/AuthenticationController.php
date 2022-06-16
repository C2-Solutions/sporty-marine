<?php

class AuthenticationController
{
    public static function loginIndex()
    {
        require(new ViewModel())->extendPath('views/admin/authentication/login.view.php');
    }

    public static function logoutIndex()
    {
        require(new ViewModel())->extendPath('views/admin/authentication/logout.view.php');
    }

    public static function loginUser()
    {
        if (!isset($_POST['username'], $_POST['password'])) {
            // Could not get the data that should have been sent.
            exit('Please fill both the username and password fields!');
        }

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        self::verifyLogin($username, $password);
        redirect('');
    }

    // Log out user, destroy session
    public static function logoutUser()
    {
        session_destroy();
        session_unset();
        unset($_SESSION["loggedin"]);
        $_SESSION = array();
    }

    private static function verifyLogin($password)
    {
        global $pdo;

        if ($stmt = $pdo->prepare('SELECT id, password FROM users WHERE username = :username')) {
            $stmt->bindparam('username', $_POST['username']);
            $stmt->execute();
            $logged = $stmt->fetch();

            if ($logged) {
                $stmt->bindparam($logged['id'], $password);
                $stmt->fetch();

                $hashPwd = self::hashPassword($password);
                if (password_verify($_POST['password'], $hashPwd)) {
                    session_regenerate_id();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['last_changed'] = date("Y-m-d H:i:s");

                    echo 'Welcome ' . $_SESSION['username'] . '!';
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

    private static function hashPassword($password)
    {
        return password_hash($password, PASSWORD_ARGON2ID);
    }

    public static function createUser()
    {
        global $conn;

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $hashedPwd = self::hashPassword($password);

        try {
            $conn->create('users', ['id', 'username', 'password'], [1, $username, $hashedPwd]);
            echo "Account has been created! Redirecting you to the login page...";
            header("refresh:3;url=login");
        } catch (PDOException $e) {
            echo "Max limit of accounts has been exceeded! Redirecting you to home now...";
            header("refresh:3;url=/");
        } catch (Exception $e) {
            echo "Some kind of error occurred! Redirecting you to home now...";
            header("refresh:3;url=/");
        }
    }
}
