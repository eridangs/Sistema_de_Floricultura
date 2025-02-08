<?php
include "../connect/connect.php";

if(isset($_GET['idped']));

$id = mysqli_real_escape_string($conn, trim($_GET['idped']));

$consulta = "DELETE FROM pedido WHERE id_pedi = $id";

$resultado_consulta = mysqli_query($conn, $consulta);

if($resultado_consulta){
    header ('location:listar_ped.php');
}else{
     echo 'Erro ao excluir pedido';
}

?>