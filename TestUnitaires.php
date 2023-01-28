<?php
require_once ('ConnexionMsql.php');
require_once ('DAOFactory.php');
require_once ('DAOAvis.php');
require_once ('DAORestaurant.php');


//Test connexion
$pdo = ConnexionMsql::getConnexion();

//Test affichage de tous les avis
$result = DAOFactory::getAvisDAO()->AfficherTousLesAvis();
echo "<ul>";
foreach ($result as $element) {
    echo "<li>$element[2]</li>";
}
echo "</ul>";

//Test affichage d'un seul avis
$result = DAOFactory::getAvisDAO()->AfficherUnAvisParIdRestaurant("1");
echo "<ul>";
foreach ($result as $element) {
    echo "<li>$element[4]</li>";
}
echo "</ul>";

//Test unitaire affichage tous les restaurants
$result = DAOFactory::getRestaurantDAO()->AfficherTousLesRestaurants();
echo "<ul>";
foreach ($result as $element) {
    echo "<li>$element[1]</li>";
}
echo "</ul>";

//Test unitaire affichage un restaurant par id
$result = DAOFactory::getRestaurantDAO()->AfficherUnRestaurantParId("1");
echo "<ul>";
foreach ($result as $element) {
    echo "<li>$element[1]</li>";
}
echo "</ul>";