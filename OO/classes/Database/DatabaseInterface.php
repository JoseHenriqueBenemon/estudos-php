<?php

namespace Database;

interface DatabaseInterface
{
    public function add($obj);
    public function delete($obj);
    public function modify($obj);
    public function search($obj);
    public function list($obj);
}