<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        body {
            background: linear-gradient(to right,#191970,#000000);
            color: #dbd7d7ff;
        }
        .register-selection {
            background: black;
            padding: 30px;
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
        .gender-group {
            display: flex;
            gap: 10px;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        .gender-btn {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 10px 15px;
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            transition: all 0.3s ease;
            flex: 1;
            min-width: 120px;
            justify-content: center;
        }
        .gender-btn:hover {
            border-color: #4169e1;
            background: #252525;
        }
        .gender-btn input {
            display: none;
        }
        .gender-btn span {
            color: #dbd7d7;
            font-size: 14px;
        }
        .gender-btn input:checked + span {
            color: #4169e1;
            font-weight: bold;
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
        } .register-selection {
            background: black;
            padding: 30px;
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
        .gender-group {
            display: flex;
            gap: 10px;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        .gender-btn {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 10px 15px;
            background: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            transition: all 0.3s ease;
            flex: 1;
            min-width: 120px;
            justify-content: center;
        }
        .gender-btn:hover {
            border-color: #4169e1;
            background: #252525;
        }
        .gender-btn input {
            display: none;
        }
        .gender-btn span {
            color: #dbd7d7;
            font-size: 14px;
        }
        .gender-btn input:checked + span {
            color: #4169e1;
            font-weight: bold;
        }
        a {
            text-decoration: none;
            color: #252525;
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
    <div class="register-selection">
        <h1 class="register-form">Регистрация</h1>
        <form action="register.php" method="POST"> 
            <input type="text" id="username" name="username" placeholder="Имя" required>
            <input type="password" id="password" name="password" placeholder="Пароль" required>
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Подтвердите пароль" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="date" id="date" name="date" placeholder="Дата рождения" required>
            <div class="gender-group">
                <label class="gender-btn">
                    <input type="radio" name="gender" value="male">
                    <span>Мужской</span>
                </label>
                <label class="gender-btn">
                    <input type="radio" name="gender" value="female">
                    <span>Женский</span>
                </label>
                <label class="gender-btn">
                    <input type="radio" name="gender" value="prefer_not_say">
                    <span>Не указывать</span>
                </label>
            </div>
            <button type="submit">Зарегистрироваться</button>
            <a href="logif.php">Войти</a>
        </form>
    </div>
</body>
</html>