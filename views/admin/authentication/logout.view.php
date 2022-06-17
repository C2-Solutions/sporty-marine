<?php

session_destroy();
session_unset();
unset($_SESSION["loggedin"]);
$_SESSION = array();

echo "Logged out! Redirecting in 3, 2, 1...";
header("refresh:3;url=/");
