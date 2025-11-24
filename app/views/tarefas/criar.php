<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="../../../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
</head>
    <body>
    <div class="criar">
        <h2>Nova Tarefa</h2>
        <form action="../../controllers/TarefaController.php?action=criar" method="post">
        <input type="text" name="titulo" required>
        <button type="submit">Salvar</button></form>
    </div>
    </body>
</html>