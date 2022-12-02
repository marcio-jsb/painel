

<?php
    include("conexao.php");
    $id = $_POST["id"];
	$nome = $_POST["nome"];
	$datanasc = $_POST["datanasc"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$pai = $_POST["pai"];
	$mae = $_POST["mae"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	$result_cli = "UPDATE  funcionario SET nome ='$nome', datanasc ='$datanasc' ,rg = '$rg', cpf = '$cpf', pai= '$pai', mae = '$mae', email = '$email', telefone = '$telefone' where id='$id'";
					
    $resultado_cli = mysqli_query($conn, $result_cli);
    

		header("Location:listarfunc.php");
           
			
?>