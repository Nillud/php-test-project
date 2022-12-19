<?php
  require_once 'config/connection.php';
  $goods_id = $_GET['id'];
  $good = mysqli_query($connection, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");
  $good = mysqli_fetch_assoc($good);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Update good</title>
</head>
<body>

  <h2>Update good</h2>

  <form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $goods_id ?>">
    <p>Title</p>
    <input type="text" name="title" id="title" value="<?= $good['title'] ?>">
    <p>Description</p>
    <textarea name="description" id="description"><?= $good['description'] ?></textarea>
    <p>Price</p>
    <input type="number" name="price" id="price" value="<?= $good['price'] ?>">
    <button type="submit">Update</button>
  </form>
  
</body>
</html>