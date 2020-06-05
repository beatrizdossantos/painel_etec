<?php
include 'conecta.php';
$curso = $_POST['curso'];
$consulta = $conexao->prepare("INSERT INTO CURSOS (curso) VALUES ('$curso')");
$consulta->execute();
?>

<script>
	alert("DADOS CADASTRADOS COM SUCESSO!");
	location.href = "index.php";
</script>