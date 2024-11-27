<?php


class BuisnessModel {
    private function __construct (PDO $db)

    {
$this->db = $db;
    }


public function getAll()
{
 $query = $this->db->prepare('SELECT * FROM buisnesses');
 $query->execute();
 return $query->fetchAll();
}
public function getById(int $id)
{
    $query = $this->db->prepare('SELECT * FROM buisnesses WHERE id = :id');
    $query->execute(['id' => $id]);
    return $query->fetch();
}
public function create(string $name, string $description, string $founded, int $type_id): bool
{
    $query = $this->db->prepare('Insert into `buisnesses` (`name`, `description`, `founded`, `type_id`)
VALUES (:name, :description, :founded, :type_id);');
        return $query->execute([
            'name' => $name,
            'description' => $description,
            'founded' => $founded,
            'type' => $type

        ]);

}
}