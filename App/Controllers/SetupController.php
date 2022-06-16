<?php

class SetupController
{
    public static function index()
    {
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

        // TODO: Fix. This seems to always return an empty array and idk why
        return count($pdo->prepare('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC)) == 0;
    }
}
