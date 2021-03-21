
<?php
require_once('connect.php');
require_once('Controller.php');

$email = $_POST["email"];
$pwd = $_POST["pwd"];

$controler = new Controller($pdo);

$user = $controler->getUser($email);
if ($user) {
  $controler->verifMotdepasse($pwd);
}
