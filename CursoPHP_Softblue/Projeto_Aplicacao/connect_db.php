<?php
define("SGBD","sqlsrv");
define("SERVERBD","192.168.0.2");
define("BD", "SANKHYA_TREINA");
define("USUARIO","sankhya");
define("SENHA", "#trsup@");
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