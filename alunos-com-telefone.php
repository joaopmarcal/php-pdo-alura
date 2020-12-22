<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new \Alura\Pdo\Infrastructure\Repository\PdoStudentRepository($connection);

$studentList = $repository->studentsWithPhones();

echo $studentList[3]->phones()[0]->formattedPhone();
var_dump($studentList);