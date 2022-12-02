<?php
include("conexao.php");
$id = $_GET["id"];
$mysqli = new mysqli("localhost","root","","progweb");

$mysqli -> query("SELECT * FROM cliente");
echo "Total de registros encontrados: " . $mysqli -> affected_rows;

$mysqli -> query("DELETE FROM cliente WHERE id = $id");
echo "<br> Total de registros excluídos: " . $mysqli -> affected_rows;

$mysqli -> close();
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