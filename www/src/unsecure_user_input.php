<?php
declare(strict_types=1);

$dbh = include __DIR__ . '/../app/pdo.php';

$id = $_GET['id'];
if (!$id instanceof Stringable) {
    exit();
}


$stmt = $dbh->query("SELECT * FROM comments WHERE author_id = $id");
$comments = [];
if ($stmt !== false) {
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

echo $comments;


