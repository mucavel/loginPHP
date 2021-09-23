<?php
define('host','localhost');
define('usuario','root');
define('passe','');
define('dbname','streamer');

$conexao = mysqli_connect(host,usuario,passe,dbname) or die('Erro ao conectar!');
?>