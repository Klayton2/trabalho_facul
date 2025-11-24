<?php
session_start();
require_once "../dao/Conexao.php";
$action = $_GET["action"] ?? "";
if ($action == "registrar") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);
    $con = Conexao::getConexao();
    $sql = $con->prepare("INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)");
    $sql->bind_param("sss", $nome, $email, $senha);
    if ($sql->execute()) {
        header("Location: ../views/auth/login.php"); exit;
    }
}
if ($action == "login") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $con = Conexao::getConexao();
    $sql = $con->prepare("SELECT * FROM usuarios WHERE email=?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $usuario = $sql->get_result()->fetch_assoc();
    if ($usuario && password_verify($senha, $usuario["senha"])) {
        $_SESSION["user_id"] = $usuario["id"];
        header("Location: ../../public/index.php");
    } else {
        echo "Login inválido";
    }
}
?>