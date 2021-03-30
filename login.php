<?php
require_once('connect.php');
require_once('Controller.php');
session_start();

if (isset($_POST["email"])) {
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];


  $controler = new Controller($pdo);

  $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

  $user = $controler->getUser($email);
  if ($user) {
    if ($controler->verifMotdepasse($pwd)) {
      if (hash_equals($_SESSION['token'], $token)) {
        $_SESSION['user'] = $user['Email'];
        header("location:index.php");
      } else {
        echo "il y a un souci avec le token";
      };
    }
  } else {
    header("location: ./login.php?error=wrongemail");
  }
}

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
      <form action="login.php" method="post">
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
        <p><input type="hidden" value="<?= $_SESSION["token"] ?>" name="token"></p>
        <div class="button-panel">
          <input type="submit" class="button" title="Valider" value="Valider"></input>
        </div>
      </form>
      <div class="form-footer">
        <p><a href="#">Pas encore membre ? <br /> Inscrivez-vous</a></p>
      </div>
    </div>
  </section>
  <script src="script.js"></script>

  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "wrongpassword") {
      echo "<p>mot de passe incorrect, merci de réessayer</p>";
    } else if ($_GET["error"] == "wrongemail") {
      echo "<p>email incorrect, merci de réessayer</p>";
    }
  }
  ?>

</body>

</html>