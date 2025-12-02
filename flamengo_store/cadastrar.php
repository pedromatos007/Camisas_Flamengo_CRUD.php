<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Camisa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-4">

    <h2>Cadastrar Nova Camisa</h2>

    <form method="POST" enctype="multipart/form-data" class="mt-3">

        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" required>

        <label class="form-label mt-3">Tamanho</label>
        <input type="text" name="tamanho" class="form-control" required>

        <label class="form-label mt-3">Preço (R$)</label>
        <input type="number" step="0.01" name="preco" class="form-control" required>

        <label class="form-label mt-3">Imagem da Camisa</label>
        <input type="file" name="imagem" class="form-control" required>

        <button class="btn btn-danger mt-3" type="submit" name="cadastrar">
            Cadastrar
        </button>
    </form>

    <?php
    if (isset($_POST['cadastrar'])) {

        $modelo = $_POST['modelo'];
        $tamanho = $_POST['tamanho'];
        $preco = $_POST['preco'];

        $imgName = $_FILES['imagem']['name'];
        $imgTemp = $_FILES['imagem']['tmp_name'];

        $newName = uniqid() . "-" . $imgName;

        move_uploaded_file($imgTemp, "uploads/" . $newName);

        $sql = "INSERT INTO camisas (modelo, tamanho, preco, imagem)
                VALUES ('$modelo', '$tamanho', '$preco', '$newName')";

        mysqli_query($con, $sql);
        echo "<div class='alert alert-success mt-3'>Camisa cadastrada com sucesso!</div>";
    }
    ?>

</div>

</body>
</html>
