<?php
require_once ('DAOFactory.php');
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
        return DAOFactory::getAvisDAO()->AfficherUnAvisParIdRestaurant($id);
    }

}