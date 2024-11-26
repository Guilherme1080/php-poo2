<?php
include 'conecta.php';
$id_recebido = $_GET['id_cli']; 
$sql = "SELECT * FROM cliente WHERE id=$id_recebido";

$result = mysqli_query($con,$sql);

if ($result ->num_rows == 1){
    //convertendo o retorno do banco em array no php
    $row = mysqli_fetch_assoc($result);
    //armazenando a posicao do array nas variáveis
    $nome = $row['nome'];
    $email = $row['email'];
    $cpf = $row['cpf'];


}
if (isset($_POST['salvar'])){
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $cpf =$_POST['cpf'];
    $update = "UPDATE cliente SET nome = '$nome',email = '$email', cpf = '$cpf' WHERE id= $id_recebido";
    $result2 = mysqli_query($con,$update);
    if($result2){
        echo '<script> alert("Editado com sucesso!!!") </script>';
        

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Cadastro</h1>
    <form id="formulario" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value=" <?php echo $nome ?> ">
        <br> 
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value=" <?php echo $email ?> ">
        <br> 
        <label for="cpf">cpf: </label>
        <input type="text" name="cpf" id="cpf" value=" <?php echo $cpf ?> ">
        <br> 
        <input type="submit" name="salvar" value="Salvar" >
    </form>
</body>
</html>