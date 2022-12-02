

<?php
include("conexao.php");
$id = $_GET["id"];
settype($id, "integer");

$sql = "select * from funcionario where id = $id";
$query = mysqli_query($conn, $sql);
$dados  = mysqli_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta charset="utf-8">
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Atualizar Funcionario</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar_edicaofuncionario.php">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
  <h2 align="center"><strong>Edição de Funcionario </strong></h2>
  <table width="390" border="1" align="center">
    <tr>
      <td width="165">Nome</td>
      <td width="209"><input name="nome" type="text" id="nome" value="<?php echo $dados["nome"];?>" /></td>
    </tr>
    <tr>
      <td>Nascimento</td>
      <td><input name="datanasc" type="text" id="datanasc" value="<?php echo $dados["datanasc"];?>" /></td>
</tr>
    <tr>
      <td>RG</td>
      <td><input name="rg" type="text" id="rg" value="<?php echo $dados["rg"];?>" /></td>
    </tr>
	<tr>
      <td>CPF</td>
      <td><input name="cpf" type="text" id="cpf" value="<?php echo $dados["cpf"];?>" /></td>
    </tr>
    <tr>
      <td>Endereço</td>
      <td><input name="pai" type="text" id="pai" value="<?php echo $dados["pai"];?>" /></td>
    </tr>
	<tr>
      <td>Estado</td>
      <td><input name="mae" type="text" id="mae" value="<?php echo $dados["mae"];?>" /></td>
    </tr>
	<tr>
      <td>E-Mail</td>
      <td><input name="email" type="text" id="email" value="<?php echo $dados["email"];?>" /></td>
    </tr>
	<tr>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone" value="<?php echo $dados["telefone"];?>" /></td>
    </tr>
    <tr>
      
      <td><input name="salvar" type="submit" id="salvar" value="ALTERAR" /></td>
    </tr>
</table>
</form>
</body>
</html>