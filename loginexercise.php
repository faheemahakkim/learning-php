<?php

$classmates = [
    [
        'name' => 'Anna',
        'password' => 'Garbage',
    ],
    [
        'name' => 'Benjamin',
        'password' => 'Oasis',
    ],
    [
        'name' => 'Michael',
        'password' => 'The Wurzels',
    ],
    [
        'name' => 'Viv',
        'password' => 'Charli XCX',
    ],
    [
        'name' => 'Ems',
        'password' => 'Dream Wife',
    ],
    [
        'name' => 'Emma',
        'password' => 'Dire Straits',
    ],
    [
        'name' => 'Emy',
        'password' => 'Alvin and the Chipmunks',
    ],
    [
        'name' => 'Dan',
        'password' => 'Khruangbin',
    ],
    [
        'name' => 'Charlie',
        'password' => 'Pixies',
    ],
    [
        'name' => 'Ian',
        'password' => 'Chas n Dave',
    ],
    [
        'name' => 'Ash',
        'password' => 'Fleetwood Mac',
    ],
    [
        'name' => 'Faheema',
        'password' => 'Lost Satellites',
    ],
    [
        'name' => 'Jodie',
        'password' => 'Childish Gambino',
    ],
];

$username = $_POST['username'];
$password = $_POST['password'];

$userMatched = false;

foreach ($classmates as $user)
{
    $loginUser = $user['name'];
    $loginPassword = $user['password'];

    if ($username === $loginUser && $password === $loginPassword)
    {
        $userMatched = true;
        echo 'Welcome, ' . $loginUser;
    }
}

if ($userMatched === false) {
    echo 'Access denied.';
}
// Using in_array:

$username = $_POST['username'];
$password = $_POST['password'];

if (in_array(['name'=>$username, 'password'=>$password], $classmates))
{
    echo 'Welcome, ' . $username;
}
else 
{
    echo 'Access denied.';
}

// Sanitising user input:
function sanitise(string $input): string
{
    $trimmed = trim($input);
    return strtolower($trimmed);
}

$username = sanitise($_POST['username']);
$password = $_POST['password'];

$userMatched = false;

foreach ($classmates as $user)
{
    $loginUser = strtolower($user['name']);
    $loginPassword = $user['password'];

    if ($username === $loginUser && $password === $loginPassword)
    {
        $userMatched = true;
        echo 'Welcome, ' . ucfirst($loginUser);
    }
}

if ($userMatched === false) {
    echo 'Access denied.';
}







