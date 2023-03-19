<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Require puxa informações de outros arquivos, porém se der erro irá ser fatal
        require('header.php'); 
        
        
        //require_once puxa informações de outros arquivos, porém se tiver mais require_once direcionando 
        //para um único arquivo, irá funcionar apenas uma vez
        require_once('header.php'); 
        
        //incude puxa informações de outros arquivos, porém se der erro o código ainda irá ser executado
        include('example.php'); 
        ?>
    
    <p>Conteudo de sobre...</p>
</body>
</html>