<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>cadastre-se</h1>
    <form action="submit.php" method="POST">

    <label for="username">Nome de usuario:</label>
    <input type="text" id= "username" name = "username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id = "email" name = "email" required><br><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="registrar">

    </form>    
</body>
</html>