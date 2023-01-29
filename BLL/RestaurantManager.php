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
        if(!filter_var($id,FILTER_VALIDATE_INT)){
            throw new ExceptionBll('L\'id restaurant est erroné',50);
        };
        return DAOFactory::getRestaurantDAO()->AfficherUnRestaurantParId($id);
    }


}