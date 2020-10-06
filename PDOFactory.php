<?php
    class PDOFactory{
        //static: criar somente uma conexão!
        private static $pdo;

        public static function getConexao()
        {
            if(!isset($pdo)){
                $conexao = "mysql:host=127.0.0.1;dbname=crud_produtos";
                $usuario = "root";
                $senha = "";

                $pdo = new PDO($conexao, $usuario, $senha); 
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		        $pdo->setAttribute(PDO::ATTR_STRINGIFY_FETCHES,false);
		        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            return $pdo;
        }

    }
?>