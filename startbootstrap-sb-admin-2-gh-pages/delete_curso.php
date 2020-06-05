<?php
	include 'conecta.php';

	$codigo = $_GET ['cod'];

	$sql = "DELETE FROM cursos WHERE cod = '$codigo'";
	$resultado = $conexao->prepare($sql);
	$resultado -> execute();

	mysqli_close($conexao);

?>

<script>
	alert("DADOS EXCLUÍDOS COM SUCESSO!");
	location.href= "index.php";
</script>