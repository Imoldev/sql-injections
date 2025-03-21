<?php
declare(strict_types=1);

$mysqli = new mysqli('db', 'student', 'student', 'student');


$sql = 'SELECT * FROM users WHERE id = ' . $mysqli->real_escape_string((string) $_GET['id']);
$mysqli->query($sql);
