<?php
require_once ('DAL/DAOFactory.php');
class AvisManager
{
    private static $avisManager;

    public static function getAvisManager(){
        if(self::$avisManager == null){
            self::$avisManager = new AvisManager();
        }
        return self::$avisManager;
    }

    public function afficherTousAvisPourUnRestaurant($id){
        //TODO ajouter contrôle idrestaurant
        return DAOFactory::getAvisDAO()->AfficherUnAvisParIdRestaurant($id);
    }

}