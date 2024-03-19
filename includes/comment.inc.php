<?php

include 'dbconnect.inc.php';

// Récupération des données du formulaire

$username = $_POST['username'];
$commentaire = $_POST['commentaire'];
$dateComment = date('Y-d-m H:i:s');

// Insertion des données du formulaire dans la DB

$commentSQL = "INSERT INTO `commentaires` (`id_commentaire`, `username`, `commentaire`, `dateCommentaire`) VALUES
(1, 'Jean-Exemple', 'Lorem ipsum dolor', '2024-03-18 13:40:00');";

$writeComment = mysqli_query($connexion, $commentSQL);

header("Location: ../index.php?comment=success");
