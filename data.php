<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dataBase = 'bdd-commentaires';

// Create connection
$conn = new mysqli($servername, $username, $password, $dataBase);

// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
} else {
      echo 'Connexion réussie à la base de données.';
}

// Executer une requête
$sql = "SELECT * FROM commentaires";
$resultat = mysqli_query($conn, $sql);

if($resultat) {
      print_r($resultat);
} else {
      echo "Erreur : " . mysqli_error($conn);
}

mysqli_close($conn);

?>