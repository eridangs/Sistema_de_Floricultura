<?php

include("connect.php");

if(isset($_POST['cadastrar']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$tipo = mysqli_real_escape_string($conn, trim($_POST['tipo']));
$quantidade = mysqli_real_escape_string($conn, trim($_POST['quantidade']));
$preco = mysqli_real_escape_string($conn, trim($_POST['preco'])); 

$sql = "INSERT INTO produtos(nome,tipo,quantidade_estoque,preco) VALUES('$nome', '$tipo','$quantidade', '$preco')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado com sucesso';
}else{
    echo 'Erro ao cadastrar';
}
?>

