<?php
$conn = new mysqli('localhost', 'root', '', 'sistemafloricultura');
if (!$conn) {
    die(mysqli_error($conn));
};
?>