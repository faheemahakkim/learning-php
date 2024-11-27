<?php
//
//// require_once 'src/Models/ProductsModel.php';
//// require_once 'src/connectTODB.php';
//
//// // Model
//
//// // A model is a class that handles database interactions for a table
//// // We create one model per DB table
//// // Each of those models contains all the queries for it's table
//
//// // We could create a class called ProductsModel
//// // The ProductsModel just contains all the queries you need for the products
//
//
//
//// class ProductsModel {
////     private PDO $db;
//
////     public function __construct(PDO $db)
////     {
////         $this->db = $db;
////     }
//
////     public function getAll()
////     {
////         // 1) Getting the query ready to execute
////         $query = $this->db->prepare('SELECT * FROM `products`;');
////         // 2) Execute and run the query
////         $query->execute();
////         // 3) Getting the results and returning them
////         return $query->fetchAll();
////     }
////     public function getById(int $id)
////     {
////         // We do not put variables directly into queries - we use parameter (:id) binding instead
////         $query = $this->db->prepare('SELECT * FROM `products` WHERE `id` = :id;');
////         $query->execute(['id' => $id]);
////         return $query->fetch();
////     }
//
////     public function create
//// } -->
//
//
//
//
//// // $productsModel = new ProductsModel($db);
//
//// // $products = $productsModel->getAll();
//
//// // echo '<pre>';
//// // var_dump($products);
//
//
//
//
//
//class ProductsModel {
//    private PDO $db;
//
//    public function __construct(PDO $db)
//    {
//        $this->db = $db;
//    }
//
//    public function getAll()
//    {
//        $query = $this->db->prepare('SELECT * FROM `products`;');
//        $query->execute();
//        return $query->fetchAll();
//    }
//
//    public function getById(int $id)
//    {
//        $query = $this->db->prepare('SELECT * FROM `products` WHERE `id` = :id;');
//        $query->execute([
//            'id' => $id]
//        );
//        return $query->fetch();
//    }
//
//    public function create(string $name, string $description, float $price): bool
//    {
//        $query = $this->db->prepare('INSERT INTO `products` (`name`, `description`, `price`)
//            VALUES (:name, :description, :price);');
//        return $query->execute([
//            'name' => $name,
//            'description' => $description,
//            'price' => $price
//        ]);
//    }
//}


require_once 'src/Entities/ProductEntity.php';

class ProductsModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    /**
     * @return ProductEntity[]
     */
    public function getAll(): array
    {
        $query = $this->db->prepare('SELECT * FROM `products`;');
        // Asking PDO to give us the results as ProductEntities instead of assoc arrays
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute();
        return $query->fetchAll();
    }
//    public function getAll()
//    {
//        // 1) Getting the query ready to execute
//        $query = $this->db->prepare('SELECT * FROM `products`;');
//        // 2) Execute and run the query
//        $query->execute();
//        // 3) Getting the results and returning them
//        return $query->fetchAll();
//    }

    public function getById(int $id): ProductEntity
    {
        // We do not put variables directly into queries - we use parameter (:id) binding instead
        $query = $this->db->prepare('SELECT * FROM `products` WHERE `id` = :id;');
        // Tells PDO to take the results of the query and put them into a ProductEntity
        // It automatically puts the data for each column into the property with the same name
        // It does this using magic that allows it to skip the constructor
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute(['id' => $id]);
        return $query->fetch();
    }


    public function create(string $name, string $description, float $price): bool
    {
        $query = $this->db->prepare('INSERT INTO `products` (`name`, `description`, `price`) 
            VALUES (:name, :description, :price);');
        return $query->execute([
            'name' => $name,
            'description' => $description,
            'price' => $price
        ]);
    }
}














