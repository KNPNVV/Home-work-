<?php
class Database
{
    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getData()
    {
        $query = $this->pdo->prepare('SELECT * FROM user');
        $query->execute();
        return $query->fetchAll();
    }
}