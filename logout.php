<?php include('db.php');
 include('server.php');
 session_start(); $_SESSION['username'] = ''; unset($_SESSION['username']); session_destroy(); header('location:./index.php'); ?>