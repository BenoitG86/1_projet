<?php


// Executer une requête

// $sql = "SELECT * FROM commentaires";
// $readComment = mysqli_query($connexion, $sql);
// $readCommentCheck = mysqli_num_rows($readComment);

// // Afficher une requête

// if ($readCommentCheck > 0) {
//       while ($row = mysqli_fetch_assoc($readComment)) {
//             $time = strtotime($row['dateCommentaire']);
//             $date = date('l d F Y à H:i', $time);
//             echo '<div>' . $row['username'] . ' a écrit (le ' . $date . ') : <p>' . $row['commentaire'] . '</p></div>';
//       }
// } else {
//       echo "Erreur : " . mysqli_error($connexion);
// }


// // Fermeture de la connexion

// mysqli_close($connexion);
