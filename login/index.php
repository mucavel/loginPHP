<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entrar</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="mainbody">
      <div id="container">
            <?php
                if(isset($_SESSION['invalido'])):
            ?>
             <div id="error-notification">
                  <p><strong>Erro:</strong> Dados Incorretos.</p>
            </div>
            <?php
                endif;
                unset($_SESSION['invalido']);
            ?>
       <div id="login-box">
           <form action="login.php" method="POST">
                <h1>Entrar</h1>
                <input type="text" name="nome" id="nome_id" placeholder="Nome" maxlength="30" required autofocus autocomplete="off">
                <input type="password" name="pass" id="pass_id" placeholder="Palavra-Passe" required>
                <input type="submit" value="Entrar">
                <a class="sem-conta-a" href="signup.php">Sem conta? Cadastre-se já!</a>
            </form>
        </div>
        </div>
    </div>
</body>
</html>