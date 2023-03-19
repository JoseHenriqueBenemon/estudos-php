<?php
    require 'config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = :id;";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php?msg=error_id");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>  
    <h2 style="text-align: center;">Alterar Usuário</h2>
    <form action="alterar.php" method="POST">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" value='<?=$result[0]['nome']?>' required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value='<?=$result[0]['email']?>' disabled>

        <label for="pwd">Senha</label>
        <input type="text" id="pwd" name="pwd" value='<?=$result[0]['senha']?>' required>

        <input type="hidden" name="id" value='<?=$id?>'>
        <input type="submit" value="Submit">
    </form>
</body>
</html>