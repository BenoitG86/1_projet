<?php
include 'data.php';

$servername = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=0, initial-scale=1.0">
      <link rel="stylesheet" href="styles/style.css">
      <link rel="stylesheet" href="styles/reset.css">
      <title>Document</title>
</head>

<body>
      <form action="" method="post">
            <label for="commentaire">Ecrivez à la lune</label>
            <textarea name="commentaire" id="commentaire" cols="50" rows="10" placeholder="Entrez ici votre commentaire... !"></textarea>
            <div><input type="submit"></div>
            <div><input type="reset"></div>
      </form>
</body>

</html>