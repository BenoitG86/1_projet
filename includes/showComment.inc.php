<?php

include 'dbconnect.inc.php';

// Passage de la date en français

setlocale(LC_TIME, 'fr_FR', 'French');

// Executer une requête

$showSQL = "SELECT * FROM commentaires";
$readComment = mysqli_query($connexion, $showSQL);
$readCommentCheck = mysqli_num_rows($readComment);

// Fermer la connexion

mysqli_close($connexion);
