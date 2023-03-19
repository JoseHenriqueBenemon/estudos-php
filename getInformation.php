<?php
session_start();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // 3° parametro é um validador de email
$senha = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_NUMBER_INT); // 3° parametro é um número inteiro

// all filter_validate - tira tudo que não está de acordo com o filtro

// FILTER_VALIDATE_BOOL
// FILTER_VALIDATE_DOMAIN
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_FLOAT
// FILTER_VALIDATE_INT
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_MAC
// FILTER_VALIDATE_REGEXP
// FILTER_VALIDATE_URL

// all filter_sanitize - limpam a variaveis, tirando as impuresas que não estão vinculadas com o filtro

// FILTER_SANITIZE_EMAIL
// FILTER_SANITIZE_ENCODED
// FILTER_SANITIZE_MAGIC_QUOTES
// FILTER_SANITIZE_ADD_SLASHES
// FILTER_SANITIZE_NUMBER_FLOAT
// FILTER_SANITIZE_NUMBER_INT
// FILTER_SANITIZE_SPECIAL_CHARS
// FILTER_SANITIZE_FULL_SPECIAL_CHARS
// FILTER_SANITIZE_STRING
// FILTER_SANITIZE_STRIPPED
// FILTER_SANITIZE_URL
// FILTER_UNSAFE_RAW

if($name && $senha && $email){

    //para setar um cookie, não pode aparecer nada na tela antes do cookie ser setado
    setcookie('name', $name, time() + 86400);
    setcookie('email', $email, time() + 86400);
    setcookie('password', $senha, time() + 86400);

    header('Location: dashboard.php');
} else{

    $_SESSION['msg'] = 'Preencha os campos corretamente!';

    //apenas conseguimos usar o header quando nada é mostrado para o usuário na página que o formulário é enviada
    header('Location: index.php');
    exit; //exit para quebrar a página que o formulario foi enviado
}