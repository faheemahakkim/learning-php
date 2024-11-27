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
    public string $colour;
    public float $engineSize;
    public string $model;
    public string $brand;
    public float $fuelAmount;


    //constructor
    //this is special method that runs once
    //
    //

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
        $this->fuelAmount -= 0.1;
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
        echo 'Beep beep!';
    }
}

$mattsCar = new Car(); // this creates an instance (object) of a Car class

// we are setting specific values of properties for this object
$mattsCar->colour = 'red';
$mattsCar->engineSize = 1.3;
$mattsCar->model = 'Yaris';
$mattsCar->brand = 'Toyota';
$mattsCar->fuelAmount = 0.5;

echo 'Fuel amount: ' . $mattsCar->fuelAmount;

$mattsCar->drive();
$mattsCar->drive();
$mattsCar->drive();

echo '<br>Fuel amount: ' . $mattsCar->fuelAmount;

// echo '<pre>';
// var_dump($mattsCar);
// echo '</pre>';

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


//using constructor
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
    public string $colour;
    public float $engineSize;
    public string $model;
    public string $brand;
    public float $fuelAmount;

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
        $this->fuelAmount -= 0.1;
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
        echo 'Beep beep!';
    }
}

$mattsCar = new Car(); // this creates an instance (object) of a Car class

// we are setting specific values of properties for this object
$mattsCar->colour = 'red';
$mattsCar->engineSize = 1.3;
$mattsCar->model = 'Yaris';
$mattsCar->brand = 'Toyota';
$mattsCar->fuelAmount = 0.5;

echo 'Fuel amount: ' . $mattsCar->fuelAmount;

$mattsCar->drive();
$mattsCar->drive();
$mattsCar->drive();

echo '<br>Fuel amount: ' . $mattsCar->fuelAmount;

// echo '<pre>';
// var_dump($mattsCar);
// echo '</pre>';

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





//New




// class Pokemon
// {
//     public string $name;
//     public string $type;
//     public string $colour;
//     public int $dexNum;
//     public int $stamina;
//     public string $greeting;
//     public string $battleCry;
//     public function fastAttack(): void
//     {
//         $this->stamina -= 10;
//         echo $battleCry;
//     }
//     public function chargedAttack(): void
//     {
//         $this->stamina -= 30;
//         echo $battleCry;
//     }
//     public function feedPotion()
//     {
//         $this->stamina += 10;
//         echo $greeting;
//     }
// }
// $eevee = new Pokemon();
// $eevee->name = 'Eevee';
// $eevee->type = 'Normal';
// $eevee->colour = 'Beige';
// $eevee->dexNum = 133;
// $eevee->stamina = 100;
// $eevee->greeting = 'weevee';
// $eevee->battleCry = 'VEE!';
// $pikachu = new Pokemon();
// $pikachu->name = 'Pikachu';
// $pikachu->type = 'Electric';
// $pikachu->colour = 'Yellow';
// $pikachu->dexNum = 025;
// $pikachu->stamina = 100;
// $pikachu->greeting = 'pika pi';
// $pikachu->battleCry = 'CHUU!';
// echo 'Eevee stamina: ' . $eevee->stamina;
// $eevee->chargedAttack();
// echo '<pre>';
// var_dump($eevee);

//using constructor

class Car
{
    // properties
    // these describe information about a car
    public string $colour;
    public float $engineSize;
    public string $model;
    public string $brand;
    public float $fuelAmount = 1.0;
    public string $owner;

    // constructor
    // this is a special method that runs once
    // when an object is created from the class
    // use it to set up initial values

    // in php, any method that starts with __ is a magic method
    // that means it runs automatically when certain things happen
    // so, this constructor runs automatically when a new object is created
    // it just runs once right at the start
    public function __construct(string $colour, float $engineSize, string $model, string $brand)
    {
        $this->colour = $colour;
        $this->engineSize = $engineSize;
        $this->model = $model;
        $this->brand = $brand;
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
        $this->fuelAmount -= 0.1;
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
        echo 'Beep beep!';
    }
}

$mattsCar = new Car('red', 1.3, 'Yaris', 'Toyota'); // this creates an instance (object) of a Car class
$emysCar = new Car('blue', 2.0, 'BMW', '330i'); // this creates an instance (object) of a Car class