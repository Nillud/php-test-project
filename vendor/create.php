<?php
  require_once '../config/connection.php';

  // добавление переменных для полей POST

  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  // Добавить новую строку в таблицу
  mysqli_query($connection, "INSERT INTO `goods` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");

  header('Location: /'); // вернуться в родительскую директорию
?>