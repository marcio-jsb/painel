

<?php
    include("conexao.php");
    $id = $_POST["id"];
	$nome = $_POST["nome"];
	$datanasc = $_POST["datanasc"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$endereco = $_POST["endereco"];
	$estado = $_POST["estado"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	$result_cli = "UPDATE  cliente SET nome = 	'$nome', datanasc ='$datanasc',rg = '$rg', cpf = '$cpf', endereco= '$endereco', estado = '$estado', email = '$email', telefone = '$telefone' where id='$id'";
					
    $resultado_cli = mysqli_query($conn, $result_cli);
    

		header("Location:listarcliente.php");
           
		
?>