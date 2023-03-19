<?php
    //Iniciando a sessão
    session_start();
    
    //Verificando se a sessão não está vazia
    if(!empty($_SESSION['nameExe'])){
        echo 'Olá, ' . $_SESSION['nameExe'] . ". - ";
        echo '<a href="apagar.php">Sair</a>';
    } else {
        header('Location: login.php');
    }
?>
