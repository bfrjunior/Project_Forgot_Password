<?php
require_once'config.php';

$h = $_GET['h'];

if(!empty($h)){
	$pdo->query("UPDATE usuario SET status = '1' WHERE MD5(id) = '$h'");

	echo '<h2>Cadastro Confirmado com Sucesso! </h2>';

	

}

?>