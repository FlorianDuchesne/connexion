<?php
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/signup.css">
  <script src="https://kit.fontawesome.com/e2a8fec256.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  
<section class="connexion">
<div class="form-wrapper">
  <h1>Connexion</h1>
  <form action="index.php" method="post">
    <div class="form-item">
      <label for="email"></label>
      <input type="email" name="email" required="required" placeholder="Addresse email"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <div class = "flex">
        <input type="password" name="pwd" required="required" placeholder="mot de passe" id="pwdVisible"></input>
        <i onclick="myFunction()" class="togglePwd fas fa-eye"></i>
      </div>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Valider" value="Valider"></input>
    </div>
  </form>
  <div class="form-footer">
    <p><a href="#">Pas encore membre ? <br/> Inscrivez-vous</a></p>
  </div>
</div>
</section>
<script src="script.js"></script>
</body>
</html>

<?php

// if(isset($_POST["submit"])){

// }



// $pwdHashed = $usernameExists["Password"];
// $checkPwd = password_verify($pwd, $pwdHashed);

// $sql = "SELECT Email, Password FROM users WHERE Email = :email";
// $statement = $pdo->prepare($sql);
// $statement->bindParam("email", $email);
// $statement->bindParam("pwd", $hashedPwd);
// $statement->execute();
// $this->_user = $statement->fetch();
// return $this->_user;



// $sql = "INSERT INTO users (Email, Password) VALUES (:email, :pwd)";

//      $statement = $pdo->prepare($sql);
//      $statement->bindParam("email", $email);
//      $statement->bindParam("pwd", $hashedPwd);
//      $statement->execute();

//      header("location:login.php ");

