<?php
setcookie('name', '', time() - 3600);
setcookie('email', '', time() - 3600);
setcookie('password', '', time() - 3600);

//voltar para o index
header('Location: index.php');