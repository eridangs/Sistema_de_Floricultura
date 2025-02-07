<?php
require 'connect.php';

if(isset($_GET['ideditado'])){

    $id = $_GET['ideditado'];

    $consulta = "SELECT * FROM produtos WHERE id_prod = $id";

    $resultado_consulta = mysqli_query($conn, $consulta);

    $produto = mysqli_fetch_assoc($resultado_consulta); 
    // var_dump($produto);
    // echo $produto['quantidade_estoque'];

}else{
    header('location:listar.php');
}


if(isset($_POST['editar'])){
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $quantidade = $_POST['quantidade_estoque'];
    $preco = $_POST['preco'];

    $consulta = "UPDATE produtos SET nome='$nome', tipo= '$tipo', quantidade_estoque= '$quantidade', preco= '$preco' WHERE id_prod= $id";

    $resultado_consulta = mysqli_query($conn,$consulta);

    if($resultado_consulta){
        header ('location:listar_prod.php');
    }else{
        echo 'Erro ao editar produto';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR_PRODUTOS_FLORICULTURA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Editar Produto</h1>

    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST">
            <div class="form-group">
                <h4>NOME</h4>
                <input type="text" class="form-control" name="nome" id="nome"  placeholder="" value=<?php echo $produto['nome']; ?>>
            </div>
            <div class="form-group">
                <h4>TIPO</h4>            
                <input type="text" class="form-control" name="tipo" id="tipo"  placeholder="" value=<?php echo $produto['tipo']; ?>>
            </div>
            <div class="form-group">
                <h4>QUANTIDADE</h4>            
                <input type="text" class="form-control" name="quantidade_estoque" id="quantidade_estoque"  placeholder="" value=<?php echo $produto['quantidade_estoque']; ?>>
            </div>
            <div class="form-group">
                <h4>PREÇO</h4>
                <input type="text" class="form-control" name="preco" id="preco"  placeholder="" value=<?php echo $produto['preco']; ?>>
            </div>
            
            <button class="btn btn-danger" type="reset" name="cancelar">Cancelar</button>
            <button class="btn btn-success" type="submit" name="editar" value="editar">EDITAR PRODUTO</button>
        </form>
    </div>
</body>
</html>
<!-- 
        // $nome = $linha_retornada['nome'];
        // $tipo = $linha_retornada['tipo'];
        // $quantidade = $linha_retornada['quantidade_estoque'];
        // $preco = $linha_retornada['preco']; -->