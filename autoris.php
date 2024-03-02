<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include('header.php');
?>
<body>
<?php
include('nav.php');
?>
<h2> Форма Авторизации</h2>
    <form action="reg.php" method="$_GET">
    <label for="username"> Имя пользователя:</label>
    <input type="text" id="login" name="login" include>
    <label for="password"> Пароль:</label>
    <input type="password" id="password" name="password" include>
</form>
</body>
<?php
include('footer.php');
?>
</html>