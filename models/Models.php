<?php

class Models
{
    private $table = "models";

    public static function getAll()
    {
        $sql = "SELECT * FROM `models`";

        $results = executeFetchAllSql($sql);

        if (true == !empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }
    public static function getModelById($id)
    {
        global $conn;

        $sql = "SELECT `id`, `name`, `image`, `length`, `width`, `weight`, `airdraft`, `draft`, `maxpk`, `maxpers`, `cec` FROM `models` WHERE `id` = ?";

        $sth = $conn->prepare($sql);
        $sth->execute(array($id));
        $results = $sth->fetch();

        if (true == !empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }
}
