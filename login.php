<?php
require_once("db.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Неверный метод запроса");
}
if (!$conn) {
    die("Ошибка подключения к базе данных");
}

$username = $_POST["username"];
$password = $_POST["password"];

if (empty($username)) {
    die("Введите логин");
}
if (empty($password)) {
    die("Введите пароль");
}

$stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Пользователь не найден");
}

$user = $result->fetch_assoc();

if (!password_verify($password, $user['password'])) {
    die("Неверный пароль");
}

session_start();
$_SESSION['user_id'] = $user['id'];
echo "Успешный вход!";

$stmt->close();
$conn->close();
?>