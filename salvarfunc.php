<?php
    include("conexao.php");
   
	$nome = $_POST["nome"];
	$datanasc = $_POST["data_nasc"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$pai = $_POST["pai"];
	$mae = $_POST["mae"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	$result_func = "INSERT INTO funcionario(nome, datanasc, rg, cpf, pai, mae, email, telefone) 
					VALUES ('$nome', '$datanasc', '$rg', '$cpf', '$pai', '$mae', '$email', '$telefone')";
    $resultado_func = mysqli_query($conn, $result_func);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "Funcionário cadastrado com sucesso";
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