<?php
include ("conexao.php");

 $nome = $_POST["nome"];
 $data_val = $_POST["data"];
 $tipo = $_POST["tipo"];
 $valor = $_POST["valor"];
 $especie = $_POST["especie"];
 $fornecedor = $_POST["fornecedor"];
 $observacoes = $_POST["obs"];
 $telefone = $_POST["telefone"];


$result_prod = "INSERT INTO produto (nome, data_val, tipo, especie, fornecedor, valor, obs, telefone) 
VALUES ('$nome', '$data_val', '$tipo', '$valor', '$especie', '$fornecedor', '$observacoes', '$telefone')";
               
$resultado_prod = mysqli_query ($conn, $result_prod);

if (mysqli_affected_rows($conn) != 0) {
    echo "Produto cadastrado com sucesso";
}else{
    echo "Erro ao cadastrar";
}


?>
<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=<html, initial-scale=1.0">
				<title>Document</title>
				<style>
			  .botao {
				 margin: 0 auto;
				 width: 100px;
			  }
			</style>
			</head>
			<body>
			<BR><BR>
			<div class=botao><a href="painel.html"><button>PAINEL</button></a></div>
			</body>
			</html>