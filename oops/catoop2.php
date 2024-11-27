<?php

// Object Oriented Programming
// A programming paradigm (a way of organising your code)
// Makes your code easier to maintain and understand

// Class: a category or type of thing
// e.g. a car, a laptop, a dog, a cat
// abstract ideas rather than actual things that exist

// Object: an instance of a class
// an actual thing that exists in the world
// e.g. Matt's car, Emy's Macbook Pro, Ian's cat (Jojo)

// Classes have properties
// properties are like variables
// but they are attached to a class
// they describe features of objects of that class

class Car
{
    // properties
    // these describe information about a car

    // property and method visibility
    // "public" means that any object created from this class
    // allows you to change or read its property

    // "private" means that a property or method can only be accessed
    // from inside the class definition
    private string $colour;
    private float $engineSize;
    public string $model;
    public string $brand;
    private float $fuelAmount = 1.0;
    private string $owner;
    private int $mileage;

    // constructor
    // this is a special method that runs once
    // when an object is created from the class
    // use it to set up initial values

    // in php, any method that starts with __ is a magic method
    // that means it runs automatically when certain things happen
    // so, this constructor runs automatically when a new object is created
    // it just runs once right at the start
    public function __construct(string $colour, float $engineSize, string $model, string $brand, int $mileage)
    {
        $this->colour = $colour;
        $this->engineSize = $engineSize;
        $this->model = $model;
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public function getColour(): string
    {
        return $this->colour;
    }

    private function burnPetrol()
    {
        $this->fuelAmount -= 0.1;
    }

    // methods
    // these are functions that run code
    // they do things that a car should do
    // (perform functions related to cars)
    public function drive(): void
    {
        echo 'Vroom vroom';

        // $this refers to the object created from this class
        // you have to use it to change or read properties
        // or to call methods of the class
        $this->burnPetrol();
        $this->mileage += 10;
    }

    public function honkHorn(int $times): void
    {
        for ($i=0;$i<$times;$i++)
        {
            echo 'Parp!<br>';
        }
    }

    public function reverse(): void
    {
        $this->burnPetrol();
        echo 'Beep beep!';
    }
}

$mattsCar = new Car('red', 1.3, 'Yaris', 'Toyota', 67000); // this creates an instance (object) of a Car class
// $emysCar = new Car('blue', 2.0, 'BMW', '330i'); // this creates an instance (object) of a Car class

// echo '<pre>';
// var_dump($mattsCar);
// echo '</pre>';

// echo '<pre>';
// var_dump($emysCar);
// echo '</pre>';

// we are setting specific values of properties for this object
// $mattsCar->colour = 'black';
// $mattsCar->engineSize = 2.3;
// $mattsCar->model = 'RX7';
// $mattsCar->brand = 'Mazda';
// $mattsCar->fuelAmount = 0.5;
// $mattsCar->mileage = 100;


// because colour is now private, we access it this anymore from the object
// echo 'Colour:' . $mattsCar->colour;

// and also we can't change it
// $mattsCar->colour = 'black';

// but if we create a method that returns it we can still get to it:
echo 'Colour:' . $mattsCar->getColour();

$mattsCar->drive();

// you can't do this
$mattsCar->burnPetrol();

// echo '<pre>';
// var_dump($mattsCar);
// echo '</pre>';

// echo 'Fuel amount: ' . $mattsCar->fuelAmount;

// $mattsCar->drive();
// $mattsCar->drive();
// $mattsCar->drive();

// echo '<br>Fuel amount: ' . $mattsCar->fuelAmount;


// // we're calling the object's methods
// $mattsCar->drive();
// echo '<br>';
// $mattsCar->honkHorn(3);
// echo '<br>';
// $mattsCar->reverse();
// echo '<br>';

// $annasCar = new Car();
// $annasCar->honkHorn(5);

// we are setting specific values of properties for this object
$emysCar = new Car(); // this creates an instance (object) of a Car class
$emysCar->colour = 'blue';
$emysCar->engineSize = 2.0;
$emysCar->model = 'BMW';
$emysCar->brand = '330i';
$emysCar->fuelAmount = 0.5;

// echo '<pre>';
// var_dump($emysCar);
// echo '</pre>';

// Classes also have methods
// methods are just like functions
// they actually run bits of code
// and are often used to change the properties of an object