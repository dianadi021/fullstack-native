<?php

class UserModel {
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=laravel";

        try {
            $this->dbh = new PDO($dsn, "root", "");
        } catch (PDOException $err) {
            die($err->getMessage());
        }
    }

    public function getUsers() {
        $this->stmt = $this->dbh->prepare("SELECT * FROM users");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}