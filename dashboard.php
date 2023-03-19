<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        a{
            text-decoration: none;
            padding: 0.75rem 1.25rem;
            border: 1px solid black;
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        //inputando o header na página
        require_once('template/header.php');

        //passando as variaveis salvas no cookie

        echo 'Nome: ' . $_COOKIE['name'] . "<br />";
        echo 'Email: ' . $_COOKIE['email'] . "<br />";
        echo 'Senha: ' . $_COOKIE['password'] . "<br />";
    ?>
    
    <br />
    <a href="apagar.php">Voltar para o início</a>

</body>
</html>