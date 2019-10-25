<?php
	
	require_once("db.class.php");

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "INSERT INTO usuarios(nome, sobrenome, usuario, email, senha) VALUES('$nome', '$sobrenome', '$usuario', '$email', '$senha')";

	if( mysqli_query($link, $sql) ) {
		//echo "Usuário cadastrado com sucesso!";
		header("Location: ../index.php");
	}
	else {
		echo "Erro ao tentar cadastrar o usuário";
	}

?>