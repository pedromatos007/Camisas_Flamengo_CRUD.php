<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "flamengo_store";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
