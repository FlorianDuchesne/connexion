
<?php
require_once('connect.php');

$email = $_POST["email"];
  $pwd = $_POST["pwd"];

  $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
  $stmt->execute([$email]);
  $postCount = $stmt->rowCount();
  var_dump($postCount);
  if  ($postCount > 0){
    echo "Bienvenue !";
  } else{
    echo "identifiants incorrects, merci de réessayer";
  }

//   $pwdHashed = $usernameExists["Password"];
// $checkPwd = password_verify($pwd, $pwdHashed);
