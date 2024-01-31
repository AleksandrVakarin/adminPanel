<?php

session_start();

if (isset($_GET['do']) && $_GET['do'] == 'logout') {
  unset($_SESSION['auth']);
}

if (!isset($_SESSION['auth'])) {
  header("Location: login.php");
  exit;
}

?>