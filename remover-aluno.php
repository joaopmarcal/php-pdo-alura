<?php

require_once "vendor/autoload.php";

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$prepareStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$prepareStatement->bindValue(1,2, PDO::PARAM_INT);
var_dump($prepareStatement->execute());
