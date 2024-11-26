<?php
include 'conecta.php';
if (isset($_GET['id_cli'])){
    $id = $_GET['id_cli'];
    $sql = "DELETE FROM cliente WHERE id =$id";
    $result = mysqli_query($con,$sql);
    if ($result){
        echo "<script> alert('Deletado com sucesso!!') </script>";
        header('location: listar.php');
    }
}