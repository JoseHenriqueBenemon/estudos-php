<?php 

require "config.php";

$id = $_GET['id'];

$query = "DELETE FROM usuarios WHERE id = :id;";

$stmt = $conn->prepare($query);
$stmt->bindParam(":id", $id);
$stmt->execute();

if($stmt){
    header("Location: index.php?msg=success_delete");
} else {
    header("Location: index.php?msg=error_delete");
}

die("Success Delete");
exit;