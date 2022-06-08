<?php

class Database
{
    public static function getAll($table)
    {
        $sql = "SELECT * FROM `$table`";

        $results = executeFetchAllSql($sql);

        if (empty($results) && true == is_array($results)) :
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

        if (empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }

    public static function delete($id, $table)
    {
        $sql = "DELETE FROM `$table` WHERE `id` = '$id'";

        $result = executeSql($sql);

        if (true === $result) :
            return true;
        endif;

        return false;
    }
}
