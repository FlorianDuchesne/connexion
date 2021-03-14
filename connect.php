<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'loginsystem';

// Set DSN
$conn = 'mysql:host='. $host .';dbname='.$dbname;

// Create a PDO instance
$pdo = new PDO($conn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

