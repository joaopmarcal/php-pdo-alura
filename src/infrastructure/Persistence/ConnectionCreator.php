<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{

    public static function createConnection(): PDO
    {
        $dsn = 'mysql:host=localhost;dbname=teste';
        $username = 'root';
        $password = 'joao';
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        return $pdo = new PDO($dsn, $username, $password, $options);

    }

}