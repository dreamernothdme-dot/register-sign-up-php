<?php 
session_start();
require_once("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT username, email, birth_date, gender FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        body {
            background: linear-gradient(to right, #191970, #000000);
            color: #dbd7d7;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .profile-selection {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            width: 90%;
            max-width: 500px;
            border: 1px solid #333;
        }
        .login-str {
            margin: 20px 0;
            padding: 15px;
            background: #1a1a1a;
            border-radius: 8px;
            border-left: 4px solid #4169e1;
        }
        .login-str strong {
            color: #4169e1;
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .login-str span {
            color: #dbd7d7;
            font-size: 16px;
        }
        h1 {
            text-align: center;
            color: #dbd7d7;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="profile-selection">
        <h1>Личный кабинет</h1>
        <div class="login-str">
            <strong>Имя:</strong>
            <span><?php echo htmlspecialchars($user['username']); ?></span>
        </div>
        <div class="login-str">
            <strong>Email:</strong>
            <span><?php echo htmlspecialchars($user['email']); ?></span>
        </div>
        <div class="login-str">
            <strong>Дата рождения:</strong>
            <span><?php echo htmlspecialchars($user['birth_date']); ?></span>
        </div>
        <div class="login-str">
            <strong>Пол:</strong>
            <span><?php echo htmlspecialchars($user['gender']); ?></span>
        </div>
    </div>
</body>
</html>