<?php

class Database
{
    public static function getAll($table)
    {
        if ($table == 'models') :
            $sql = "SELECT * FROM models, images WHERE models.id = images.modelid";
        else :
            $sql = "SELECT * FROM `$table`";
        endif;

        $results = executeFetchAllSql($sql);

        if (!empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }

    public static function getById($id, $table)
    {
        global $conn;

        if ($table == 'models') :
            $sql = "SELECT * FROM models INNER JOIN images ON models.id = images.modelid WHERE models.id = ?";
        else :
            $sql = "SELECT * FROM `$table` WHERE `id` = ?";
        endif;

        $sth = $conn->prepare($sql);
        $sth->execute(array($id));
        $results = $sth->fetch();

        if (!empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }

    public static function delete($id, $table)
    {
        $sql = "DELETE FROM `$table` WHERE `id` = '$id'";

        $result = executeSql($sql);

        if ($result) :
            return true;
        endif;

        return false;
    }
}
