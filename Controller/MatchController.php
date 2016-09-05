<?php
    session_start();

    if(isset($_GET['operation'])){
        switch ($_GET['operation']){
            case 'start':
                if(!empty($_POST['Name'])) {
                    $_SESSION['playerName'] = $_POST['Name'];
                    header("location:../View/MatchStartView.php");
                }else{
                    echo 'Campo nome não pode ser vazio';
                }
                break;

            case 'play':
                $game = $_POST['game'];
                $_SESSION['game'] = $game;
                if($game <= 10){
                    if($game % 2 = 0){
                        $dice = array();
                        for ($i = 1; $i >= 6; $i++){
                            $dice[$i] = rand(1,6);
                        }
                        $_SESSION['dice'] = $dice;

                    } else{

                    }
                }
                break;

        }
    }

?>