<?php
declare(strict_types=1);

$userId = $_POST['user_id'];
$comment = $_POST['comment'];

$pdo = new PDO('mysql:host=db;dbname=student', 'student', 'student');

$pdo->exec("INSERT INTO comments (comment, author_id) VALUES ('$comment', '$userId');");

header('Location: /');