<?php
declare(strict_types=1);

session_start();

include('../php/header.php');

if (!isset($_SESSION['username'])) {
  include('../php/form.php');
} else {
  echo "Hello, {$_SESSION['username']}";
  echo "<a href='exit.php'>Exit</a>";
}

include('../php/footer.php');


