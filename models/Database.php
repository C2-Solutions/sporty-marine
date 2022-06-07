<?php

class Database
{
    public static function getAll($table)
    {
        $sql = "SELECT * FROM `$table`";

        $results = executeFetchAllSql($sql);

        if (true == !empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }

    public static function getById($id, $table)
    {
        global $conn;

        $sql = "SELECT * FROM `$table` WHERE `id` = ?";

        $sth = $conn->prepare($sql);
        $sth->execute(array($id));
        $results = $sth->fetch();

        if (true == !empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }
}
