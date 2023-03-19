<?php
//iniciando sessão
session_start();

//pegando os resultados do formulário
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if($name){
    //colocando o resultado da variavel em uma session
    $_SESSION['nameExe'] = $name;

    header('Location: index.php');
} else{
    header('Location: login.php');
}

