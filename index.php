<?php

// Connexion

include 'includes/dbconnect.inc.php';

// Vérifier la connexion

if (!$connexion) {
      die("Échec de la connexion : " . mysqli_connect_error());
} else {
      echo "Connexion réussie à la base de données.";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=0, initial-scale=1.0">
      <link rel="stylesheet" href="styles/style.css">
      <!-- <link rel="stylesheet" href="styles/reset.css"> -->
      <title>Document</title>
</head>

<body>

      <div class="earth">
            <h1>Je suis un titre très très important ohlalala</h1>
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
            <form action="includes/showComment.inc.php" method="post">
                  <label for="submit">Afficher les commentaires <input id="submit" type="submit"></label>
            </form>
      </div>
</body>

</html>