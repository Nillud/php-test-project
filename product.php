<?php 
  require_once 'config/connection.php';
  $product_id = $_GET['id'];
  $product = mysqli_query($connection, "SELECT * FROM `goods` WHERE `id` = '$product_id'" ); 
  $product = mysqli_fetch_assoc($product); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Preview good</title>
</head>
<body>
  <a href="/">Main</a>
  <hr>

  <h2><?= $product['title'] ?></h2>
  <p><?= $product['description'] ?></p>
  <p><b>Price:</b> <?= $product['price'] ?></p>

  <hr>
  <h3>Add comment</h3>
  <form action="vendor/create_comment.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <textarea name="comment" id="comment" placeholder="Comment"></textarea>
    <button type="submit">Send</button>
  </form>

  <hr>
  <p>Comments</p>
    <ul>
    <?php
      $comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `product_id`='$product_id'");
      $comments = mysqli_fetch_all($comments);
      foreach ($comments as $comment) {
    ?>
      <li><?= $comment[2] ?></li>
    <?php
      }
    ?>
    </ul>
  
</body>
</html>