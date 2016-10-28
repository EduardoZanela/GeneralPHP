<?php
    session_start();
	
    include '../DAO/MatchDAO.php';
    include '../Model/MatchModel.php';
    include 'rules.php';
    
    if(isset($_GET['operation'])){
        switch ($_GET['operation']){
            case 'start':
                if(!empty($_POST['Name'])) {
                    $_SESSION['playerName'] = $_POST['Name'];
                    $_SESSION['game'] = 1;
                    $_SESSION['rodada'] = 1;
                    $_SESSION['computerSum'] = 0;
                    $_SESSION['matchId'] = 0;
                    $_SESSION['playerSum'] =0;
                    $gravarGame = new MatchDAO();
                    
                    $array = $gravarGame->nextMath();
                    
                    foreach ($array as $b) {
                    	$_SESSION['matchId'] = $b['matchId']+1 ;                    	
                    }             
                    
                    header("location:../View/MatchStartView.php");
                }else{
                    echo 'Campo nome não pode ser vazio';
                }
                break;

            case 'play':
                $game = $_POST['game'];
                
                $_SESSION['game'] = $game+1;
                if($game <= 20){ 
                	
                	/*Declaração de variaveis*/
                	$dice = array();
                	$jogadores = array();
                	$diceArray = array();
                	$jogo = new MatchModel();
                	$gravarGame = new MatchDAO();
                	$fim = false;
                	
                	/*Gerador de dados randomicamente*/
                	for ($i = 1; $i <= 5; $i++){
                		$dice[$i] = rand(1,6);
                	}
                	
                	/*Coloca o dado na seção, ainda não tem o player definido*/
                	sort($dice);
                	
                	$rule = new rules();
                	$playSum = $rule->checkRules($dice);
                	
                	$_SESSION['dice'] = $dice;
                	
                	//$playSum = array_sum($dice);
                	
                	echo "Soma Total: $playSum";
                	
                    if($game % 2 == 0){
                    	$_SESSION['dicePlayer'] = $dice;
                        $_SESSION['playerSum'] += $playSum;
                        
                        if($_SESSION['dicePlayer'] > $_SESSION['diceComputer']){
                        	$_SESSION['gameWinner'] = 'player';
                        } else{
                        	$_SESSION['gameWinner'] = 'computer';
                        }
                                          
                        
                        $jogo->playerName =  $_SESSION['playerName'];
                        $jogo->game =  $_SESSION['rodada'];
                        $jogo->playerSummation = $playSum;
                        $jogo->dice = implode(",", $dice);
                        $jogo->matchId = $_SESSION['matchId'];
                        
                        $gravarGame->insertGame($jogo);
                        
                        $fim = true;                      
                        
                    } else{
                    	$_SESSION['diceComputer'] = $dice;
                    	$_SESSION['computerSum'] += $playSum;
                    	
                    	$jogo->playerName =  'Computer';
                    	$jogo->game =  $_SESSION['rodada'];
                    	$jogo->playerSummation = $playSum;
                    	$jogo->dice = implode(",", $dice);
                    	$jogo->matchId = $_SESSION['matchId'];
                    	
                    	$gravarGame->insertGame($jogo);
                    }
                    
                   
                    $jogadores = array($_SESSION['playerSum'] => $_SESSION['playerName'], $_SESSION['computerSum'] => "Computador");
                    krsort($jogadores);
                    $_SESSION['jogadores'] = $jogadores;                   
                    
                    if($fim == true){
                    	$rodada = $_SESSION['rodada'];
                    	$_SESSION['rodada'] = $rodada + 1;
                    	$fim = false;
                    }
                    
                    header("location:../View/MatchStartView.php");
                } else {
                	header("location:../View/MatchEndView.php");
                }
               	
                
                break;

        }
    }

?>