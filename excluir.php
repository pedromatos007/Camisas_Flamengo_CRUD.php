<?php
include("conexao.php");

$id = $_GET['id'];
$sql = "DELETE FROM camisas WHERE id = $id";

mysqli_query($con, $sql);

header("Location: index.php");
exit;
?>
