<?php 
require_once '../../dao/Conexao_projeto.php'; 
$id=$_GET['id']; $c=Conexao::getConexao(); 
$s=$c->prepare('SELECT * FROM projetos WHERE id=?'); 
$s->bind_param('i',$id); $s->execute(); 
$p=$s->get_result()->fetch_assoc(); 
?>
<html>
    <head><link rel="stylesheet" href="../../../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="pj">
        <form action='../../controllers/ProjetoController.php?action=editar' method='post'><input type='hidden' name='id' value='<?=$p['id']?>'>
        <input name='titulo' value='<?=$p['titulo']?>'>
        <textarea name='descricao' id="tarefa"><?=$p['descricao']?></textarea>
        <button>Salvar</button>
    </div>
    </form>
</body></html>