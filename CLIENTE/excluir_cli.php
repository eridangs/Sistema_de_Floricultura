<?php
include "../connect/connect.php";

if(isset($_GET['idcli']));

$id = mysqli_real_escape_string($conn, trim($_GET['idcli']));

$consulta = "DELETE FROM cliente WHERE id_clie = $id";

$resultado_consulta = mysqli_query($conn, $consulta);

if($resultado_consulta){
    header ('location:listar_prod.php');
}else{
     echo 'Erro ao excluir produto';
}