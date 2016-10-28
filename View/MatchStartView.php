<?php
	session_start();
	include 'header.php';  
?>

<body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              	<h2>Olá <?php echo $_SESSION['playerName']; ?> você está jogando General</h2>
            </div>
          </div>	
			
          <div class="inner cover">
          <h5>Rodada: <?php echo $_SESSION['rodada']; ?></h5>
          <?php 
          		if($_SESSION['game'] > 1){
          			
          		?>
		  	<div class="table-responsive">
			  <table class="table">
			    <thead>
			      <tr>
			        <th>#</th>
			        <th>Nome</th>
			        <th>Pontos</th>		       
			      </tr>
			    </thead>
			    <tbody>
			    <?php 
			      	$fruits = array();
			      	$fruits = $_SESSION['jogadores'];
				  	foreach ($fruits as $key => $val) {		      
			      ?>
			      <tr>			      
			        <td>1</td>
			        <td><?php echo $val;?></td>
			        <td><?php echo $key;?></td>		        				        
			      </tr>
			      <?php }?>
			    </tbody>
			  </table>
		  	</div>
          	<?php 
          	}
          	?>
          <br>         
          <p>Para começar aperte o botão Jogar, você está jogando contra o computador e será o segundo jogador</p>
          
          <br><br>
          <h3>
          	<?php 
          		if($_SESSION['game'] > 1){
	          		if($_SESSION['game'] % 2 == 0){
	          			echo "Dados do computador";
	          		}
	          		else{
	          			echo "Seus dados";
	          		}
          		}
          	?>
          </h3>
          <p>
          
          <?php 
          	if(isset($_SESSION['dice'])){
          		$dice = array();
          		$dice = $_SESSION['dice'];
          		foreach ($dice as $d){
          			
          	?>		
          	
          	<img src="../Include/assets/images/0<?php echo $d ?>.png" />
          			
          <?php			
          		}
          			
          	}         
          ?>
          
          </p>
          
          <br><br>       
          <form action="../Controller/MatchController.php?operation=play" method="post" name="cadUser" id="cadUser">
			  <input type="hidden" name="game" value="<?php echo $_SESSION['game']; ?>" />
			  <?php if($_SESSION['game'] % 2 == 0){ ?> 
			  	<button name="btnJogar" id="btnJogar" type="submit" class="btn btn-default">Jogar Dados</button>
			  <?php }?>
			</form>           
          </div>
			<?php if($_SESSION['game'] % 2 != 0){ ?>
				<script>
				$('#cadUser').submit( function(event) {
				    var form = this;
					console.log("Submit");
				    event.preventDefault();

				    setTimeout( function () { 
				        form.submit();
				        console.log("end Delay");
				    }, 5000);
				}); 
				</script>
				<p id="cc"></p>
			<?php }?>
          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>
		
    </div>
	<span id="aa"><span>
	<script>
		console.log("ola");
		<?php if($_SESSION['game'] % 2 != 0){ ?>
			$('#cadUser').submit();
		<?php }?>
		$(function(){
			$("#cc").countdowntimer({
				seconds : 5
			});
		});
	
	</script>
   
  </body>
</html> 
