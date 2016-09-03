<?php
    class MatchModel{
        private $matchId;
        private $playerName;
        private $game;
        private $playerSummation;
        private $winner;

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