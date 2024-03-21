<?php

// Connexion

include 'includes/dbconnect.inc.php';
include 'includes/showComment.inc.php';

// Vérifier la connexion

if (!$connexion) {
      die("Échec de la connexion : " . mysqli_connect_error());
} else {
      echo '<script>console.log("Connexion réussie à la base de données. GG ma gueule");</script>';
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=0, initial-scale=1.0">
      <link rel="stylesheet" href="styles/style.css">
      <link rel="shortcut icon" href="icons/logo-wechat.svg" type="image/x-icon">
      <!-- <link rel="stylesheet" href="styles/reset.css"> -->
      <title>Lunar chatboard</title>

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=Dr+Sugiyama&display=swap" rel="stylesheet">
</head>

<body>
      <main>
            <h1>Lunar chatboard</h1>
            <div class="earth">
                  <form action="includes/writeComment.inc.php" method="post">
                        <div>
                              <label for="username">Votre nom d'utilisateur </label>
                              <input type="text" name="username" id="username" placeholder="ici... !">
                        </div>
                        <div>
                              <label for="commentaire">Ecrivez à la lune</label>
                              <textarea name="commentaire" id="commentaire" cols="50" rows="10" placeholder="Entrez ici votre commentaire... !"></textarea>
                        </div>
                        <div>
                              <input type="submit">
                              <input type="reset">
                        </div>
                  </form>
            </div>
            <div class="moon">

                  <?php if ($readCommentCheck > 0) {
                        while ($row = mysqli_fetch_assoc($readComment)) {
                              $time = strtotime($row['dateCommentaire']);

                              // Passage de la date en français - bis

                              $date =  str_replace(
                                    ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                                    ["Lundi", "Mardi", "Mercredi", "Jeudi", "Jeudi", "Samedi", "Dimanche", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"],
                                    date('l d F Y à H:i', $time)
                              );
                              echo '<div class="comment"><div class="info">' . $row['username'] . ' a écrit [le ' . $date . '] : </div><p>' . $row['commentaire'] . '</p></div>';
                        }
                  } else {
                        echo "Erreur : " . mysqli_error($connexion);
                  }
                  ?>

            </div>
      </main>
      <footer>
            <p>Je suis une petite note de bas de page.</p>
            <a href="https://github.com/BenoitG86/1_projet"><img src="icons/logo-github.svg" alt="" class="iconFooter"> Retrouvez-ici le GitHub de ce projet</a>
      </footer>
</body>

</html>