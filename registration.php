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
    <h2> Форма Регистрации</h2>
    <form action="reg.php" method="get">
    <label for="login"> Имя пользователя:</label>
    <input type="text" id="login" name="login" require>

    <label for="password"> Пароль:</label>
    <input type="password" id="password" name="password" require>

    <input type="submit" value="Отправить">
</form>
</body>
<?php
include('footer.php');
?>
</html>
