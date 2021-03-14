<?php

require_once('connect.php');

// if(isset($_POST["submit"])){

$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwdrepeat = $_POST["pwdrepeat"];

// }

// mettre en places ces conditions pour l’insertion des membres :

// 	/ - email au bon format
// 	/ - mot de passe correspondant à certaines contraintes
// 	/ - deuxième mot de passe similaire au premier
// 	/ - mot de passe haché

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
     if ($pwdrepeat === $pwd){
          addUser($email, $pwd, $pwdrepeat, $pdo);
     }
}



function addUser($email, $pwd, $pwdrepeat, $pdo){
     var_dump($email, $pwd, $pwdrepeat);
     $pwd = trim(htmlentities($pwd));
     $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
     
     $sql = "INSERT INTO users (Email, Password) VALUES (:email, :pwd)";
     
          $statement = $pdo->prepare($sql);
          $statement->bindParam("email", $email);
          $statement->bindParam("pwd", $hashedPwd);
          $statement->execute();
     
          header("location:login.php ");
     
}

