<?php
require_once "Conexao.php";
class TarefaDAO {
    public function listarPorUsuario($idUsuario) {
        $con = Conexao::getConexao();
        $sql = $con->prepare("SELECT * FROM tarefas WHERE usuario_id = ?");
        $sql->bind_param("i", $idUsuario);
        $sql->execute();
        return $sql->get_result();
    }
    public function criar($titulo, $usuario_id) {
        $con = Conexao::getConexao();
        $sql = $con->prepare("INSERT INTO tarefas (titulo, usuario_id) VALUES (?,?)");
        $sql->bind_param("si", $titulo, $usuario_id);
        return $sql->execute();
    }
    public function atualizar($id, $titulo) {
        $con = Conexao::getConexao();
        $sql = $con->prepare("UPDATE tarefas SET titulo=? WHERE id=?");
        $sql->bind_param("si", $titulo, $id);
        return $sql->execute();
    }
    public function excluir($id) {
        $con = Conexao::getConexao();
        $sql = $con->prepare("DELETE FROM tarefas WHERE id=?");
        $sql->bind_param("i", $id);
        return $sql->execute();
    }
}
?>