<?php
include("conexao.php");

$id = $_GET['id'];

$consulta = mysqli_query($con, "SELECT imagem FROM camisas WHERE id=$id");
$img = mysqli_fetch_array($consulta)['imagem'];

unlink("uploads/" . $img);

mysqli_query($con, "DELETE FROM camisas WHERE id=$id");

header("Location: index.php");
exit;
?>
