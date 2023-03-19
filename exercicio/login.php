<?php
    session_start();

    if(!empty($_SESSION['nameExe'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>

    <style>
        a{
            text-decoration: none;
            padding: 0.50rem 1rem;
            border: 1px solid gray;
            background: #87CEEB;
            color: black;
            transition: padding 1s;
        }

        a:hover{
            padding: 0.75rem 1.5rem;
        }
    </style>
</head>
<body>
    <form method="POST" action="getInformation.php">
        <label for="name">Nome: </label><br />
        <input type="text" name="name" id="name" /><br />

        <button type="submit">Enviar</button>
    </form>

    <hr /><br /> 
    <a href="../index.php">Voltar para os estudos</a>
</body>
</html>