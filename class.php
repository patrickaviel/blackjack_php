<?php
   
    // var_dump($files1);
    

    class Deck{
        public $deck;
        public function __construct(){

            $dir    = 'cards-png/';
            $cards = scandir($dir);
            array_shift($cards);
            array_shift($cards);

            $this->deck = $cards;
            // var_dump($this->deck);
            shuffle($this->deck);
            // var_dump($this->deck);
           
        }
        public function shuffle($deck){
            shuffle($deck); 
            return $this;
        }
    }
    class Player extends Deck{
        public $name;
        public $hand;
        

        public function __construct(){
            parent::__construct();
        }
        public function hands(){
            
           $hands[]=$this->deck[0];
           $hands[]=$this->deck[1];
           

            // echo $this->deck[0]."<br>";
            // echo $this->deck[1]."<br>";
            for($i=0;$i<count($hands);$i++){
                echo "<img src='cards-png/$hands[$i]'>";
            }
           
        }
    }
    
   
    
?>