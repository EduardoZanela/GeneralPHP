<?php
	session_start();
	include 'header.php';
	include '../Controller/dataController.php';
    
?>

<body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix" style="position: relative;">
            <?php 		
            		$fruits = array();
            		//array_pop($_SESSION['jogadores']);
			      	$fruits = $_SESSION['jogadores'];
				  	foreach ($fruits as $key => $val) {	
			?>
			<div class="inner">
				<h2>Olá <?php echo $_SESSION['playerName']; ?> você está jogando General</h2>
              	<h3>Vencedor desta rodada foi: <?php echo $val;?> </h3>
              	<h4>com <?php echo $key;?> pontos</h4>
            </div>			
			
			<?php 
				  	}
			 ?>
			</div>
			
			<h3>Estatisticas da Partida</h3>
			
          <div class="inner cover">      
         
		  	<div class="table-responsive">
			  <table class="table">
			    <thead>
			      <tr>
			        <th>#</th>
			        <th>Id da Partida</th>
			        <th>Nome</th>
			        <th>Rodada</th>
			        <th>Somatorio</th>
			        <th>Dados</th>		       
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
			      	$fruits = array();
			      	$fruits = $_SESSION['statisticas'];
				  	foreach ($fruits as $game) {		      
			      ?>
			      <tr>
			        <td><?php echo $game->id;?></td>
			        <td><?php echo $game->matchId;?></td>
			        <td><?php echo $game->playerName;?></td>
			        <td><?php echo $game->game;?></td>
			        <td><?php echo $game->palyerSummation;?></td>
			        <td><?php echo $game->dice;?></td>		        				        
			      </tr>
			      <?php }?>
			    </tbody>
			  </table>
		  	</div>          	
                  
          <div class="mastfoot" style="position: relative;">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>
		
    </div>	
   
  </body>
</html> 
