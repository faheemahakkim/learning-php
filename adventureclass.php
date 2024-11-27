<?php

class Room
{
    private string $name;
    private string $description;
    private array $destinations;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function setDestinations(array $rooms)
    {
        $this->destinations = $rooms;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function displayRoom()
    {
        echo "<h2>You are in the $this->name</h2>";
        echo "<p>$this->description</p>";

        echo "<form>";
        foreach ($this->destinations as $destination) {
            $destinationName = $destination->getName();
            echo "<button type='submit' name='room' value='$destinationName'>Go to the $destinationName</button>";
        }
        echo "</form>";
    }
}

$hall = new Room('Hall', 'You have entered the hall, you see doors leading to other places');
$classroom = new Room('Classroom', 'You have entered the classroom, with a scary looking trainer standing at a desk.');
$garden = new Room('Garden', 'You walk into the garden and smell the flowers');

$classroom->setDestinations([$hall, $garden]);
$hall->setDestinations([$classroom, $garden]);
$garden->setDestinations([$hall]);

$classroom->displayRoom();