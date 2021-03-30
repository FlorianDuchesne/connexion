<?php
// démarre une nouvelle session ou reprend une session existante
session_start();
// on détruit la variable $_SESSION['user']
unset($_SESSION['user']);
// on détruit la variable $_SESSION['error']
unset($_SESSION['error']);

// on est redirigé vers l'index
header("Location:index.php");
