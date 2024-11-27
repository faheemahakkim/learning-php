 <?php

// $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];

// $cards = [
//     ['name'=>'Two', 'points'=>2],
//     ['name'=>'Three', 'points'=>3],
//     ['name'=>'Four', 'points'=>4],
//     ['name'=>'Five', 'points'=>5],
//     ['name'=>'Six', 'points'=>6],
//     ['name'=>'Seven', 'points'=>7],
//     ['name'=>'Eight', 'points'=>8],
//     ['name'=>'Nine', 'points'=>9],
//     ['name'=>'Ten', 'points'=>10],
//     ['name'=>'Jack', 'points'=>10],
//     ['name'=>'Queen', 'points'=>10],
//     ['name'=>'King', 'points'=>10],
//     ['name'=>'Ace', 'points'=>11]
// ];

// $deck = [];

// foreach ($suits as $suit)
// {
//     foreach ($cards as $card)
//     {
//         $card['suit'] = $suit;
//         // array_push($deck, $card);
//         $deck[] = $card; 
//     }
// }

// shuffle($deck);

// $player1hand = [array_pop($deck), array_pop($deck)];
// $player2hand = [array_pop($deck), array_pop($deck)];

// function describeHand(array $cards): string
// {
//     $description = '';

//     foreach ($cards as $card)
//     {
//         // .= is like += but for strings
//         // it takes the current string and adds a new string on the end
//         // it remembers what the string was before, so we can build a big long string
//         $description .= $card['name'] . ' of ' . $card['suit'] . '<br>';
//     }

//     return $description;
// }

// function calculateScore(array $cards): int
// {
//     $score = 0;

//     foreach ($cards as $card)
//     {
//         $score += $card['points'];
//     }

//     return $score;
// }

// function echoResults(string $playerName, array $cards): void
// {
//     echo "$playerName draws:<br>"
//     . describeHand($cards)
//     .  'Score: '
//     . calculateScore($cards)
//     . '<br><br>';
// }

// echoResults('Player 1', $player1hand);
// echoResults('Player 2', $player2hand);

// $player1score = calculateScore($player1hand);
// $player2score = calculateScore($player2hand);

// echo '<br>';

// if ($player1score === $player2score)
// {
//     echo "It's a draw!";
// }
// elseif ($player1score > $player2score)
// {
//     echo "Player 1 wins.";
// }
// else 
// {
//     echo "Player 2 wins.";
// }
// Updated to handle aces in the score:



$suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];

$cards = [
    ['name'=>'Two', 'points'=>2],
    ['name'=>'Three', 'points'=>3],
    ['name'=>'Four', 'points'=>4],
    ['name'=>'Five', 'points'=>5],
    ['name'=>'Six', 'points'=>6],
    ['name'=>'Seven', 'points'=>7],
    ['name'=>'Eight', 'points'=>8],
    ['name'=>'Nine', 'points'=>9],
    ['name'=>'Ten', 'points'=>10],
    ['name'=>'Jack', 'points'=>10],
    ['name'=>'Queen', 'points'=>10],
    ['name'=>'King', 'points'=>10],
    ['name'=>'Ace', 'points'=>11]
];

$deck = [];

foreach ($suits as $suit)
{
    foreach ($cards as $card)
    {
        $card['suit'] = $suit;
        // array_push($deck, $card);
        $deck[] = $card;
    }
}

shuffle($deck);

$player1hand = [array_pop($deck), array_pop($deck)];
$player2hand = [array_pop($deck), array_pop($deck)];

function describeHand(array $cards): string
{
    $description = '';

    foreach ($cards as $card)
    {
        // .= is like += but for strings
        // it takes the current string and adds a new string on the end
        // it remembers what the string was before, so we can build a big long string
        $description .= $card['name'] . ' of ' . $card['suit'] . '<br>';
    }

    return $description;
}

function calculateScore(array $cards): int
{
    $score = 0;
    $aces = 0;

    foreach ($cards as $card)
    {
        $score += $card['points'];

        if ($card['name'] === 'Ace')
        {
            $aces++;
        }

        while ($score > 21 && $aces > 0)
        {
            $score -= 10;
            $aces -= 1;
        }
    }

    return $score;
}

echo '<br>';

function echoResults(string $playerName, array $cards): void
{
    echo "$playerName draws:<br>"
    . describeHand($cards)
    .  'Score: '
    . calculateScore($cards)
    . '<br><br>';
}

echo '<br>';

while (calculateScore($player1hand) < 14)
{
    $player1hand[] = array_pop($deck);
}

while (calculateScore($player2hand) < 14)
{
    $player2hand[] = array_pop($deck);
}

echoResults('Player 1', $player1hand);
echoResults('Player 2', $player2hand);

$player1score = calculateScore($player1hand);
$player2score = calculateScore($player2hand);

if ($player1score > 21 && $player2score > 21)
{
    echo 'Both players lose.';
}
elseif ($player1score > 21) {
    echo 'Player 1 is bust, player 2 wins.';
}
elseif($player2score > 21)
{
    echo 'Player 2 is bust, player 1 wins.';
}
elseif ($player1score === $player2score)
{
    echo "It's a draw!";
}
elseif ($player1score > $player2score)
{
    echo "Player 1 wins.";
}
else 
{
    echo "Player 2 wins.";
}












