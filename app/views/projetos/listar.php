<?php  
    session_start(); 
    require_once '../../dao/ProjetoDAO.php'; 
    if(!isset($_SESSION['user_id'])) header('Location: ../auth/login.php'); 
    $d=new ProjetoDAO(); 
    $pr=$d->listarPorUsuario($_SESSION['user_id']); 
?>
<html>
    <head><link rel="stylesheet" href="../../../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="criar">
        <h1>Projetos</h1>
        <button id="add"><a href='criar.php'>Novo</a></button>
    <?php 
    while($p=$pr->fetch_assoc()){ ?><p><b><?=$p['titulo']?></b><br><?=$p['descricao']?>
    <br>
    <button id="add"><a href='editar.php?id=<?=$p['id']?>'>Editar</a></button> 
    <button id="add"><a href='../../controllers/ProjetoController.php?action=excluir&id=<?=$p['id']?>'>Excluir</a></p></button>
    <?php } ?>
    </div>
</body></html>