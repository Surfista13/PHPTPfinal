<?php
require_once ('DAL/DAOFactory.php');
require_once ('Exceptions/ExceptionBll.php');
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
        if(!filter_var($id,FILTER_VALIDATE_INT)){
            throw new ExceptionBll('L\'id restaurant est erroné',50);
        };
        return DAOFactory::getAvisDAO()->AfficherUnAvisParIdRestaurant($id);
    }

}