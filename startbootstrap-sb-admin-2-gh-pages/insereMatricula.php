<?php
include 'conecta.php';
$matricula = $_POST['matricula'];
$datMat = $_POST['datMat'];
$rm_aluno = $_POST['rm_aluno'];
$cod_curso = $_POST['cod_curso'];


$consulta = $conexao->prepare("INSERT INTO ALUNOS (matricula,datMat,rm_aluno,cod_curso,cidade) VALUES ('$matricula','$datMat','$rm_aluno','$cod_curso')");

$consulta->execute();
?>

<script>
	alert("DADOS CADASTRADOS COM SUCESSO!");
	location.href = "index.php";
</script>