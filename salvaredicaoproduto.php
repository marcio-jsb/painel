

<?php
    include("conexao.php");
    $id=$_POST["id"];
    $nome = $_POST["nome"];
	$data_val = $_POST["data_val"];
	$tipo = $_POST["tipo"];
	$especie = $_POST["especie"];
	$fornecedor = $_POST["fornecedor"];
	$valor = $_POST["valor"];
	$obs = $_POST["obs"];
	$telefone = $_POST["telefone"];
	
	$result_cli = "UPDATE produto SET nome = '$nome', data_val ='$data_val',tipo = '$tipo', especie = '$especie', fornecedor= '$fornecedor', valor = '$valor', obs = '$obs', telefone = '$telefone' where id='$id'";
    $resultado_cli = mysqli_query($conn, $result_cli);
    
   
        header("Location:listarproduto.php");
            
                    
?>
		