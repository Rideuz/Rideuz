<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel ="stylesheet" href="styles.css">
</head>
<?php
include('header.php');
?>
<body>
<?php
include('nav.php');
?>
<main>
<div class="container">
    <div class="form-container">
        <h2>Форма Регистрации</h2>
        <form action="reg.php" method="get">
            <label for="login">Имя пользователя:</label>
            <input type="text" id="login" name="login" required placeholder="Как Вас зовут?">
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required placeholder="Ваш надёжный пароль">
            <input type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>
</main>
</body>
<?php
include('footer.php');
?>
</html>
