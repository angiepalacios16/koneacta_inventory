<?php
require_once "../../../private/model/product.php";
$id = $_GET['id'];
$product = new Product();
$product->delete($id);
header("Location: ../../../../index.php");
?>