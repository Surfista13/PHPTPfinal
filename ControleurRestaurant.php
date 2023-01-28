<?php
require_once ('RestaurantManager.php');
require_once ('AvisManager.php');
//Récupération cookie
if(isset($_SESSION['id'])){
    $idRestaurant = $_SESSION['id'];
}

//Recupération d'un restaurant en fonction de son id
$rm = new RestaurantManager();
$result = $rm->afficherUnRestaurants($idRestaurant);
//Récupération de liste des avis
$am = new AvisManager();
$resultAvis = $am->afficherTousAvisPourUnRestaurant($idRestaurant);

//Affichage des restaurants en html
foreach ($result as $element) {
    echo "
        <div class='nom'>$element[1]</div>
        <br/>
        <div>$element[2]</div> 
        <div>$element[3] $element[4]</div> 
        <div>$element[5]</div>  
        
        <h2>Description</h2> 
        <div>$element[6]</div>
        ";

    echo'<h2>Avis</h2>';
    echo "<ul>";
    foreach ($resultAvis as $element) {
        echo "<li class='listeAvis'>
                <div>$element[2] : $element[3]</div>
                <div>$element[4]</div>
                </br>
              </li>";
    }
    echo "</ul>";
}
