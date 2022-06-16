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
        if ($table == 'models') :
            $sql = "SELECT * FROM models, boattype WHERE models.boattype = boattype.id";
        else :
            $sql = "SELECT $row FROM $table ORDER BY $order";
        endif;

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

    public function getById($id, $table)
    {
        if ($table == 'models') :
            $sql = "SELECT * FROM models INNER JOIN boattype ON models.boattype = boattype.id WHERE models.id = ?";
        else :
            $sql = "SELECT * FROM `$table` WHERE `id` = ?";
        endif;

        $results = self::executeQuery($sql, array($id));

        if (!empty($results) && is_array($results)) :
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
