<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="adventure.js" defer></script>
</head>
<body>

<h1>Adventure game</h1>
<?php

$room = 'classroom';

$carrying = '';

if (isset($_GET['room']))
{
    $room = $_GET['room'];
}

if (isset($_GET['carrying']))
{
    $carrying = $_GET['carrying'];
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
            echo "There is a <a href='?room=$roomName&item=shovel' style='color: red;'>$item</span> on the floor.";
        }
    }

    echo "<form>";
    foreach ($destinations as $destination)
    {
        echo "<button type='submit' name='room' value='$destination'>Go to the $destination</button>";
    }
    echo "</form>";
}

$rooms = [
    'classroom'=> ['description'=>"You enter the classroom and see a shadow lurking in the corner",
                   'items'=>['shovel'],
                   'destinations'=>['hall']],
    'hall'=> ['description'=>"&#127968 You enter the hall and see doors going off in different directions",
                   'destinations'=>['classroom', 'garden', 'upstairs']],
    'garden'=> ['description'=>"You go into the garden and smell the wonderful flowers",
                   'destinations'=>['classroom', 'hall']],
    'upstairs'=> ['description'=>"You go up the stairs and onto the landing",
                   'destinations'=>['hall']]
];

$currentRoom = $rooms[$room];

displayRoom($room, $currentRoom);

?>


</body>
</html>
