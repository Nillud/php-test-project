<?php
  require_once '../config/connection.php';

  $id = $_GET['id'];

  mysqli_query($connection, "DELETE FROM `goods` WHERE `id` = '$id'");
  header('Location: /');
?>