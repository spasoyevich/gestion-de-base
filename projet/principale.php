<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
       <title>Die and Retry</title>
        <!-- importer le fichier de style -->
  
</head>
<body>
    <form action = "verif-form.php" method = "post">
       <input type = "text" name = "name" size="100">
       <input type = "submit" name = "submit" value = "search">
    </form>
<?php
include 'verification.php';
//lancement de la requete
$pdo = new PDO('mysql:host=localhost;dbname=videogames', 'root', '');


// Requête pour tester la connexion
$query = $pdo->query("SELECT * FROM videogames");

while ($donnees = $query->fetch()) {
    echo $donnees['id'].' ';
    echo $donnees['Title'].'<br />';
}

$query->closeCursor(); //Termine le traitement de la requete!
?>
<form action="deconnexion.php" method="post">
    <p><input type="submit" value="Déconnexion" /></p>
</form>
</body>
</html>