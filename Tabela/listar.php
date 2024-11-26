<?php
    include 'conecta.php';
    $sql = "SELECT * FROM cliente";
    $result = mysqli_query($con,$sql);
    echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    table, td, th {
        border: 1px solid;
}

    table {
        width: 100%;
        border-collapse: collapse;
}
</style>
</head>
<body>
    <h1 class="titulo">TABELA</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>EMAIL</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $email = $row['email'];
                    $cpf = $row['cpf'];

                    echo '<tr>    
                    <td>'.$id.'</td>
                    <td>'.$nome.'</td>
                    <td>'.$cpf.'</td>
                    <td>'.$email.'</td>
                    <td> <a href="editar_cliente.php?id_cli='.$id.'"> Editar </a> </td>
                    <td> <a href="deletar_cliente.php?id_cli='.$id.'"> Excluir </a> </td>
                    </tr>';
                }
            }
        ?>
        </tbody>
    </table>
</body>
</html>
