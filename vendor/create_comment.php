<?php
  require_once '../config/connection.php';

  $id_product = $_POST['id'];
  $comment = $_POST['comment'];

  mysqli_query($connection, "INSERT INTO `comments` (`id`, `product_id`, `comment`) VALUES (NULL, '$id_product', '$comment')");
  header('Location: ../product.php?id=' . $id_product);
?>