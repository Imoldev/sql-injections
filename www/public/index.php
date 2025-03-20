<?php
session_start();
$userId = session_id();

 /** @var PDO $pdo */
$pdo = require __DIR__ . '/../app/pdo.php';

$result = $pdo->query("SELECT * FROM comments WHERE author_id = '$userId'")->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table>
    <?php foreach ($result as $item) { ?>
    <tr>
        <td>
            <?= $item['comment'] ?>
        </td>
        <td>
            <?= $item['created_at'] ?>
        </td>
        <td>
            <a href="/actions/edit_comment.php?id=<?= $item['id']; ?>">Изменить</a>
        </td>
        <td>
            <a href="/actions/remove_comment.php?id=<?= $item['id']; ?>">Удалить</a>
        </td>
    </tr>
    <?php } ?>
</table>

<form action="/actions/add_comment.php" method="post">
    <input type="hidden" name="user_id" value="<?= $userId; ?>">
    <textarea name="comment"  cols="50" rows="10"></textarea>
    <br>
    <input type="submit" value="Отправить">
</form>

</body>
</html>












