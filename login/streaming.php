<?php
include('session-validation.php');
?>
<h3>Olá, <?php echo($_SESSION['nome']); ?></h3>
<a href="logout.php">Terminar Sessão</a> 