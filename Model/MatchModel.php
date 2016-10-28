<?php
    class MatchModel{
        private $id;
    	private $matchId;
        private $playerName;
        private $game;
        private $playerSummation;
        private $winner;
        private $dice;

        //Metodos magicos para atribuir/buscar propriedades
        public function __construct() {}

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function __get($name) {
            return $this->$name;
        }
    }

?>