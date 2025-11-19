<?php
$host = 'localhost';
$username = 'root'; 
$password = '';
$dbname = 'users';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>