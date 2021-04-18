<?php
    include_once('class_two.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-container">
        <h1>Blackjack</h1>
        <h3>Dealer</h3>
        <div class="dealer-cards">
<?php
             $player = new Player("patrick");
             $player->createDeck();
             // var_dump($player->cards);
             $player->shuffleDeck($player->cards);
             //var_dump($player->cards);
             $player->showDealerCards();
            
            
?>
        </div>
        <a href="">Stay</a>
        <a href="">Hit</a>
        <div class="player-cards">
<?php
             $player = new Player("patrick");
             $player->createDeck();
             // var_dump($player->cards);
             $player->shuffleDeck($player->cards);
             //var_dump($player->cards);
             $player->showPlayerCards();
            
            
?>
        </div>
        
        <h3>Player</h3>
    </div>
</body>
</html>