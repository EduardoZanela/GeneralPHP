<?php 
	include 'header.php';
	session_start();
	session_destroy();
?>
  <body style="background-image: url('../Include/assets/images/bg.jpg'); background-repeat: no-repeat; background-size: 100%; font-family: 'Lobster', cursive;">

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              	<h1 style="font-size: 100px">General Game</h1>
            </div>
          </div>

          <div class="inner cover">         
          <form action="../Controller/MatchController.php?operation=start" method="post" name="cadUser">
			  <div class="form-group">
			    <label for="email"  style="font-size: 30px">Seu Nome:</label>
			    <input name="Name" id="Name" placeholder="Nome do jogador" class="form-control" >
			  </div>
			  <button name="btnJogar" id="btnJogar" type="submit" class="btn btn-default">Começar</button>
			</form>            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

   
  </body>
</html>       

