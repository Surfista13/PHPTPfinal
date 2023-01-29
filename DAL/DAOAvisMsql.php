<?php
require_once ('ConnexionBdd/ConnexionMsql.php');
require_once ('DAL/DAOAvis.php');
class DAOAvisMsql implements DAOAvis
{

    function AfficherTousLesAvis()
    {
        $pdo = ConnexionMsql::getConnexion();
        $query = "select idRestaurant, idAvis, auteur, note, commentaire from avis;";
        try{
            $pstmt = $pdo->prepare($query);
            $pstmt->execute();
        }catch (Exception $e){
            throw new ExceptionRequeteSql($e->getCode()." - "."Erreur sur l'execution de la requête de la fonction : ".__FUNCTION__);
        }
        return $pstmt->fetchAll();
    }

    function AfficherUnAvisParIdRestaurant($id)
    {
        $pdo = ConnexionMsql::getConnexion();
        $query = "select idRestaurant, idAvis, auteur, note, commentaire from avis where idRestaurant =:idRestaurant;";
        try{
            $pstmt = $pdo->prepare($query);
            $pstmt->bindValue(':idRestaurant',$id);
            $pstmt->execute();
        }catch (Exception $e){
            throw new ExceptionRequeteSql($e->getCode()." - "."Erreur sur l'execution de la requête de la fonction : ".__FUNCTION__);
        }
        return $pstmt->fetchAll();
    }
}