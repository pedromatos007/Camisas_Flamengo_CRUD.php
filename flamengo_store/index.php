<?php
include("conexao.php");
$consulta = mysqli_query($con, "SELECT * FROM camisas");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Loja Flamengo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav class="navbar navbar-dark px-3">
    <a class="navbar-brand text-white" href="#">Loja do Flamengo</a>
</nav>

<div class="container mt-4">

    <div class="d-flex justify-content-between">
        <h2>Camisas Disponíveis</h2>
        <a class="btn btn-danger" href="cadastrar.php">Cadastrar Camisa</a>
    </div>

    <div class="row mt-4">
        <?php while ($dado = mysqli_fetch_array($consulta)) { ?>
        <div class="col-md-4 mt-3">
            <div class="card shadow">

                <img src="uploads/<?php echo $dado['imagem']; ?>" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $dado['modelo']; ?></h5>
                    <p class="card-text">Tamanho: <?php echo $dado['tamanho']; ?></p>
                    <p class="card-text fw-bold text-danger">R$ <?php echo number_format($dado['preco'], 2, ',', '.'); ?></p>

                    <a href="editar.php?id=<?php echo $dado['id']; ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir.php?id=<?php echo $dado['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja excluir?')">Excluir</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>

</body>
</html>
