<?php
//
//require_once 'src/Models/ProductsModel.php';
//require_once 'src/connectToDB.php';
//
//$db = connectToDB();
//
//$productsModel = new ProductsModel($db);
//
//if ($productsModel->create('Cheese', 'Smelly', 5)) {
//    echo 'Product created successfully!';
//}
//
//// $product = $productsModel->getById(3);
//
//// $productsModel->getAll();
//
//// echo '<pre>';
//// var_dump($product);
///
///
//
require_once 'src/Models/ProductsModel.php';
require_once 'src/connectToDB.php';

$db = connectToDB();

$productsModel = new ProductsModel($db);

//$product = $productsModel->getById(1);
//
//echo displayProduct($product);
// Models
// Handle database queries for a given table

// Entities
// Accurately represent the data returned by the model


// Entities
// A design pattern that solves the problem of arrays being unreliable
// An entity is a class that's job is to represent data from the database
// Kinda like a value-object
// An entity object represents a single row from our database

// We can type hint functions that need our data using entities
// instead of generic arrays
//function displayProduct(ProductEntity $product): string {
//    // Within this function I'm dealing with a known quantity
//    // I know EXACTLY what a ProductEntity contains
//    return "<div>$product->name - $product->price</div>";
//}

// sellProduct
// restockProduct
// addProductToBasket
// refundProduct

// This function is type hinted to accept an array
// That array needs to represent a product - it must contain
// a name and a price

// However, because the only type hint we can use is array,
// we could pass in an array containing cheeses, and the type hint
// will accept it and cause nasty errors

//echo displayProduct(['Cheddar', 'Brie']);
//function displayProduct(array $product): string {
//    return "<div>{$product['name']} - {$product['price']}</div>";
//}

// Entities
// A design pattern that solves the problem of arrays being unreliable
// An entity is a class that's job is to represent data from the database
// Kinda like a value-object
// An entity object represents a single row from our database


//This is a special comment we call a docblock
// We can use them to add extra info to our type hints
// when php itself cannot do what we need
// The below example is telling PHPStorm and other devs
// that the array must be filled with ProductEntity objects

// To generate one, put your cursor on the line before the
// function/method and type /** and hit enter

///**
// * @param ProductEntity[] $products
// */
//function displayProducts(array $products): string {
//    $output = '';
//    foreach ($products as $product) {
//        $output .= "<div>$product->name</div>";
//    }
//    return $output;
//}

//or
$products = $productsModel->getAll();

// This header is telling the web browser that we're sending
// JSON data not HTML
header('Content-Type: application/json');
// json_encode() is a built-in function that converts
// data into JSON

// We echo the JSON to send it
echo json_encode($products);