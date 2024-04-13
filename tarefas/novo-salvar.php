<?php 

$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

// echo "$titulo : $descricao";

include "conexao-db.php";
$sql = "insert into tb_tarefas(titulo, descricao) values ('$titulo', '$descricao')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:index.php");

?>