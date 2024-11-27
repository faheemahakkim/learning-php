<?php

class Cat
{
    private string $colour;
    private int $age;
    private string $breedname;
    private string $name;
    private string $image;
    private int $stamina = 100;

    public function __construct(string $colour,int $age,string $breedname,
                         string $name,string $image)

{
    $this->colour = $colour;
    $this->age = $age;
    $this->breedname = $breedname;
    $this->name = $name;
    $this->image = $image;
   

   
}
public function getColour() : string

{
    return $this->colour;
}
public function getAge() : int

{
    return $this->age;
}
public function getName() : string

{
    return $this->name;
}
public function getBreedname() : string

{
    return $this->breedname;
}
public function getImage() : string

{
    return $this->image;

}
public function getStamina() : int

{
    return $this->stamina;
    
}
public function setStamina(int $newStamina)
{
    if ($newStamina >= 0){
        $this->stamina = $newStamina;
    }
    else {
        echo "You cant change";
        echo '<br><br>';
     

    }
    if ( $this->stamina< 10){
        echo "your pet died";
    }
}
public function eat(): void
{
    echo  'vrooooom';
    echo '<br><br>';
    $this->stamina +=5;
}
public function fight(): void
{
    echo  'dushhhhhh';
    echo '<br><br>';
    $this->stamina -=5;
}

}

$myCat = new Cat('black',3,'persian','Tommy','https://images.unsplash.com/photo-1529778873920-4da4926a72c2?f
m=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y3V0ZSUyMGNhdHxlbnwwfHwwfHx8MA%3D%3D');


echo $myCat->getColour() . " which is " . $myCat->getAge() . "<br>" .
"is " . $myCat->getBreedname() . "<br>" .
"<img src='" . $myCat->getImage() . "' alt='image of " . $myCat->getName() . "'><br>";

echo '<br><br>';
echo $myCat->getStamina();
echo '<br><br>';
$myCat->eat();
echo $myCat->getStamina();
echo '<br><br>';
$myCat->fight();
echo $myCat->getStamina();
 $myCat->setStamina(-1);
 echo $myCat->getStamina();
$myCat->setStamina(9);
echo $myCat->getStamina();
 $myCat->setStamina(200);
 echo $myCat->getStamina();

