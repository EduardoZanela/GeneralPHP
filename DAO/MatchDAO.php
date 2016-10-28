<?php
include '../Persistence/ConnectionDB.php';
class MatchDAO{
    private $connection = null;

    public function __construct() {
        $this->connection = ConnectionDB::getInstance();
    }


    public function insertGame($jogo){
        try{
            $status = $this->connection->prepare("Insert Into general_game(id,playerName,game,payerSummation,dice,matchId)"
            		. " values(null,?,?,?,?,?)");
			
           
            $status->bindValue(1, $jogo->playerName);
            $status->bindValue(2, $jogo->game);
            $status->bindValue(3, $jogo->playerSummation);
            $status->bindValue(4, $jogo->dice);
            $status->bindValue(5, $jogo->matchId);

            $status->execute();

            $this->connection = null;

        } catch (PDOException $ex) {
            echo 'Erro ocorreu';
        }

    }
    
    public function nextMath(){
    	try {
    		$status = $this->connection->prepare("SELECT matchId FROM general_game order by id DESC LIMIT 1");
    		$status->execute();
    		
    		$next = $status->fetchAll();
    		
    		$this->connection = null;
    		
    		return $next;
    		
    	} catch (PDOException $ex){
    		
    	}
    	
    }
    
    public function selectGame($id){
    	try {
    		$status = $this->connection->prepare("SELECT * FROM general_game where matchId = $id");
    		
    		$status->execute();
    	
    		$finalStatistic = $status->fetchAll();
    	
    		$this->connection = null;
    	
    		return $finalStatistic;
    	
    	} catch (PDOException $ex){
    	
    	}
    }
}


?>