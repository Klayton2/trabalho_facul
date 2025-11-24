<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: ../app/views/auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
<div class="tarefas">
    <h1>Bem-vindo ao Dashboard!</h1>
    
    <h2>Suas tarefas</h2>
    <button><a href="../app/views/tarefas/criar.php">+ Nova Tarefa</a></button>
    <br><br>
    <button><a href="../app/views/projetos/listar.php">Ir para Projetos (CRUD extra)</a></button>
    <br><br>
    <a href="logout.php">Sair</a>
</div>

<?php
require_once "../app/dao/TarefaDAO.php";

$dao = new TarefaDAO();
$tarefas = $dao->listarPorUsuario($_SESSION["user_id"]);

while ($tarefa = $tarefas->fetch_assoc()) {
    echo "<p>{$tarefa["titulo"]} 
        <a href='../app/views/tarefas/editar.php?id={$tarefa["id"]}'>Editar</a>
        <a href='../app/controllers/TarefaController.php?action=excluir&id={$tarefa["id"]}'>Excluir</a>
    </p>";
}
?>
</body>
</html>