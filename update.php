<?php
include 'header.php';
require 'products.php';

if (!isset($_GET['id'])) {
    include "notFound.php";
    exit;
}
$productId = $_GET['id'];

$product = getProductById($productId);
if (!$product) {
    include "notFound.php";
    exit;
}

$errors = [
    'name' => "",
    'price' => "",
    'content' => "",
    'description' => "",
    'categoryName' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = array_merge($product, $_POST);

    $isValid = validateProduct($product, $errors);

    if ($isValid) {
        $product = updateProduct($_POST, $productId);
        header("Location: index.php");
    }
}

?>
<?php include 'form.php' ?>
