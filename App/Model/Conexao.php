<?php

class Conexao
{
    public static $instance;

    public static function getConn()
    {
        if (!isset(self::$instance)) :
            self::$instance = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
        else :
            return self::$instance;
        endif;
    }
}
