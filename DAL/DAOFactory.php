<?php
require_once 'DAL/DAOAvisMsql.php';
require_once 'DAL/DAORestaurantMsql.php';
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