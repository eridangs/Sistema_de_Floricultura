<?php

include("connect.php");

if(isset($_POST['cadastrar']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($conn, trim($_POST['telefone']));
$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf'])); 

$sql = "INSERT INTO cliente(nome,telefone,cpf) VALUES('$nome', '$telefone','$cpf')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado com sucesso';
}else{
    echo 'Erro ao cadastrar';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO_CLIENTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST" action="cadastro_prod.php">
            <h4>NOME</h4>
            <input type="text" name="nome" id="nome" placeholder="Digite o seu nome: ">
            <h4>TELEFONE</h4>            
            <input type="text" name="telefone" id="telefone" placeholder="Digite o  número do seu telefone: ">
            <h4>CPF</h4>            
            <input type="char" name="cpf" id="cpf" placeholder="Digite o  número do seu cpf: ">      
            
            <button class="btn btn-success" type="submit" name="cadastrar" value="cadastrar">NOME CLIENTE</button>
        </form>
    </div>
</body>
</html>