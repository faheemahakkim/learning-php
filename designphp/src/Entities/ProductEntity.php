<?php

//class ProductEntity {
//    // We give an entity a property for each DB column
//    // The datatypes of these properties should match
//    // The names of the properties should match the names of the columns
//    public int $id;
//    public string $name;
//    public string $description;
//    public float $price;
//
//    // When you use PDO::FETCH_CLASS your entity does not need a constructor
//}


// We can declare classes as readonly
// That means that the data contained within their properties
// can never be changed
// Has the same effect as private properties with getters but NO setters
readonly class ProductEntity
{
    // We give an entity a property for each DB column
    // The datatypes of these properties should match
    // The names of the properties should match the names of the columns
    public int $id;
    public string $name;
    // ? before a typehint means it's nullable
    // It can contain either null or a string
    // It can go before ANY type hint
    public ?string $description;
    public float $price;

    // When you use PDO::FETCH_CLASS your entity does not need a constructor
}