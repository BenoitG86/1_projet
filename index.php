<?php
include 'data.php';

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
      <form action="data.php" method="post">
            <div>
                  <label for="username">Votre nom d'utilisateur </label><input type="text" name="username" id="username" placeholder="ici... !">
            </div>
            <div>
                  <label for="commentaire">Ecrivez à la lune</label>
            </div>
            <div>
                  <textarea name="commentaire" id="commentaire" cols="50" rows="10" placeholder="Entrez ici votre commentaire... !"></textarea>
            </div>
            <div>
                  <input type="submit">
                  <input type="reset">
            </div>
      </form>
</body>

</html>