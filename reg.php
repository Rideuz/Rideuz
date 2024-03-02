<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, 'web_app');

if (isset($_GET['login']))
{
    $log = $_GET['login'];
    $pas = $_GET['password']; 
}

$sql = "INSERT INTO users (login, password) VALUES ('$log', '$pas')";
$conn -> query($sql);
?>