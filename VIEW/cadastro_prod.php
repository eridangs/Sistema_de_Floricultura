<?php

include("MODEL\BD\connect.php");


if(isset( $_POST['cadastrar']));
echo '<br>';
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produtos(nome,tipo,quantidade,preco) VALUES('$nome','$tipo','$quantidade','$preco')";

$result = mysqli_query($conn,$sql);

if($result){
    echo 'Cadastrado com sucesso';
}else{
    echo 'Erro ao cadastrar';
}
?>