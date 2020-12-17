<?php

$dsn = 'mysql:host=localhost;dbname=teste';
$username = 'root';
$password = 'joao';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$pdo = new PDO($dsn, $username, $password, $options);
//$databasePath = __DIR__ . '/banco.sqlite';
//$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conectei';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY auto_increment, name TEXT, birth_date TEXT);');