
<?php /** @var array $list */ ?>

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
<ul>

    <?php foreach ($list as $item): ?>
        <li>
            <?php echo $item; ?>
        </li>
    <?php endforeach; ?>
</ul>

<form action="/" method="post">
    <input type="text" name="user_name">
    <br>
    <input type="submit">
</form>

</body>
</html>
