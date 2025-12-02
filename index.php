<?php
include("conexao.php");
$consulta = "SELECT * FROM camisas";
$conCamisas = mysqli_query($con, $consulta);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Loja Flamengo - Camisas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Camisas do Flamengo</h1>

<a class="btn" href="cadastrar.php">Cadastrar Nova Camisa</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Modelo</th>
        <th>Tamanho</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    <?php while($dado = mysqli_fetch_array($conCamisas)) { ?>
    <tr>
        <td><?php echo $dado['id']; ?></td>
        <td><?php echo $dado['modelo']; ?></td>
        <td><?php echo $dado['tamanho']; ?></td>
        <td>R$ <?php echo $dado['preco']; ?></td>
        <td>
            <a href="editar.php?id=<?php echo $dado['id']; ?>">Editar</a> |
            <a href="excluir.php?id=<?php echo $dado['id']; ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
