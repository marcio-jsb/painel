

<?php
    include("conexao.php");
   
	$nome = $_POST["nome"];
	$datanasc = $_POST["datanasc"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$endereco = $_POST["endereco"];
	$estado = $_POST["estado"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	$result_cli = "INSERT INTO cliente(nome, datanasc, rg, cpf, endereco, estado, email, telefone) 
					VALUES ('$nome', '$datanasc', '$rg', '$cpf', '$endereco', '$estado', '$email', '$telefone')";
    $resultado_cli = mysqli_query($conn, $result_cli);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "Cliente cadastrado com sucesso";
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