<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../../style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
    </head>
        <body>
            <div class="login">
                <h2>Login</h2>
                <form action="../../controllers/AuthController.php?action=login" method="post">
                <input type="email" name="email" placeholder="E-mail" required><br>
                <input type="password" name="senha" placeholder="Senha" required><br>
                <button type="submit">Entrar</button>
                <p><a href="register.php">Não possui conta ? Fazer cadastro.</a></p>
            </div>
        </form>
        </body>
</html>