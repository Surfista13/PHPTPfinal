<?php
require_once('RestaurantManager.php');
//Recupération de la liste des restaurants
$rm = new RestaurantManager();
$result = $rm->afficherTousLesRestaurants();

//Affichage des restaurants en html
echo "<ul>";
foreach ($result as $element) {
    echo "
        <li class='listeRestaurant'>
            <a href='Index.php?id=$element[0]' class='nom'>$element[1]</a>
            <div class='ville'>$element[4]</div>
            <div class='description'>$element[6]</div>
        </li>
        </br>
    ";
}
echo "</ul>";
