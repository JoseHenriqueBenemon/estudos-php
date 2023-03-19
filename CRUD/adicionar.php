<?php

require "config.php";

$data = $_POST;

if($data){
    $name = $data["name"];
    $email = $data["email"];
    $pwd = $data["pwd"];

    $sql = "SELECT * FROM usuarios WHERE email = :email;";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        return header("Location: adicionarUsuario.php");
    }

    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES(:name, :email, :pwd);";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->execute();

    if($stmt){// sucess_create
        return header("Location: index.php?msg=success_create");
    } else{ // error_create
        return header("Location: adicionarUsuario.php?msg=error_create");
    }
} 

die("Success Create");
exit;