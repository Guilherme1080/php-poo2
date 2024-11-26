<?php
    require_once '../Classes/usuario.php';
    $usuario = new Usuario();
    $usuario->conectar("cadastro", "10.38.0.125","devweb","suporte@22");
    $usuarioCasdastrados = $usuario->listarUsuarios();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuario Cadastrado</h1>
    <table>
        <thead>
            <tr>
                <th>nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($usuarioCasdastrados))
            {
                foreach($usuarioCasdastrados as $dados):
            
            ?>
            <tr>
                <td><?php echo $dados['nome']?></td>
                <td><?php echo $dados['email']?></td>
                <td><?php echo $dados['telefone']?></td>
            </tr>
            <?php 
                endforeach;
                }
                else
                {
                    echo "Nenhum Registro encontrado";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>