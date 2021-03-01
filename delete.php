<?php
include 'header.php';
require  'products.php';


if (!isset($_POST['id'])) {
    include "notFound.php";
    exit;
}
$productId = $_POST['id'];
deleteProduct($productId);

header("Location: index.php");
