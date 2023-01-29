<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <p>Voici le header de ma page unique</p>
        <a href="Index.php">Accueil</a>
    </header>
    <main>
       <?php
            if(isset($_GET["id"])) {
                session_start();
                $_SESSION['id'] = $_GET["id"];
                include('Vues/VueRestaurant.php');
            }else {
                include('Vues/VueAcceuil.php');
            }
       ?>
    </main>
    <footer>
        <p>Voici le footer de la page unique</p>
    </footer>
</body>
</html>

