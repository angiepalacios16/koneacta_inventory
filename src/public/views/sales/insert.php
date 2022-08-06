<?php
require_once "../../../../config/constants.php";
require_once "../../../private/model/sale.php";
require_once "../../../private/model/product.php";

$products = new Product();
$product = $products->getById($_POST['product_id']);

if($product->stock >= $_POST['quantity'] && $product->stock > 0) {
  $products->id = $_POST['product_id'];
  $products->stock = $product->stock - $_POST['quantity'];
  $products->update_stock();

  $sales = new Sale();
  $sales->product_id = $_POST['product_id'];
  $sales->quantity	 = $_POST['quantity'];
  $sales->create();
  header("Location: ../home/index.php?message=success");
} else {
  header("Location: ../home/index.php?message=error");
}

?>