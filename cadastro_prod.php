<?php

include("connect.php");

if(isset($_POST['cadastrar']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$tipo = mysqli_real_escape_string($conn, trim($_POST['tipo']));
$quantidade = mysqli_real_escape_string($conn, trim($_POST['quantidade']));
$preco = mysqli_real_escape_string($conn, trim($_POST['preco'])); 

$consulta = "INSERT INTO produtos(nome,tipo,quantidade_estoque,preco) VALUES('$nome', '$tipo','$quantidade', '$preco')";

$resultado_consulta = mysqli_query($conn,$consulta);

if($resultado_consulta){
    echo "Cadastro finalizado com sucesso";
    header ('location:index.php');
}else{
    echo 'Erro ao cadastrar';
}
?>

