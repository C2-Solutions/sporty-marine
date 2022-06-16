<?php
define('SITE_NAME', 'Flevonautica');

// App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

// DB Params. UPDATE THESE WHENEVER POSSIBLE.
// Handling this here instead because the original method kept creating new db connections CONSTANTLY
$db = parse_ini_file('database.ini', true);
$DB_HOST = $db["database"]["host"];
$DB_PORT = $db["database"]["port"];
$DB_NAME = $db["database"]["name"];
$DB_USER = $db["database"]["username"];
$DB_PASS = $db["database"]["password"];

$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;port=$DB_PORT";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
     $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

include_once 'App/Controllers/DatabaseController.php';

$conn = new DatabaseController($pdo);

global $pdo;
global $conn;
