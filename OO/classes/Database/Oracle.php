<?php

namespace Database;

require "../vendor/autoload.php";

use Database\DatabaseInterface;

class Oracle implements DatabaseInterface
{
    public function add($obj)
    {
        // insere o obj dentro do banco de dados Mysql
        // ...

        return "Objeto inserido com Oracle!";
    }

    public function delete($obj)
    {
        // deleta o obj dentro do banco de dados Mysql
        // ...

        return "Objeto deletado com Oracle!";
    }

    public function modify($obj)
    {
        // modifica o obj dentro do banco de dados Mysql
        // ...

        return "Objeto modificado com Oracle!";
    }

    public function search($obj)
    {
        // procura o obj dentro do banco de dados Mysql
        // ...

        return "Objeto encontrado com Oracle!";
    }

    public function list($obj)
    {
        // procura o obj dentro do banco de dados Mysql
        // ...

        return "Objetos listados com Oracle!";
    }
}