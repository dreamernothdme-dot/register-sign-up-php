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
$password_confirm = $_POST["password_confirm"];
$email = $_POST["email"];
$gender = $_POST["gender"];

if (empty($username)) {
    die("Нельзя оставить пустое имя");
}
if (empty($email)) {
    die("Нельзя оставлять пустой Email");
}
if (empty($password)) {
    die("Нельзя оставлять пустой пароль");
}
if ($password !== $password_confirm) {
    die("Пароли не совпадают!");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Некорректный формат email");
}
if (strlen($password) < 6) {
    die("Пароль должен быть не менее 6 символов");
}

$check_stmt = $conn->prepare("SELECT id FROM users WHERE login = ? OR email = ?");
$check_stmt->bind_param("ss", $username, $email);
$check_stmt->execute();
$check_result = $check_stmt->get_result();

if ($check_result->num_rows > 0) {
    die("Пользователь с таким именем или email уже существует");
}
$check_stmt->close();

if (!empty($gender) && !in_array($gender, ['male', 'female', 'prefer_not_say'])) {
    die("Некорректное значение пола");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (login, password, email, gender) VALUES ('user', ?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $hashed_password, $email, $gender);

if ($stmt->execute()) {
    echo "Регистрация успешна!";
} else {
    echo "Ошибка регистрации: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>