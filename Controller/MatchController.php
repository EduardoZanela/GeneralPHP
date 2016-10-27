<?php
    session_start();

    if(isset($_GET['operation'])){
        switch ($_GET['operation']){
            case 'start':
                if(!empty($_POST['Name'])) {
                    $_SESSION['playerName'] = $_POST['Name'];
                    $_SESSION['game'] = 1;
                    $_SESSION['rodada'] = 1;
                    header("location:../View/MatchStartView.php");
                }else{
                    echo 'Campo nome não pode ser vazio';
                }
                break;

            case 'play':
                $game = $_POST['game'];
                
                $_SESSION['game'] = $game+1;
                if($game <= 20){ 
                	$dice = array();
                	$jogadores = array();
                	for ($i = 1; $i <= 6; $i++){
                		$dice[$i] = rand(1,6);
                	}
                	$_SESSION['dice'] = $dice;
                	
                	$playSum = array_sum($dice);
                	                	
                    if($game % 2 == 0){
                        $_SESSION['playerSum'] += $playSum;
                        $fim = true;

                    } else{
                    	$_SESSION['computerSum'] += $playSum;
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