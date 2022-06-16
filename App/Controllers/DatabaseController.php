<?php

// Very simple CRUD database class to be used by other classes
class DatabaseController
{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function create($table, $rows, $values)
    {
        $rows_in   = implode(", ", $rows);
        $values_in = self::implodeValues($values);

        $sql = "INSERT INTO $table ($rows_in) VALUES ($values_in)";
        return self::executeQuery($sql, $values);
    }

    public function read($table, $row = "*", $order = "id")
    {
        $sql = "SELECT $row FROM $table ORDER BY $order";
        return self::executeQuery($sql);
    }

    public function update($table, $rows, $values, $key = "id")
    {
        $rows_in = implode("=?, ", $rows);
        $sql     = "UPDATE $table SET $rows_in WHERE $key=?";
        return self::executeQuery($sql, $values);
    }

    public function delete($table, $key = "id")
    {
        $sql = "DELETE FROM $table WHERE $key=?";
        return self::executeQuery($sql, $key);
    }

    public static function getById($id, $table)
    {
        $sql = "SELECT * FROM `$table` WHERE `id` = ?";

        $sth = self::executeQuery($sql, array($id));
        $results = $sth->fetch();

        if (!empty($results) && true == is_array($results)) :
            return $results;
        endif;

        return false;
    }

    // Executes the query
    public function executeQuery($sql, $values = null)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($values);
        return $stmt->fetchAll();
    }

    protected function implodeValues($values)
    {
        return substr(str_repeat("?, ", count($values)), 0, -2);
    }
}
