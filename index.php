<?php
require_once('connect.php');
session_start();

$_SESSION["token"] = bin2hex(random_bytes(24));

// Si la variable $_SESSION['user'] n'existe pas ou est nulle,
if (!isset($_SESSION['user'])) {
  // On propose au visiteur de la page de s'inscrire ou de se connecter
  echo "<h1> <a href='login.php'>Connectez-vous</a> OU <a href='signup.php'>INSCRIVEZ-VOUS</a> ! </h1>";
} // Si la variable existe et n'est pas nulle,
else {
  // On lui souhaite la bienvenue (ucwords permet de mettre une majuscule à la première lettre des mots paramétrés)
  echo "<h1>BIENVENUE " . $_SESSION['user'] . "</h1>";
  // et on lui propose de se déconnecter à travers un lien
  echo "<h2><a href='logout.php'>Deconnexion</a></h2>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/signup.css">
  <title>Document</title>
</head>

<body>

</body>

</html>