<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "progweb";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
  }  else{
      "Conexaob realizada com sucesso";
}
?>