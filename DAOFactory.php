<?php
require_once 'DAOAvisMsql.php';
require_once 'DAORestaurantMsql.php';
class DAOFactory
{
    public static function getAvisDAO()
    {
        return new DAOAvisMsql();
    }

    public static function getRestaurantDAO()
    {
        return new DAORestaurantMsql();
    }


}