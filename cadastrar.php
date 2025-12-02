<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Camisa - Flamengo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Cadastrar Nova Camisa</h1>

<form method="POST">
    <label>Modelo:</label>
    <input type="text" name="modelo" required><br>

    <label>Tamanho:</label>
    <input type="text" name="tamanho" required><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" required><br>

    <button type="submit" name="cadastrar">Cadastrar</button>
</form>

<?php
if (isset($_POST['cadastrar'])) {
    $modelo = $_POST['modelo'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO camisas (modelo, tamanho, preco) VALUES ('$modelo', '$tamanho', '$preco')";
    mysqli_query($con, $sql);

    echo "<p>Camisa cadastrada com sucesso!</p>";
}
?>

</body>
</html>
