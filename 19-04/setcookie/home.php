<?php 
session_start();
if (isset($_COOKIE['username'])) {
  $_SESSION['username'] = $_COOKIE['username'];
}
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}


$user_name = $_SESSION['username'];

require_once 'layouts/header.php';
echo "<div class='card-header'>Xin chào, <b> $user_name </b></div>
      <div class='card-body text-right btn'><a href='logout.php'>Logout</a></div>";
require_once 'layouts/footer.php'; ?>  