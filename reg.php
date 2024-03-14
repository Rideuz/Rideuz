<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, 'myveb1');

if (isset($_GET['login']))
{
    $log = $_GET['login'];
    $pas = $_GET['password']; 
}

$sql = "INSERT INTO users (login, password) VALUES ('$log', '$pas')";
if ($conn->query($sql) === TRUE) {
    echo "Регистрация успешно завершена.";
} else {
    echo "Ошибка регистрации: " . $conn->error;
}
?>