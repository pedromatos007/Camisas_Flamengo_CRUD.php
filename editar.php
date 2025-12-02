<?php
include("conexao.php");

$id = $_GET['id'];
$query = "SELECT * FROM camisas WHERE id = $id";
$result = mysqli_query($con, $query);
$camisa = mysqli_fetch_array($result);

if (isset($_POST['editar'])) {
    $modelo = $_POST['modelo'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    $update = "UPDATE camisas SET modelo='$modelo', tamanho='$tamanho', preco='$preco' WHERE id=$id";
    mysqli_query($con, $update);

    echo "<p>Camisa editada com sucesso!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Camisa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Editar Camisa</h1>

<form method="POST">
    <label>Modelo:</label>
    <input type="text" name="modelo" value="<?php echo $camisa['modelo']; ?>" required><br>

    <label>Tamanho:</label>
    <input type="text" name="tamanho" value="<?php echo $camisa['tamanho']; ?>" required><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" value="<?php echo $camisa['preco']; ?>" required><br>

    <button type="submit" name="editar">Salvar Alterações</button>
</form>

</body>
</html>
