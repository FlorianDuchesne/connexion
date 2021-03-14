
<?php
require_once('connect.php');

$email = $_POST["email"];
  $pwd = $_POST["pwd"];


  $stmt = $pdo->prepare('SELECT Email, Password FROM users WHERE Email = :email');
  $stmt->bindParam("email", $email);
  $stmt->execute();
  $post = $stmt->fetch();
  $upwd = $post['Password'];
  $uemail = $post['Email'];
  echo "<p>".$upwd."</p>";
  echo "<p>".$uemail."</p>"; 
  password_verify($pwd, $upwd);
  var_dump(password_verify($pwd, $upwd));
var_dump($stmt);
  // $stmt->execute([$email]);
  $postCount = $stmt->rowCount();
  var_dump($postCount);
  if  ($postCount > 0){
    echo "Bienvenue !";
  } else{
    echo "identifiants incorrects, merci de réessayer";
  }

//   $pwdHashed = $usernameExists["Password"];
// $checkPwd = password_verify($pwd, $pwdHashed);


// $sql = "INSERT INTO users (Email, Password) VALUES (:email, :pwd)";
     
// $statement = $pdo->prepare($sql);
// $statement->bindParam("email", $email);
// $statement->bindParam("pwd", $hashedPwd);
