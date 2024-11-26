<?php
if (isset($_POST)) {
    if(!empty($_POST['nome'])) {
        $nome = $_POST['nome'];
        echo $nome;
    }
    
}