<?php 
//inicinado a sessão
session_start();

$null = '';
$_SESSION['nameExe'] = $null;

header('Location: login.php');