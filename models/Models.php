<?php

class Models
{
    private $_table = "models";

    public static function getAll()
    {
        $sql = "SELECT `id`, `name`, `length`, `width`, `weight`, `airdraft`, `draft`, `maxpk`, `maxpers`, `cec` FROM `models`";

        $results = executeFetchAllSql($sql);

        if(true == !empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }
}