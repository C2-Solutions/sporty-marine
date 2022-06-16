<?php

require 'vendor/autoload.php';

session_start();

if (!isset($_SESSION["user_logged_in"])) {
    $_SESSION["user_logged_in"] = false;
    $_SESSION["user_is_admin"] = false;
    $_SESSION["login_datetime"] = date();
}
