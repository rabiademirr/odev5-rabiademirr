<?php
include 'header.php';
require 'products.php';


$product = [
    'id' => '',
    'name' => '',
    'price' => '',
    'content' => '',
    'description' => '',
    'categoryId' => '',
    'categoryName' => '',
];

$errors = [
    'name' => '',
    'price' => '',
    'content' => '',
    'description' => '',
    'categoryId' => '',
    'categoryName' => '',
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = array_merge($product, $_POST);

    $isValid = validateProduct($product, $errors);

    if ($isValid) {
        $product = createProduct($_POST);


        header("Location: index.php");
    }
}



?>



<?php include 'form.php' ?>

