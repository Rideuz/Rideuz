<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
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
<h2>Доска Объявлений</h2>
    <div class="announcement-board">
        <form id="announcement-form">
            <input type="text" id="announcement-input" placeholder="Введите объявление">
            <input type="submit" value="Добавить">
        </form>
        <div id="announcements"></div>
    </div>
</main>
</body>
<?php
include('footer.php');
?>
</html>
<style>
    h2{
        text-align: center;
    }
.announcement-board {
    width: 300px;
    margin: 0 auto;
}
.announcement-board input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
}
.announcement-board input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 0;
    border: none;
    cursor: pointer;
}
.announcement-board input[type="submit"]:hover {
    background-color: #45a049;
}
.announcement {
    margin-bottom: 10px;
    padding: 10px;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
}
main{
    min-height: 100vh;
}
</style>