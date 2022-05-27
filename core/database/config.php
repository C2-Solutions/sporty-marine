<?php

// This class will connect to the database

class DatabaseConfiguration
{
    private static function connect($host, $user, $password, $name)
    {
        try {
            $conn = new PDO("mysql:host=$host;dbname=$name", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        }
        catch(PDOException $e)
        {
            echo 'Failed to connect to MySQL: ' . $e->getMessage();;
            exit();
        }
    }

    public static function setConnection()
    {
        if(file_exists('core/database/config.ini')) :
            $conf = parse_ini_file('config.ini');

            if(true === !empty($conf) && true === is_array($conf)) :
                return self::connect($conf['host'], $conf['user'], $conf['password'], $conf['name']);
            endif;
        else :
            echo 'Kan het configuratie bestand niet openen';
            exit();
        endif;

        return false;
    }
}