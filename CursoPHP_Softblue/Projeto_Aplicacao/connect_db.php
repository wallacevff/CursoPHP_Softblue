<?php
define("SGBD","sqlsrv");
define("SERVERBD","201.49.222.4");
define("BD", "SANKHYA_HOMO");
define("USUARIO","sankhya");
define("SENHA", "bashtecsis#");
define("STRSGBD", SGBD . ":" . "Server=" . SERVERBD . ";Database=" . BD);

class BD extends PDO{
    public static function conectaBD(){
        try{
           $connection = new PDO(STRSGBD,USUARIO,SENHA);
           $connection->exec("set names utf8");
        }
        catch(PDOException $e){
            echo $e;
            exit();
        }
        return $connection;
    }
    public function __construct(){
        ;
    }
}


?>