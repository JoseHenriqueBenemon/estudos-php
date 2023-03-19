<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>  
    <h2 style="text-align: center;">Adicionar Usuário</h2>
    <form action="adicionar.php" method="POST">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Seu nome" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Seu Email" required>

        <label for="pwd">Senha</label>
        <input type="password" id="pwd" name="pwd" placeholder="Sua Senha" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>