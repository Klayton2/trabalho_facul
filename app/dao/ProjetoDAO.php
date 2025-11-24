<?php 
require_once 'Conexao.php'; 
    class ProjetoDAO{function listarPorUsuario($u){$c=Conexao::getConexao();$s=$c->prepare('SELECT * FROM projetos WHERE usuario_id=?');
    $s->bind_param('i',$u);$s->execute();return $s->get_result();}function criar($t,$d,$u){$c=Conexao::getConexao();$s=$c->prepare('INSERT INTO projetos (titulo,descricao,usuario_id) VALUES (?,?,?)');$s->bind_param('ssi',$t,$d,$u);
    return $s->execute();}function atualizar($id,$t,$d){$c=Conexao::getConexao();$s=$c->prepare('UPDATE projetos SET titulo=?,descricao=? WHERE id=?');$s->bind_param('ssi',$t,$d,$id);
    return $s->execute();}function excluir($id){$c=Conexao::getConexao();$s=$c->prepare('DELETE FROM projetos WHERE id=?');$s->bind_param('i',$id);
    return $s->execute();}}
?>