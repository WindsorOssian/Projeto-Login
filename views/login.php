<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= APP_NAME ?></title>
    <style>
        body { background: #121212; color: white; text-align: center; padding-top: 100px; font-family: Arial; }
        input { margin: 8px; padding: 10px; width: 250px; border-radius: 5px; border: none; }
        button { padding: 10px 20px; border: none; border-radius: 5px; background: #ff4081; color: white; cursor: pointer; }
        button:hover { background: #e73370; }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <input type="email" name="email" placeholder="E-mail" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
