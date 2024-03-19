<?php

// Paramètres de connexion

$serverName = 'localhost';
$username = 'root';
$password = '';
$dataBase = 'bdd-commentaires';

// Établir la connexion

$connexion = mysqli_connect(
      $serverName,
      $username,
      $password,
      $dataBase
);

// Vérifier la connexion

if (!$connexion) {
      die("Échec de la connexion : " . mysqli_connect_error());
} else {
      echo "Connexion réussie à la base de données.";
}

// Executer une requête

$sql = "SELECT * FROM commentaires";
$resultat = mysqli_query($connexion, $sql);
$resultatCheck = mysqli_num_rows($resultat);

// Afficher une requête

if ($resultatCheck > 0) {
      while ($row = mysqli_fetch_assoc($resultat))
      {
            $time = strtotime($row['dateCommentaire']);
            $date = date('l d F Y à H:i', $time);
            echo '<div>' . $row['username'] . ' a écrit (le ' . $date . ') : <p>' . $row['commentaire'] . '</p></div>';
}
} else {
      echo "Erreur : " . mysqli_error($connexion);
}

// Lier les données à enregistrer

// Ajouter les données dans la DB

// Fermeture de la connexion

mysqli_close($connexion);
