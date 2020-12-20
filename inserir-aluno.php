<?php

use Alura\Pdo\Domain\Model\Student;

require_once "vendor/autoload.php";

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Joao Paulo",
    new \DateTimeImmutable('1991-03-07')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name,:birth_date);";
$statement = $pdo->prepare($sqlInsert);
$name = $student->name();
$statement->bindParam(':name',$name);
$statement->bindValue(':birth_date',$student->birthDate()->format('Y-m-d'));
$name = "Novo Nome";
if($statement->execute()){
    echo "Aluno incluído";
}

