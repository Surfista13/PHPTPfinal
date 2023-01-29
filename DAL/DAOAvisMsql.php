<?php
require_once ('ConnexionBdd/ConnexionMsql.php');
require_once ('DAL/DAOAvis.php');
class DAOAvisMsql implements DAOAvis
{

    function AfficherTousLesAvis()
    {
        $pdo = ConnexionMsql::getConnexion();
        $query = "select idRestaurant, idAvis, auteur, note, commentaire from avis;";
        $pstmt = $pdo->prepare($query);
        $pstmt->execute();
        return $pstmt->fetchAll();
    }

    function AfficherUnAvisParIdRestaurant($id)
    {
        $pdo = ConnexionMsql::getConnexion();
        $query = "select idRestaurant, idAvis, auteur, note, commentaire from avis where idRestaurant =:idRestaurant;";
        $pstmt = $pdo->prepare($query);
        $pstmt->bindValue(':idRestaurant',$id);
        $pstmt->execute();
        return $pstmt->fetchAll();
    }
}