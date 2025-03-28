<?php
declare(strict_types=1);
/**@var PDO $dbh  */
$dbh = include __DIR__ . '/../app/pdo.php';

$id = $_GET['id'];
if (!$id instanceof Stringable) {
    exit();
}

// запрос в базу на создание подготовленного выражения
$stmt = $dbh->prepare("SELECT * FROM comments WHERE author_id = ?");
$comments = [];
if ($stmt !== false) {
    // запрос в базу на выполненени ранее подготовленного выражения с переданным параметром
    $stmt->execute($id);
    $comments = $stmt->fetchAll();
}

echo $comments;

