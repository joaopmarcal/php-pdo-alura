<?php

use Alura\Pdo\Domain\Model\Student;

require_once "vendor/autoload.php";

$dsn = 'mysql:host=localhost;dbname=teste';
$username = 'root';
$password = 'joao';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$pdo = new PDO($dsn, $username, $password, $options);

$student = new Student(
    null,
    "Joao',''); drop table students;-- Paulo",
    new \DateTimeImmutable('1991-03-07')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?,?);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1,$student->name());
$statement->bindValue(2,$student->birthDate()->format('Y-m-d'));
if($statement->execute()){
    echo "Aluno incluído";
}

