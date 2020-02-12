<?php
require __DIR__ . DIRECTORY_SEPARATOR . "config_souvenir.php";
switch ($_POST['req']) {
  default:
    echo "INVALID REQUEST";
    break;
  case "add":
    if (is_numeric($_SESSION['cart'][$_POST['product_id']])) {
      $_SESSION['cart'][$_POST['product_id']] ++;
    } else {
      $_SESSION['cart'][$_POST['product_id']] = 1;
    }
    echo "Item added to cart";
    break;
  case "count":
    $total = 0;
    if (count($_SESSION['cart'])>0) {
      foreach ($_SESSION['cart'] as $id => $qty) {
        $total += $qty;
      }
    }
    echo $total;
    break;
  case "show":
    require PATH_LIB . "lib-db.php";
    require PATH_LIB . "lib-cart.php";
    $cartLib = new Cart();
    $products = $cartLib->details();
    $sub = 0;
    $total = 0; ?>
    <h1 style="text-align:center">MY CART</h1>
    <table id="cart-table" style="text-align">
      <tr>
        <th>Remove</th>
        <th>Qty</th>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php
      if (count($_SESSION['cart'])>0) {
      foreach ($_SESSION['cart'] as $id => $qty) {
        $sub = $qty * $products[$id]['product_price'];
        $total += $sub; ?>
      <tr>
        <td>
          <input class="cart-remove" type="button" value="X" onclick="cart.remove(<?= $id ?>);"/>
        </td>
        <td><input class="text-form" id='qty_<?= $id ?>' onchange='cart.change(<?= $id ?>);' type='number' value='<?= $qty ?>'/></td>
        <td><?= $products[$id]['product_name'] ?></td>
        <td><?= sprintf("RM%0.2f", $sub) ?></td>
      </tr>
      <?php }} else { ?>
      <tr><td colspan="3">Cart is empty</td></tr>
      <?php } ?>
      <tr>
        <td colspan="2"></td>
        <td><strong>Grand Total</strong></td>
        <td><strong><?= sprintf("RM%0.2f", $total) ?></strong></td>
      </tr>
    </table>
    <?php if (count($_SESSION['cart']) > 0) { ?>
    <form name="payment" id="cart-checkout" onsubmit="return cart.checkout();">
      <label>Name</label>
      <input type="text" class="text-form" id="co_name" required value="John Doe"/>
      <label>Email</label>
      <input type="email" class="text-form" id="co_email" required value="john@doe.com"/>
      <label>Address</label>
      <input type="text" class="text-form" id="co_address" required value="7, Jalan Hadapan, Taman Belakang"/>
      <label>Contact</label>
      <input type="text" class="text-form" id="co_contact" required value="60123456789"/>
      <input type="submit" value="Checkout"/>
    </form>
    <?php }
    break;
  case "change":
    if ($_POST['qty'] == 0) {
      unset($_SESSION['cart'][$_POST['product_id']]);
    } else {
      $_SESSION['cart'][$_POST['product_id']] = $_POST['qty'];
    }
    echo "Quantity updated";
    break;
  case "checkout":
    require PATH_LIB . "lib-db.php";
    require PATH_LIB . "lib-cart.php";
    $cartLib = new Cart();
    if ($cartLib->checkout($_POST['name'], $_POST['email'], $_POST['address'], $_POST['contact'])) {
      $_SESSION['cart'] = [];
      echo "OK";
    } else {
      echo $cartLib->error;
    }
    break;
}
?>
