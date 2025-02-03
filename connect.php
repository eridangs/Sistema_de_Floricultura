<?php
$conn = new mysqli('localhost', 'root', '', 'sistema_floricultura');
if (!$conn) {
    die(mysqli_error($conn));
};
?>