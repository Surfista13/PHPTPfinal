<?php
require_once ('DAORestaurant.php');
class DAORestaurantMsql implements DAORestaurant
{
    function AfficherTousLesRestaurants()
    {
        $pdo = ConnexionMsql::getConnexion();
        $query="select idRestaurant, nom, adresse, cp, ville, telephone, description from restaurants;";
        $psmt = $pdo->prepare($query);
        $psmt->execute();
        $resultats = $psmt->fetchAll();
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