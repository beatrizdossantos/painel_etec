<?php
include 'conecta.php';
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];


$consulta = $conexao->prepare("INSERT INTO ALUNOS (nome,idade,email,telefone,cidade) VALUES ('$nome','$idade','$email','$telefone','$cidade')");

$consulta->execute();
?>

<script>
	alert("DADOS CADASTRADOS COM SUCESSO!");
	location.href = "index.php";
</script>