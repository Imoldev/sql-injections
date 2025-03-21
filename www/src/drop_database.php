<?php
declare(strict_types=1);

$dbh = include __DIR__ . '/../app/pdo.php';

$stmt = $dbh->query("SELECT * FROM comments WHERE author_id = '1; DROP DATABASE; --'");
$comments = [];
if ($stmt !== false) {
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

 echo json_encode($comments);
