<?php
require_once "../../../private/model/product.php";
$product = new Product();
$product->id = $_POST['id'];
$product->name = $_POST['name'];
$product->reference = $_POST['reference'];
$product->price = $_POST['price'];
$product->weight = $_POST['weight'];
$product->category = $_POST['category'];
$product->stock = $_POST['stock'];
$product->update();
header("Location: ../../../../index.php");
?>