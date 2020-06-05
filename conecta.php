<?php 
	
	header('Content-Type: text/html; charset=utf-8');

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "etec";

	$conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

	$conexao-> set_charset("utf8");

	//ALTER DATABASE etec CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci

	if ($conexao -> connect_error) {
		echo "ERRO DE CONEXÃO";
	} else {
		echo "CONEXÃO BEM SUCEDIDA!";
	}

 ?>