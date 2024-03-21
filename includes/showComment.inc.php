<?php

include 'dbconnect.inc.php';

// Passage de la date en français

setlocale(LC_TIME, 'fr_FR', 'French');
// setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
// date_default_timezone_set('Europe/Paris');



// Executer une requête

$showSQL = "SELECT * FROM commentaires";
$readComment = mysqli_query($connexion, $showSQL);
$readCommentCheck = mysqli_num_rows($readComment);


// Afficher une requête

if ($readCommentCheck > 0) {
      while ($row = mysqli_fetch_assoc($readComment)) {
            $time = strtotime($row['dateCommentaire']);
            $date =  str_replace(
                  ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                  ["Lundi", "Mardi", "Mercredi", "Jeudi", "Jeudi", "Samedi", "Dimanche", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"],
                  date('l d F Y à H:i', $time)
            );
            echo '<div>' . $row['username'] . ' a écrit [le ' . $date . '] : <p>' . $row['commentaire'] . '</p></div>';
      }
} else {
      echo "Erreur : " . mysqli_error($connexion);
}


// -------------- à retirer avant mise en prod ------------
// header("Location: ../index.php?read=success");

// Fermer la connexion

mysqli_close($connexion);
