<?php

class Controller
{

  private $_connexion;
  private $_user;


  public function __construct($connexion)
  {
    $this->_connexion = $connexion;
  }

  function addUser($email, $pwd, $pwdrepeat, $pdo)
  {
    try {
      // var_dump($email, $pwd, $pwdrepeat);
      $pwd = trim(htmlentities($pwd));
      $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (Email, Password) VALUES (:email, :pwd)";

      $statement = $pdo->prepare($sql);
      $statement->bindParam("email", $email);
      $statement->bindParam("pwd", $hashedPwd);
      $statement->execute();

      // $postCount = $statement->rowCount();
      // var_dump($postCount);

      header("location:login.php ");
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }

  function getUser($uemail)
  {
    try {
      $stmt = $this->_connexion->prepare('SELECT Email, Password FROM users WHERE Email = :email');
      $stmt->bindParam("email", $uemail);
      $stmt->execute();
      $this->_user = $stmt->fetch();
      return $this->_user;
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }
  function verifMotdepasse($pwd)
  {
    $upwd = $this->_user['Password'];
    password_verify($pwd, $upwd);
    var_dump(password_verify($pwd, $upwd));
    if (!password_verify($pwd, $upwd)) {
      echo "mot de passe incorrect, merci de réessayer";
    } else {
      echo "mot de passe correct";
    }
  }
}
