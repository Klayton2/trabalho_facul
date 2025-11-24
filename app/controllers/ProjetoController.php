<?php 
    session_start(); 
    require_once '../dao/ProjetoDAO.php'; 
    $dao=new ProjetoDAO(); $a=$_GET['action']??''; if($a=='criar'){ $dao->criar($_POST['titulo'],$_POST['descricao'],$_SESSION['user_id']); header('Location: ../../app/views/projetos/listar.php'); 
    }if($a=='excluir'){ $dao->excluir($_GET['id']); header('Location: ../../app/views/projetos/listar.php');}if($a=='editar'){ $dao->atualizar($_POST['id'],$_POST['titulo'],$_POST['descricao']); 
            header('Location: ../../app/views/projetos/listar.php'); 
        } 
?>