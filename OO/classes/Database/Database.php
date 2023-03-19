<?php

namespace Database;

require '../vendor/autoload.php';

use Database\DatabaseInterface;

class Database{
    private $engine;

    public function __construct(DatabaseInterface $engine)
    {
        $this->engine = $engine;
    }

    public function add($obj)
    {
        return $this->engine->add($obj);
    }

    public function delete($obj)
    {
        return $this->engine->delete($obj );
    }

    public function modify($obj)
    {
        return $this->engine->modify($obj);
    }

    public function search($obj){
        return $this->engine->search($obj);
    }

    public function list($obj)
    {
        return $this->engine->list($obj);
    }

}