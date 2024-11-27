

<?php

// $deck = [
//     [
//     'score'=> 2,
//     'label' =>'2' ,
//     'suit' =>'hearts'],
    
//     ];
//or this below function
    


function drawCard(): array
{
    $suits = ['hearts', 'diamonds', 'clubs', 'spades'];
    $randomSuit = $suits[rand(0, 3)];

    $random = rand(1, 13);
    return ['number'=> $random, 'suit'=> $randomSuit];
}

function describeCard(array $card): string
{
    $label = $card['number'];

    if ($label === 1) {
        $label = 'Ace';
    }
    elseif ($label === 11) {
        $label = 'Jack';
    }
    elseif ($label === 12) {
        $label = 'Queen';
    }
    elseif ($label === 13) {
        $label = 'King';
    }

    return $label . ' of ' . $card['suit'];
}

function cardScore(array $card) : int
{
    if($card['number'] === 1)
    {
        return 11;

    }
    elseif($card['number'] >10)
    {
        return 10;
    }
    else{
        return $card['number'];
    }
}
$player1hand = [drawCard(), drawCard()];
$player2hand = [drawCard(), drawCard()];
// var_dump($player1hand);
echo describeCard($player1hand[0]);
echo '<br><br>';
echo describeCard($player1hand[1]);
echo '<br><br>';
echo describeCard($player2hand[1]);
echo '<br><br>';
echo describeCard($player2hand[0]);
echo '<br><br>';

$player1score = cardScore($player1hand[0]) + cardScore($player1hand[1]);
$player2score = cardScore($player2hand[0]) + cardScore($player2hand[1]);
echo '<br><br>';
echo 'Player 1 draws: <br>';
echo describeCard($player1hand[0]) . ' and ' . describeCard($player1hand[1]);
echo '<br>Score: ' . $player1score;

echo '<br><br>Player 2 draws: <br>';
echo describeCard($player2hand[0]) . ' and ' . describeCard($player2hand[1]);
echo '<br>Score: ' . $player2score;
echo '<br><br>';

if ($player1score === $player2score) {
    echo "It's a draw!";
}
elseif ($player1score > $player2score) {
    echo "Player 1 wins.";
}
else {
    echo "Player 2 wins.";
}


// my code
// if ($player1score > 21){
//     echo "Player2 wins";
//     echo '<br><br>';
// }
// else
// { 
//     echo '<br><br>';
//     echo "The game is draw";
// }
// if ($player1score > 21 && $label ==='Ace'){
// $player1score -= 10;
// }
// else{
//     echo $player1score;
// }














    
    