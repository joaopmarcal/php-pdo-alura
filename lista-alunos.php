<?php

require_once "vendor/autoload.php";

$dsn = 'mysql:host=localhost;dbname=teste';
$username = 'root';
$password = 'joao';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$pdo = new PDO($dsn, $username, $password, $options);

$statement = $pdo->query('SELECT * FROM students where id = 2;');

while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)){
    $student = new \Alura\Pdo\Domain\Model\Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );

    echo $student->age() . PHP_EOL;
}


die();

$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];
var_dump($studentDataList);
exit();

foreach ($studentDataList as $studentData){
    $studentList[] = new \Alura\Pdo\Domain\Model\Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);