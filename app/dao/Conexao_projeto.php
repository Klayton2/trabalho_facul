<?php 
    class Conexao{private static $i; static function getConexao(){if(!isset(self::$i)){self::$i=new mysqli('localhost','root','','mvc'); 
    self::$i->set_charset('utf8');} 
    return self::$i;}}
?>