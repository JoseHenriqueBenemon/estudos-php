<?php

require "config.php";

$data = $_POST;

if($data){
    $name = $data["name"];
    $pwd = $data["pwd"];
    $id = $data['id'];

    $sql = "UPDATE usuarios SET nome = :name, senha = :pwd WHERE id = :id;";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    if($stmt){// success_alter
        return header("Location: index.php?msg=success_alter");
    } else{ // error_alter
        return header("Location: adicionarUsuario.php?msg=error_alter");
    }
} 

die("Success Alter");
exit;