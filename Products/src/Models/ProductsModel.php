<?php

class ProductsModel {
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        // 1) Getting the query ready to execute
        $query = $this->db->prepare('SELECT * FROM `products`;');
        // 2) Execute and run the query
        $query->execute();
        // 3) Getting the results and returning them
        return $query->fetchAll();
    }

    public function getById(int $id)
    {
        // We do not put variables directly into queries - we use parameter (:id) binding instead
        $query = $this->db->prepare('SELECT * FROM `products` WHERE `id` = :id;');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }
}