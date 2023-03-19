<?php

namespace Database;

require "../vendor/autoload.php";

use Database\DatabaseInterface;

class Mongo implements DatabaseInterface
{
    public function add($obj)
    {
        // insere o obj dentro do banco de dados Mysql
        // ...

        return "Objeto inserido com Mongo!";
    }

    public function delete($obj)
    {
        // deleta o obj dentro do banco de dados Mysql
        // ...

        return "Objeto deletado com Mongo!";
    }

    public function modify($obj)
    {
        // modifica o obj dentro do banco de dados Mysql
        // ...

        return "Objeto modificado com Mongo!";
    }

    public function search($obj)
    {
        // procura o obj dentro do banco de dados Mysql
        // ...

        return "Objeto encontrado com Mongo!";
    }

    public function list($obj)
    {
        // procura o obj dentro do banco de dados Mysql
        // ...

        return "Objetos listados com Mongo!";
    }
}