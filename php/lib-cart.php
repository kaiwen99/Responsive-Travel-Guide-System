<?php
class Cart extends DB {
  function details () {
    if (count($_SESSION['cart'])==0) {
      return false;
    }
    $sql = "SELECT * FROM `products` WHERE `product_id` IN (";
    $sql .= str_repeat('?,', count($_SESSION['cart']) - 1) . '?';
    $sql .= ")";
    return $this->fetch($sql, array_keys($_SESSION['cart']), "product_id");
  }

  function checkout ($name, $email, $address, $contact) {
    $this->start();
    $pass = $this->exec(
      "INSERT INTO `orders` (`order_name`, `order_email`, `order_address`, `order_contact`) VALUES (?, ?, ?, ?)",
      [$name, $email, $address, $contact]
    );
    if ($pass) {
      $this->orderID = $this->lastID;
      $sql = "INSERT INTO `orders_items` (`order_id`, `product_id`, `quantity`) VALUES ";
      $cond = [];
      foreach ($_SESSION['cart'] as $id=>$qty) {
        $sql .= "(?, ?, ?),";
        array_push($cond, $this->orderID, $id, $qty);
      }
      $sql = substr($sql, 0, -1) . ";";
      $pass = $this->exec($sql, $cond);
    }
    $this->end($pass);
    return $pass;
  }
  function get ($id) {
    $order = $this->fetch(
      "SELECT * FROM `orders` WHERE `order_id`=?", [$id]
    );
    $order['items'] = $this->fetch(
      "SELECT * FROM `orders_items` LEFT JOIN `products` USING (`product_id`) WHERE `orders_items`.order_id=?",
      [$id], "product_id"
    );
    return $order;
  }
}
?>
