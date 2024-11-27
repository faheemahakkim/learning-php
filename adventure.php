 <?php 


// $room = 'classroom';

// if (isset($_GET['room']))
// {
//     $room = $_GET['room'];
// }
// if ($room === 'classroom')
// {

//     echo '<h2>You are in the classroom</h2>';
//     echo '<form>'
//     .'<input type="hidden" name="room" value="hall">'
//     .'<input type="submit" value ="Go to the hall">'
//     .'<form>';

// }
// elseif ($room === 'hall')
// {
//     echo '<h2>You are in the hall</h2>';
//     echo '<form>'
//     .'<input type="hidden" name="room" value="classroom">'
//     .'<input type="submit" value ="Go to the classroom">'
//     .'<form>';

// }
// elseif ($room === 'garden')
// {
//     echo '<h2>You are in the garden</h2>';
//     echo '<form>'
//     .'<input type="hidden" name="room" value="classroom">'
//     .'<input type="submit" value ="Go to the classroom">'
//     .'<form>';

// } 
// //another way

// $room = 'classroom';

// if (isset($_GET['room']))
// {
//     $room = $_GET['room'];
// }

// function displayRoom(string $roomName, array $destinations)
// {
//     echo "<h2>You are in the $roomName</h2>";
//     echo "<form>";
//     foreach ($destinations as $destination)
//     {
//         echo "<button type='submit' name='room' value='$destination'>Go to the $destination</button>";
//     }
//     echo "</form>";
// }

// if ($room === 'classroom')
// {
//     displayRoom('classroom', ['hall']);
// }
// elseif ($room === 'hall')
// {
//     displayRoom('hall', ['classroom', 'garden']);
// }
// elseif ($room === 'garden')
// {
//     displayRoom('garden', ['hall', 'classroom']);
// }
// //another way
// <?php

// $room = 'classroom';

// if (isset($_GET['room']))
// {
//     $room = $_GET['room'];
// }

// function displayRoom(string $roomName, array $destinations, string $description)
// {
//     echo "<h2>You are in the $roomName</h2>";
//     echo "<p>$description</p>";
//     echo "<form>";
//     foreach ($destinations as $destination)
//     {
//         echo "<button type='submit' name='room' value='$destination'>Go to the $destination</button>";
//     }
//     echo "</form>";
// }

// $rooms = [
//     'classroom'=> ['description'=>"You enter the classroom and see a shadow lurking in the corner",
//                    'destinations'=>['hall']],
//     'hall'=> ['description'=>"You enter the hall and see doors going off in different directions",
//                    'destinations'=>['classroom', 'garden']],
//     'garden'=> ['description'=>"You go into the garden and smell the wonderful flowers",
//                    'destinations'=>['classroom', 'hall']],
// ];

// $currentRoom = $rooms[$room];

// displayRoom($room, $currentRoom['destinations'], $currentRoom['description']);


//another way


$room = 'classroom';

if (isset($_GET['room']))
{
    $room = $_GET['room'];
}

function displayRoom(string $roomName, array $roomInfo)
{
    $destinations = $roomInfo['destinations'];
    $description = $roomInfo['description'];
    echo "<h2>You are in the $roomName</h2>";
    echo "<p>$description</p>";

    if (isset($roomInfo['items'])) {
        foreach ($roomInfo['items'] as $item)
        {
            echo "There is a <span style='color: red;'>$item</span> on the floor.";
        }
    }

    echo "<form>";
    foreach ($destinations as $destination)
    {
        echo "<button type='submit' name='room' value='$destination'>Go to the $destination</button>";
    }
    echo "</form>";
}
//add class inside 
// class Room
// {
//     private string description;
//     private string name;
//     private array destinations;

// }

// $hall = new Room('hall','You enter the hall and see doors going off in different directions');
// $garden = new Room ('garden','You go into the garden and smell the wonderful flowers');
// $garden->setDestinations(['classroom', 'hall']);


$rooms = [
    'classroom'=> ['description'=>"You enter the classroom and see a shadow lurking in the corner",
                   'items'=>['shovel'],
                   'destinations'=>['hall']],
    'hall'=> ['description'=>"You enter the hall and see doors going off in different directions",
                   'destinations'=>['classroom', 'garden', 'upstairs']],
    'garden'=> ['description'=>"You go into the garden and smell the wonderful flowers",
                   'destinations'=>['classroom', 'hall']],
    'upstairs'=> ['description'=>"You go up the stairs and onto the landing",
                   'destinations'=>['hall']]
];

$currentRoom = $rooms[$room];

displayRoom($room, $currentRoom);