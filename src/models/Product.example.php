<?php

class Product
{
    public function getData(): array
    {
        $dsn = "mysql:host=;dbname=;charset=utf8;port=3306";
        $pdo = new PDO($dsn, "", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
