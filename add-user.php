<?php

require_once('connect.php');

// if(isset($_POST["submit"])){

$email = $_POST["email"];
$pwd = $_POST["pwd"];
$pwdrepeat = $_POST["pwdrepeat"];

// }

var_dump($email, $pwd, $pwdrepeat);
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (Email, Password) VALUES (:email, :pwd)";

     $statement = $pdo->prepare($sql);
     $statement->bindParam("email", $email);
     $statement->bindParam("pwd", $hashedPwd);
     $statement->execute();

     header("location:login.php ");

