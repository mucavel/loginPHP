<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="mainbody">
      <div id="container">
<!--
             <div id="error-notification">
                  <p>Erro! Dados Inválidos.</p>
            </div>
-->
       <div id="login-box">
           <form action="login.php" method="POST">
                <h1>Cadastrar</h1>
                <input type="text" name="nome" id="nome_id" placeholder="Nome" maxlength="30" required autofocus autocomplete="off">
                <input type="password" name="pass" id="pass_id" placeholder="Palavra-Passe" required>
                <input type="submit" value="Entrar">
                <a class="sem-conta-a" href="index.php">Tem conta? Entre já!</a>
            </form>
        </div>
        </div>
    </div>
</body>
</html>