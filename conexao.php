<?php

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

//$databasePath = __DIR__ . '/banco.sqlite';
//$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conectei';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY auto_increment, name TEXT, birth_date TEXT);');