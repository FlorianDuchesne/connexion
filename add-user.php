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
               echo "cet identifiant est déjà inscrit !";
          }
     } else {
          echo "le deuxième mot de passe n'est pas similaire au premier !";
     }
}
