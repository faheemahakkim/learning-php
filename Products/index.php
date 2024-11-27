<?php

require_once 'src/Models/ProductsModel.php';
require_once 'src/connectToDB.php';

$db = connectToDB();

$productsModel = new ProductsModel($db);

$product = $productsModel->getById(3);

$productsModel->getAll();

echo '<pre>';
var_dump($product);