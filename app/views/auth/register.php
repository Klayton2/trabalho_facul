<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="../../../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="login">
            <h2>Cadastrar usuário</h2>
            <form action="../../controllers/AuthController.php?action=registrar" method="post">
            <input type="text" name="nome" placeholder="Nome" required><br>
            <input type="email" name="email" placeholder="E-mail" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Cadastrar</button></form>
            <p><a href="login.php">Já possui conta? Fazer login</a></p>
        </div>
    </body>
</html>