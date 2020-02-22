<?php

class Conexion
{
    public function conectar()
    {
        $link = new PDO("mysql:post=localhost;dbname=pos", "root", "");
        $link->exec("set names utf8");
        return $link;
    }
}
