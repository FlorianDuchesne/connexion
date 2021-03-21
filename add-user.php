<?php

require_once('connect.php');
require_once('Controller.php');


$controler = new Controller($pdo);


$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwdrepeat = $_POST["pwdrepeat"];


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
     if ($pwdrepeat === $pwd) {
          $user = $controler->getUser($email);
          if (!$user) {
               $controler->addUser($email, $pwd, $pwdrepeat, $pdo);
          } else {
               header("location: ./signup.php?error=userexists");
               exit();
               // echo "cet identifiant est déjà inscrit !";
          }
     } else {
          header("location: ./signup.php?error=wrongpasswords");
          exit();
          // echo "le deuxième mot de passe n'est pas similaire au premier !";
     }
}
