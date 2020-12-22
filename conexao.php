<?php

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

//$databasePath = __DIR__ . '/banco.sqlite';
//$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conectei';

$pdo->exec('
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY auto_increment,
        name TEXT,
         birth_date TEXT
    );
    
    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY ,
        area_code TEXT,
        number TEXT,
        student_id INTEGER,
        FOREIGN KEY (student_id) REFERENCES students(id)
    );
    
    ');

