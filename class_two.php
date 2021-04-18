<?php

class Card {
    public function __construct($suit,$rank,$value){
        $this->suit = $suit;
        $this->rank = $rank;
        $this->value = $value;
    }
}
class Deck{
    public $cards;
    public function __construct(){
        $this->cards=array();
    }
    public function createDeck() {
        $suits = array('c', 'd', 'h', 's');
        $ranks = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'j', 'q', 'k');
        $values = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
        
        for ($i = 0; $i < count($suits); $i++) {
            for ($j = 0; $j < count($ranks); $j++) {
                array_push($this->cards,(new Card($suits[$i], $ranks[$j], $values[$j])));
                // var_dump($this->cards);
            }
        }
    }
    public function shuffleDeck(){
        shuffle($this->cards);
        // var_dump($cards);
        return $this;
    }
}
class Player extends Deck {
    public $deck;
    public $hands;
    public function __construct($name){
        parent::__construct();
        $this->name = $name;
        $this->hands = array();
        
    }
    public function showPlayerCards(){
        $p_card1 = $this->cards[0]->value;
        $p_card2 = $this->cards[1]->value;
        $total = $p_card1+$p_card2;

        echo "<img src='cards-png/".$this->cards[0]->suit.$this->cards[0]->rank.".png'>";
        echo "<img src='cards-png/".$this->cards[1]->suit.$this->cards[1]->rank.".png'>";
        //echo "<p class='card_total'>Player Cards: ".$total."</p>";
        

    }
    public function showDealerCards(){
        $p_card1 = $this->cards[2]->value;
        $p_card2 = $this->cards[3]->value;
        $total = $p_card1+$p_card2;
        echo "<img src='cards-png/".$this->cards[2]->suit.$this->cards[2]->rank.".png'>";
        echo "<img src='cards-png/".$this->cards[3]->suit.$this->cards[3]->rank.".png'>";
        //echo "<p class='card_total'>Dealer Cards: ".$total."</p>";
    }

}


   


// $deck = new Deck();
// $deck->createDeck();
// // var_dump($deck->cards);
// $deck->shuffleDeck($deck->cards);




?>