<?php
include("conexao.php");

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM camisas WHERE id=$id");
$camisa = mysqli_fetch_array($result);

if (isset($_POST['editar'])) {

    $modelo = $_POST['modelo'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    // Se o usuário enviar uma nova imagem
    if (!empty($_FILES['imagem']['name'])) {
        $imgName = $_FILES['imagem']['name'];
        $imgTemp = $_FILES['imagem']['tmp_name'];
        $newName = uniqid() . "-" . $imgName;

        move_uploaded_file($imgTemp, "uploads/" . $newName);

        $update = "UPDATE camisas SET 
            modelo='$modelo', 
            tamanho='$tamanho', 
            preco='$preco', 
            imagem='$newName' 
        WHERE id=$id";

    } else {
        $update = "UPDATE camisas SET 
            modelo='$modelo', 
            tamanho='$tamanho', 
            preco='$preco'
        WHERE id=$id";
    }

    mysqli_query($con, $update);
    echo "<div class='alert alert-success text-center mt-3'>Atualizado com sucesso!</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Camisa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <h2>Editar Camisa</h2>

    <form method="POST" enctype="multipart/form-data">

        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" value="<?php echo $camisa['modelo']; ?>" class="form-control" required>

        <label class="form-label mt-3">Tamanho</label>
        <input type="text" name="tamanho" value="<?php echo $camisa['tamanho']; ?>" class="form-control" required>

        <label class="form-label mt-3">Preço</label>
        <input type="number" step="0.01" name="preco" value="<?php echo $camisa['preco']; ?>" class="form-control" required>

        <p class="mt-3">Imagem atual:</p>
        <img src="uploads/<?php echo $camisa['imagem']; ?>" width="200" class="mb-3">

        <label class="form-label">Alterar imagem (opcional)</label>
        <input type="file" name="imagem" class="form-control">

        <button class="btn btn-warning mt-3" type="submit" name="editar">
            Salvar Alterações
        </button>
    </form>

</div>

</body>
</html>
