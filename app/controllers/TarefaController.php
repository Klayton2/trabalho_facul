<?php
session_start();
require_once "../dao/TarefaDAO.php";
$action = $_GET["action"];
$dao = new TarefaDAO();
if ($action == "criar") {
    $dao->criar($_POST["titulo"], $_SESSION["user_id"]);
    header("Location: ../../public/index.php");
}
if ($action == "excluir") {
    $dao->excluir($_GET["id"]);
    header("Location: ../../public/index.php");
}
if ($action == "editar") {
    $dao->atualizar($_POST["id"], $_POST["titulo"]);
    header("Location: ../../public/index.php");
}
?>