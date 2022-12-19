<?php
  require_once 'config/connection.php';
  $goods = mysqli_query($connection, "SELECT * FROM `goods`"); // получить данные из БД (соединение, sql-запрос выбора данных из таблицы)
  $goods = mysqli_fetch_all($goods); // получить в привычном виде
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Goods</title>
</head>
<body>
  
<table>
  <tr>
    <th>id</th>
    <th>title</th>
    <th>description</th>
    <th>price</th>
    <th>&#9672;</th>
    <th>&#9998;</th>
    <th>&#10006;</th>
  </tr>
  <?php
    foreach($goods as $good) {
      ?>
      <tr>
        <td><?= $good[0] ?></td>
        <td><?= $good[1] ?></td>
        <td><?= $good[2] ?></td>
        <td><?= $good[3] ?></td>
        <td><a href="product.php?id=<?= $good[0] ?>">Preview</a></td>
        <td><a href="update.php?id=<?= $good[0] ?>">Update</a></td>
        <td><a href="vendor/delete.php?id=<?= $good[0] ?>">Delete</a></td>
      </tr>
      <?php
    }
  ?>
</table>

<h2>Add new good</h2>

<form action="vendor/create.php" method="post">
  <p>Title</p>
  <input type="text" name="title" id="title">
  <p>Description</p>
  <textarea name="description" id="description"></textarea>
  <p>Price</p>
  <input type="number" name="price" id="price">
  <button type="submit">Add</button>
</form>

</body>
</html>