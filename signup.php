<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/signup.css">
  <script src="https://kit.fontawesome.com/e2a8fec256.js" crossorigin="anonymous"></script>
  <title>signup</title>
</head>

<body>

  <section class="Inscription">
    <div class="form-wrapper">
      <h1>Inscription</h1>
      <form action="add-user.php" method="post">
        <div class="form-item">
          <label for="email"></label>
          <input type="email" name="email" required="required" placeholder="Addresse email"></input>
        </div>
        <div class="form-item">
          <label for="password"></label>
          <div class="flex">
            <input type="password" name="pwd" required="required" placeholder="mot de passe" id="pwdVisible"></input>
            <i onclick="myFunction()" class="togglePwd fas fa-eye"></i>
          </div>
        </div>
        <div class="form-item">
          <label for="verifpassword"></label>
          <div class="flex">
            <input type="password" name="pwdrepeat" required="required" placeholder="Repéter le mot de passe" id="pwdVisible2"></input>
            <i onclick="myFunction2()" class="togglePwd fas fa-eye"></i>
          </div>
        </div>
        <div class="button-panel">
          <input type="submit" class="button" title="Valider" value="Valider"></input>
        </div>
      </form>
      <div class="form-footer">
        <p><a href="#">Déjà membre ? <br /> connectez-vous</a></p>
      </div>
    </div>
  </section>

  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "userexists") {
      echo "<p>cet identifiant est déjà inscrit !</p>";
    } else if ($_GET["error"] == "wrongpasswords") {
      echo "<p>le deuxième mot de passe n'est pas similaire au premier !</p>";
    }
  }
  ?>


</body>
<script src="script.js"></script>

</html>