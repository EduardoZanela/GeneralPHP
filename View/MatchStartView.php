<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h2>Olá <?php echo $_SESSION['playerName'];?> você está jogando General</h2>
    <br>
    <p>Para começar aperte o botão Jogar, você está jogando contra o computador e será o player Two</p>

    <form action="../Controller/MatchController.php?operation=play" method="post" name="cadUser">
        <input type="hidden" name="game" value="1" />
        <input type="submit" name="btnJogar" id="btnJogar" placeholder="JogarDados"/><br>
    </form>

</body>
</html>

