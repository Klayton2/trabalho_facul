<?php
class Conexao {
    private static $instancia;
    public static function getConexao() {
        if (!isset(self::$instancia)) {
            self::$instancia = new mysqli("localhost", "root", "", "mvc");
            self::$instancia->set_charset("utf8");
        }
        return self::$instancia;
    }
}
?>