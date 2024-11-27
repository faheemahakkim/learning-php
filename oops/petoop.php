<?php

class Pet
{
    // by default, best practice is to make as many properties private as possible
    private string $name;
    private string $species;
    private int $health = 100;
    private int $happiness = 100;
    private int $age;

    // then you can still set them from the constructor
    public function __construct(string $name, string $species, int $age)
    {
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
    }

    // you can add "setter" methods to safely change the value of a private property
    // this means you can add code to check that what you're setting to is in a safe range
    public function setHealth(int $newHealth)
    {
        if ($newHealth >= 0) {
            $this->health = $newHealth;
        }
        else {
            echo "You can't change health to a negative number";
        }

        if ($this->health < 10) {
            echo "Your pet has died. <script>alert('Sorry for your loss')</script>";
        }
    }

    // you can add "getter" methods to read the values of private properties
    public function getName(): string
    {
        return $this->name;
    }

    // getter methods like these should just simply return the property you want
    public function getSpecies(): string
    {
        return $this->species;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function play()
    {
        $this->happiness += 10;
    }

    public function healthReport(): string
    {
        return '<br>Your cat has happiness level: ' . $this->happiness . ' and health is ' . $this->health;
    }

    private function digest()
    {
        $this->setHealth($this->health + 10);
    }

    public function feed()
    {
        $this->happiness += 5;
        $this->digest();
    }

    public function bathe()
    {
        $this->happiness -= 5;
    }
}

$myCat = new Pet('Larry', 'Siberian', 5);

// you can use getter methods from the object to get property values
echo '<br>Name: ' . $myCat->getName();
echo '<br>Species: ' . $myCat->getSpecies();
echo '<br>Age: ' . $myCat->getAge();

echo $myCat->healthReport();

// and you can also call public methods
$myCat->feed();
$myCat->bathe();
$myCat->play();

echo $myCat->healthReport();

// because setHealth is public, we can use it from the object like this:
$myCat->setHealth(50);

echo $myCat->healthReport();
$myCat->setHealth(0);























