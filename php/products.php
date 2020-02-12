<?php
require __DIR__  . DIRECTORY_SEPARATOR . "config_souvenir.php";
require PATH_LIB . "lib-db.php";
require PATH_LIB . "lib-products.php";
$pdtLib = new Products();
$products = $pdtLib->get(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Responsive Travel Guide System
    </title>
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/cart.js"></script>
  </head>
  <body>
    <div id="nav">
      <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="Tour.php">Tour</a></li>
        <li><a href="products.php">Souvenir</a></li>
        <li><a href="../welcome.php">Home</a></li>
      </ul>
      <div>
        <img class="logo" src="../pic/logo.png">
      </div>
    </div>
      <div class="content">
        <div id="cart-header">
          <div id="page-cart-icon" onclick="cart.toggle();">
            &#128722; <span id="page-cart-count">0</span>
          </div>
        </div>
        <div id="page-products"><?php
        if (is_array($products)) {
          foreach ($products as $id => $row) { ?>
            <div class="pdt">
              <img class="pdt-img" src="../pic/Souvenir/<?= $row['product_image'] ?>">
              <h3 class="pdt-name"><?= $row['product_name'] ?></h3>
              <div class="pdt-price">$<?= $row['product_price'] ?></div>
              <div class="pdt-desc"><?= $row['product_description'] ?></div>
              <input class="pdt-add" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/>
            </div>
          <?php }
        } else {
          echo "No products found.";
        }
        ?></div>
        <div id="page-cart" class="ninja"></div>
      </div>
  </body>
</html>
