<?php
session_start();
ob_start();

if (isset($_SESSION['active'])) {
  header('Location: index.php');
}
