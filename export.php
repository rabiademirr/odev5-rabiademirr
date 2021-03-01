<?php 
include 'products.php';
include 'products.json';

header("Content-Type: application/json");
header("Content-Disposition: attachment; filename=products.json");
echo json_encode('products.json');



?>