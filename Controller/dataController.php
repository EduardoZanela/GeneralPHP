<?php
	include '../DAO/MatchDAO.php';
	include '../Model/MatchModel.php';
	
	$buscarGame = new MatchDAO();
	
	
	$array = $buscarGame->selectGame($_SESSION['matchId']);
	$arrayStatistic = array();
	
	foreach ($array as $b) {
		$game = new MatchModel();
		$game->id = $b['id'];
		$game->matchId = $b['matchId'];
		$game->playerName = $b['playerName'];
		$game->game = $b['game'];
		$game->palyerSummation = $b['payerSummation'];
		$game->dice = $b['dice'];
		array_push($arrayStatistic, $game);		
	}
	
	$_SESSION['statisticas'] = $arrayStatistic;
	
	
	
	?>