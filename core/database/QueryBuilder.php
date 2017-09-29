<?php

class QueryBuilder {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function selectAll() {
        $statement = $this->pdo->prepare('SELECT * FROM posts');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}