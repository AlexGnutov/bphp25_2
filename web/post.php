<?php

session_start();

if (isset($_POST['username']) && strlen($_POST['username']) > 3) {
  $_SESSION['username'] = $_POST['username'];
  header("Location: /index.php");
}
