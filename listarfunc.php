<?php
include("conexao.php");

$sql = "select * from funcionario";
$query = mysqli_query($conn, $sql);

?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lista de funcionario</title>
<style>
  .botao {
     margin: 0 auto;
     width: 100px;
  }
</style>
</head>

<body>


<h1><center> Funcionarios </center></h1>
<table width="500" border="1" align="center">
<thead> 
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>DATA DE NASCIMENTO</th>
    <th>RG</th>
    <th>CPF</th>
    <th>PAI</th>
    <th>MAE</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>

    <th>EDITAR/EXCLUIR</th>
</tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
  $id = $L["id"];
	$nome      = $L["nome"];
	$datanasc      = $L["datanasc"];
	$rg     = $L["rg"];
	$cpf     = $L["cpf"];
	$pai    = $L["pai"];
	$mae     = $L["mae"];
	$email    = $L["email"];
	$telefone     = $L["telefone"];
	
    echo"
<tbody>
  <tr>
    <td>$id</id>
    <td>$nome</td>
    <td>$datanasc</td>
    <td>$rg</td>
    <td>$cpf</td>
    <td>$pai</td>
    <td>$mae</td>
    <td>$email</td>
    <td>$telefone</td>
    <td><a href=\"editarfuncionario.php?id=$id\">[Editar]</a> | 
	<a href=\"excluirfunc.php?id=$id\">[Excluir]</a></td>
  </tr>
  </tbody>\n";
}  
?>  
</table>
<BR><BR>
<div class=botao><a href="painel.html"><button>PAINEL</button></a></div>
</body>
</html>

