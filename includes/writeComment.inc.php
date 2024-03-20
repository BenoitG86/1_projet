<?php

include 'dbconnect.inc.php';

// Récupération des données du formulaire

$username = mysqli_real_escape_string($connexion, $_POST['username']);
$commentaire = mysqli_real_escape_string($connexion, $_POST['commentaire']);
// $dateComment = date('Y-m-d H:i:s');

// Insertion des données du formulaire dans la DB

$commentSQL = "INSERT INTO `commentaires` (`username`, `commentaire`) VALUES ('$username', '$commentaire');";

// '$dateComment' pas ouf préférer à la place la fonction SQL NOW() !!!
//  NOW() pas ouf préférer le CURRENT_TIMESTAMP dans les attributs de l'objet

mysqli_query($connexion, $commentSQL);

header("Location: ../index.php?comment=success");

// Fermer la connexion

mysqli_close($connexion);