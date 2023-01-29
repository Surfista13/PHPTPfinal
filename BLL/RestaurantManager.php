<?php
require_once ('DAL/DAOFactory.php');
class RestaurantManager
{
    private static $restaurantManager;

    public function getRestaurantManager(){
        if(self::$restaurantManager == null){
            self::$restaurantManager = new RestaurantManager();
        }
        return self::$restaurantManager;
    }

    public function afficherTousLesRestaurants (){
        return DAOFactory::getRestaurantDAO()->AfficherTousLesRestaurants();
    }

    public function afficherUnRestaurants ($id){
        return DAOFactory::getRestaurantDAO()->AfficherUnRestaurantParId($id);
    }


}