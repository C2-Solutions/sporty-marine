<?php

class SetupController
{
    public static function index()
    {
        var_dump(self::verifyAccount());
        exit();
        if (!self::verifyAccount()) {
            (new NotFoundController())->index();
        } else {
            require(new ViewModel())->extendPath('views/admin/authentication/setup.view.php');
        }
    }

    // Verifies that no account exists yet.
    private static function verifyAccount(): bool
    {
        global $pdo;

        echo count($pdo->prepare('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC));
        return count($pdo->prepare('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC)) == 0;
    }
}
