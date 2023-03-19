<?php
spl_autoload_register(function($class){
    $baseDir = __DIR__ . "/OO/classes"; // onde os arquivos de classe estão

    $file = $baseDir . str_replace("\\", "/", $class) .  ".php"; // nome do arquivo inteiro desde o seu diretório

    if(file_exists($file)){ // esse "file_exists" verifica se o arquivo que está sendo pedido para carregar existe
        return $file;
    }
    
    // if(file_exists("classes/" . $class . ".php")){ esse "file_exists" verifica se o arquivo que está sendo pedido para carregar existe
    //     require "classes/" . $class . ".php";
    // }
});