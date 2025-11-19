<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <style>
        body {
            background: linear-gradient(to right,#191970,#000000);
            color: #dbd7d7ff;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .login-selection {
            background: black;
            padding: 40px;
            margin: 50px auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 90%;
            max-width: 400px;
        }
        input {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            color: #dbd7d7;
            box-sizing: border-box;
        }
        input:focus {
            outline: none;
            border-color: #4169e1;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #4169e1;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #3151b0;
        }
        .register-form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-selection">
        <form action="login.php" method="POST">
            <h2>Авторизация</h2>
            <input type="text" name="username" placeholder="Имя пользователя" required>
            <input type="password" name="password" placeholder="Пароль" required>
            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>