<?php
    require_once '../Classes/usuario.php';
    $usuario = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>TELA DE CADASTRO DO USÚARIO</h2>
    <form method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" placeholder="Digite seu nome completo"><br>

        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Digite seu email"><br>

        <label>Telefone:</label><br>
        <input type="tel" name="telefone" placeholder="Digite seu Telefone"><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" placeholder="Crie uma senha"><br>

        <label>Confirme sua senha:</label><br>
        <input type="password" name="confSenha" placeholder="Confirme sua senha"><br>

        <input type="submit" value="CADASTRAR">

        <p>Já cadastrado? clique <a href="login.php">aqui</a> para acessar.</p>

    </form>

    <?php
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $senha = $_POST['senha'];
            $confirmarSenha = addslashes($_POST['confSenha']);

            if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confirmarSenha))
            {
                $usuario->conectar("cadastro140", "localhost", "root", "");
                if($usuario->msgErro=="")
                {
                    if($senha == $confirmarSenha)
                    {
                        if($usuario->cadastroUsuario($nome, $email, $telefone, $senha))
                        {
                            ?>
                            <div class="msg-erro">
                                <p>Cadastro realizado com sucesso</p>
                                <p>Clique aqui para <a href ="loguin.php">logar.</a></p>
                            </div>

                            <?php
                        }

                    }
                    else
                    {

                    }

                }
                else
                {
                    ?>
                        <div>
                            <?php echo "Erro: ".$usuario->msgErro; ?>
                        </div>

                    <?php
                }

            }
            else
            {
                ?>

                    <div class ="msg-erro">
                        <p>Prencha todos os campos. </p>
                    </div>

                <?php
            }
        }
    ?>
</body>
</html>