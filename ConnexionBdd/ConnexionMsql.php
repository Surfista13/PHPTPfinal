<?php
require_once ('Exceptions/ExceptionConnexion.php');
//Classe qui permet de se connecter à la base de donnée restaurant en loclalhost
class ConnexionMsql
{
    private static $pdo;
    static function getConnexion(){
        if(self::$pdo == null){
            try{
                $dsn = "mysql:host=localhost;dbname=restaurant";
                self::$pdo = new PDO($dsn, "root", "2099Bogus");
            }catch (PDOException $exception ){
                throw new ExceptionConnexion("Erreur de connexion à la base de donnée",$exception->getCode());
            }
        }
        return self::$pdo;
    }
}