<?php
$dsn = 'pgsql:host=127.0.0.1;dbname=connect-pgsql';
$username = 'postgres'; // Nom d'utilisateur modifié
$password = '3231'; // Mot de passe
$options = [];

try {
  $bdd = new PDO($dsn, $username, $password, $options);
  echo "Connexion reussie a la base de donneesPostgres avec succes ";

} catch(PDOException $e) {
die("erreur: " . $e->getMessage());
}