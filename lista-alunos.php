<?php

require_once "vendor/autoload.php";

$dsn = 'mysql:host=localhost;dbname=teste';
$username = 'root';
$password = 'joao';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$pdo = new PDO($dsn, $username, $password, $options);

$statement = $pdo->query('SELECT * FROM students;');

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);