<?php

namespace Database;

require "../vendor/autoload.php";

use Database\DatabaseInterface;

class Mysql implements DatabaseInterface
{
    public function add($obj)
    {
        // insere o obj dentro do banco de dados Mysql
        // ...

        return "Objeto inserido com MySQL!";
    }

    public function delete($obj)
    {
        // deleta o obj dentro do banco de dados Mysql
        // ...

        return "Objeto deletado com MySQL!";
    }

    public function modify($obj)
    {
        // modifica o obj dentro do banco de dados Mysql
        // ...

        return "Objeto modificado com MySQL!";
    }

    public function search($obj)
    {
        // procura o obj dentro do banco de dados Mysql
        // ...

        return "Objeto encontrado com MySQL!";
    }

    public function list($obj)
    {
        // procura o obj dentro do banco de dados Mysql
        // ...

        return "Objetos listados com MySQL!";
    }
}