<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once "vendor/autoload.php";

$pdo = ConnectionCreator::createConnection();
var_dump(ConnectionCreator::createConnection());
//$databasePath = __DIR__ . '/banco.sqlite';
//$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conectei';

$pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('24','999999999',3),('21','22222222',3);");
exit();

$pdo->exec('
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY auto_increment,
        name VARCHAR(128),
         birth_date DATE
    );
    
    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY auto_increment ,
        area_code CHAR(2),
        number CHAR(9),
        student_id INTEGER,
        FOREIGN KEY (student_id) REFERENCES students(id)
    );
    
    ');

