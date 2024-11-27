<?php


$name = 'Ash';

echo $name;
$name ='cuthbert';
echo $name;



// // Arrays

$shoppingList = ['Bread', 'Milk', 'Eggs'];

// // Foreach - same exact idea as in JS
// // Used to do something with every item in an array
// // - display them

echo '<ul>';
foreach ($shoppingList as $item) {
    echo "<li>$item</li>";
}
echo '</ul>';

// in JS
shoppingList.forEach(function (item) {
//     // Do something each array item
})

// Arrays
$personalDetails = [
    'firstName' => 'Ash', 
    'lastName' => 'Coles', 
    'age' => 29, 
    'carColour' => 'Blue'
];

//you can also access the keys/indexes if needed
foreach ($arrayName as $key => $value)

//if you dont want the key 
foreach ($arrayName as $value)

// Best practice: Usually array names should be plural
// Value names (the bit after as) should be singular


foreach ($personalDetails as $label => $detail) {
    echo "<p>$label: $detail</p>";
}


// // Arrays
// // Indexed array containing assoc arrays
// // Just like an array of objects from JS/JSON
$projects = [
    [
        'title' => 'Email client',
        'description' => 'I cant be bother to write a real thing',
        'completed' => false
    ],
    [
        'title' => 'Portfolio',
        'description' => 'ljkhsdf;ijsdfjkhsdk;hsdfhui',
        'completed' => true
    ],
    [
        'title' => 'A thing',
        'description' => 'I cant be bother to write a real thing',
        'completed' => false
    ]
];
foreach ($projects as $project) {
    echo '<div>';
    echo "<h2>Name: {$project['title']}</h2>";
    echo "<p>{$project['description']}";

    if ($project['completed']) {
        echo '<p>Project done</p>';
    } else {
        echo '<p>Project in progress</p>';
    }

    echo '</div>';
}
foreach ($projects as $project) {
    echo '<pre>';
    var_dump($project);
}

//exercise
// Create an indexed array of associative arrays to represent your classmates
// Each assoc array should contain the following info:
// Their name
// Their favourite band/musician/artist
// Their favourite food
// Loop through and display a bullet pointed list for each person, 
// with each stat (name, music, food) as it's own bullet point


    $classmates = [
        [
            'name' => 'Anna',
            'favourite band' => 'Garbage',
            'favourite food' => 'Chocolate Brownie'
        ],
        [
            'name' => 'Benjamin',
            'favourite band' => 'Oasis',
            'favourite food' => 'Pizza'
        ],
        [
            'name' => 'Michael',
            'favourite band' => 'The Wurzels',
            'favourite food' => 'BBQ'
        ],
        [
            'name' => 'Viv',
            'favourite band' => 'Charli XCX',
            'favourite food' => 'Mac and cheese'
        ],
        [
            'name' => 'Ems',
            'favourite band' => 'Dream Wife',
            'favourite food' => 'Thai Curry'
        ],
        [
            'name' => 'Emma',
            'favourite band' => 'Dire Straits',
            'favourite food' => 'Chow Mein'
        ],
        [
            'name' => 'Emy',
            'favourite band' => 'Alvin and the Chipmunks',
            'favourite food' => 'Mititei'
        ],
        [
            'name' => 'Dan',
            'favourite band' => 'Khruangbin',
            'favourite food' => 'Grilled sardines'
        ],
        [
            'name' => 'Charlie',
            'favourite band' => 'Pixies',
            'favourite food' => 'Spaghetti Bolognese'
        ],
        [
            'name' => 'Ian',
            'favourite band' => 'Chas n Dave',
            'favourite food' => 'Fish Balti'
        ],
        [
            'name' => 'Ash',
            'favourite band' => 'Fleetwood Mac',
            'favourite food' => 'Pidgeon'
        ],
        [
            'name' => 'Faheema',
            'favourite band' => 'Lost Satellites',
            'favourite food' => 'chicken wrap'
        ],
        [
            'name' => 'Jodie',
            'favourite band' => 'Childish Gambino',
            'favourite food' => 'Fish and chips'
        ],
    ];

    foreach ($classmates as $label => $person){
        
        echo '<ul>';
        //echo '<li><h3>Name:'. $person['name']. '</h3></li>';
                           //or
        //echo "<li><h3>Name: {$person['name']}</h3></li>";

        echo "<li><h3>Name: {$person['name']}</h3></li>";
        echo "<p>favourite band: {$person['favourite band']}</p>";
        echo "<p>favourite food: {$person['favourite food']}</p>";
        echo '</ul>';
                        //or
   echo '<ul>'
   . "<li>Name: {$person['name']}</li>"
   . "<li>Favourite band: {$person['favourite_band']}</li>"
   . "<li>Favourite food: {$person['favourite_food']}</li>"
   . '</ul>';
    }
 

    $randomIndex = rand(0, count($classmates) - 1);
$person = $classmates[$randomIndex];

echo '<ul>';
echo "<li>Name: {$person['name']}</li>";
echo "<li>Favourite band: {$person['favourite band']}</li>";
echo "<li>Favourite food: {$person['favourite food']}</li>";
echo '</ul>';

               //or (for loop)
               for ($i=0;$i<count($classmates);$i++) {
                if ($i % 2 === 0) {
                    $person = $classmates[$i];
                    echo '<ul>';
                    echo "<li>Name: {$person['name']}</li>";
                    echo "<li>Favourite band: {$person['favourite_band']}</li>";
                    echo "<li>Favourite food: {$person['favourite_food']}</li>";
                    echo '</ul>';
                }
            }

            for ($i=0;$i<10;$i++) {
                echo '<p>Hello</p>';
            }

              //(while loop)

              $i =10;
              while ($i > 0)
{
    echo '<p>Hello</p>';
    $i--;
}
    //Create a coin flip simulator!
//Each time you refresh the page, output either 'Heads' or 'Tails' at random.

    $flip =rand(0,1);

    if($flip === 0){
        echo 'Head';

    }else{
        echo 'Tail';
    }
    // another way

  // ternary: short and simple
echo rand(0, 1) ? 'heads' : 'tails';

// // if / else: longer but clear
$coin = rand(0, 1);

if ($coin) {
    echo 'heads';
}
else {
    echo 'tails';
}

// // or you can use an array like this
$sides = ['heads', 'tails'];

echo $sides[$coin];