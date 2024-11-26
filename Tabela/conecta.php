<?php
$banco = "cadastro";
$local = "10.38.0.108";
$user = "devweb";
$password = "suporte@22";

$con = new mysqli($local,$user,$password,$banco);
if ($con->connect_error) {
    die("Falha na conexão". mysqli_error($con));
}