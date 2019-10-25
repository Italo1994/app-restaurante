<?php

	require_once("db.class.php");
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";

	$resultado = mysqli_query($link, $sql);

	if($resultado) {
		$dados_usuario = mysqli_fetch_array($resultado);

		var_dump($dados_usuario);
	}
	else {
		echo "Erro na execução da consulta, favor entrar em contato com o admin do site";
	}

?>