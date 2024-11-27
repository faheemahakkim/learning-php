<?php


class Cat
{
    public string $colour;
    public int $age;
    public string $breedname;
    public string $name;
    public string $image;
    public int $stamina;

    public function eat(): void
    {
        echo  'vrooooom';
        $this->stamina +=5;
    }
    public function fight(): void
    {
        echo  'dushhhhhh';
        $this->stamina -=5;
    }
    
}

$Faheescat = new cat();

$Faheescat->colour = 'black';
$Faheescat->age = 3;
$Faheescat->breedname = 'persian';
$Faheescat->name = 'Tommy';
$Faheescat->image = 'https://images.unsplash.com/photo-1529778873920-4da4926a72c2?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y3V0ZSUyMGNhdHxlbnwwfHwwfHx8MA%3D%3D';
$Faheescat->stamina = 5;
echo "$Faheescat->name which is $Faheescat->age and $Faheescat->colour <br>is $Faheescat->breedname and <br><img src ='$Faheescat->image' alt='image of $Faheescat->name'><br>";
echo 'The stamina is:' . $Faheescat->stamina;  

$Faheescat->eat();
$Faheescat->eat();
$Faheescat->eat();
$Faheescat->eat();
echo '<br><br>';
echo 'The stamina is:' . $Faheescat->stamina;  

$Faheescat->fight();
echo 'The stamina is:' . $Faheescat->stamina;  