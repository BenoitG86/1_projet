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
