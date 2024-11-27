<?php

function sayHello()
{
    echo '<h1>Hello!</h1>';

}

sayHello();


function greet(string $name, bool $shouty):string

// //$punctuation only inside the function it works .its called scope.

{
   
    $punctuation =$shouty ? '!!!!':'.';
    return "<h1>Hello $name" . "$punctuation</h1>";

}
echo  $punctuation;(outside function the scope not available)

 echo greet('faheema', false);
echo 'Result: ' . $result;

                //Type hinting//
function greet (string $name, bool $shouty): string
{
    $punctuation = $shouty ? '!!!' : '.';
    return "<h1>Hello $name" . "$punctuation</h1>";
}

echo greet('Matt', false);
//echo 'Result: ' . $result;(it doesnt work)




                   //funtion level scope//

$greeting = 'Hey';

function greet (string $name, bool $shouty): string
{
    global $greeting;
    $punctuation = $shouty ? '!!!' : '.';
    return "<h1>$greeting $name" . "$punctuation</h1>";
}

echo greet('Matt', false);
          //(note the global $greeting line)

//It's usually better (if possible) to pass everything in as arguments:
    $greeting = 'Hey';
    
    function greet (string $greetingString, string $name, bool $shouty): string
    {
        $punctuation = $shouty ? '!!!' : '.';
        return "<h1>$greetingString $name" . "$punctuation</h1>";
    }
    
    echo greet($greeting, 'Matt', false);