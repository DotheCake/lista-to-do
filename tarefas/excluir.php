<?php
$id = $_GET['id'];
include "conexao-db.php";
$sql = "delete from tb_tarefas where id = $id";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location: index.php'); 
?>