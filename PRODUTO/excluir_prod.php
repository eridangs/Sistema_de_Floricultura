<?php
include "../connect/connect.php";

if(isset($_GET['idexcluido']));

$id = mysqli_real_escape_string($conn, trim($_GET['idexcluido']));

$consulta = "DELETE FROM produtos WHERE id_prod = $id";

$resultado_consulta = mysqli_query($conn, $consulta);

if($resultado_consulta){
    header ('location:listar_prod.php');
}else{
     echo 'Erro ao excluir produto';
}

 


?>