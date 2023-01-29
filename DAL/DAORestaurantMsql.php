<?php
require_once ('DAL/DAORestaurant.php');
require_once ('Exceptions/ExceptionRequeteSql.php');
class DAORestaurantMsql implements DAORestaurant
{
    function AfficherTousLesRestaurants()
    {
        $pdo = ConnexionMsql::getConnexion();
        $query="select idRestaurant, nom, adresse, cp, ville, telephone, description from restaurants;";
        try{
            $psmt = $pdo->prepare($query);
            $psmt->execute();
            $resultats = $psmt->fetchAll();
        }catch (Exception $e){
            throw new ExceptionRequeteSql($e->getCode()." - "."Erreur sur l'execution de la requête de la fonction : ".__FUNCTION__);
        }
        return $resultats;
    }

    function AfficherUnRestaurantParId($id)
    {
        $pdo = ConnexionMsql::getConnexion();
        $query="select idRestaurant, nom, adresse, cp, ville, telephone, description from restaurants where idRestaurant=:idRestaurant;";
        $psmt = $pdo->prepare($query);
        $psmt->bindValue(':idRestaurant',$id);
        $psmt->execute();
        $resultats = $psmt->fetchAll();
        return $resultats;
    }
}