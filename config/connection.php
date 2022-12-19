<?php
  $connection = mysqli_connect('localhost', 'root', '', 'cruddb'); //установить соединение (ip, пользователь, пароль, база данных)

  if (!$connection) {
    die('Connection error');
  }
?>