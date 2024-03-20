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
      <!-- Récupérer le choix de l'user pour afficher ou écrire un commentaire -->

      <form action="" method="post">
            <input type="radio" name="" id="">            
            <input type="submit">

      </form>
      
      <!-- Ecrire un commentaire -->

      <?php echo'
      <h1>Je suis un titre très très important ohlalala</h1>
      <form action="includes/comment.inc.php" method="post">
            <div>
                  <label for="username">Votre nom d\'utilisateur </label>
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
      </form>'
      ?>



</body>

</html>