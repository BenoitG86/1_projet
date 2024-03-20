<?php

include 'dbconnect.inc.php';

// Récupération des données du formulaire

$username = mysqli_real_escape_string($connexion, $_POST['username']);
$commentaire = mysqli_real_escape_string($connexion, $_POST['commentaire']);
$dateComment = date('Y-d-m H:i:s');

// Insertion des données du formulaire dans la DB

$commentSQL = "INSERT INTO `commentaires` ( `username`, `commentaire`, `dateCommentaire`) VALUES
('$username', '$commentaire', '2024-03-18 13:40:00');";

mysqli_query($connexion, $commentSQL);

header("Location: ../index.php?comment=success");
