<?php

    include "../connect/connect.php";
    include "../nav-bar.php";
  
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
    <h1>Cadastrar Cliente</h1>
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST" action="cadastro_cli.php">
            <h4>NOME</h4>
            <input type="text" name="nome_cli" id="nome_cli" placeholder="Digite o seu nome: ">
            <h4>TELEFONE</h4>            
            <input type="text" name="telefone" id="telefone" placeholder="Digite o número do seu telefone: ">
            <h4>CPF</h4>            
            <input type="char" name="cpf" id="cpf" placeholder="Digite o número do seu cpf: ">      
            
            <button class="btn btn-success" type="submit" name="cadastrar" value="cadastrar">CADASTRAR CLIENTE</button>
        </form>
    </div>
</body>
</html>
