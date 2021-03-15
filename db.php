<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname="login";

    try {
        $db = new PDO("mysql:host=$hostname; $dbname", $username, $password);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database connected successfully";
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }
    ?>