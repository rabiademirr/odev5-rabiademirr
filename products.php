<?php
include 'database.php';

function getProducts()
{
  
$db = new Database();
$conn = $db->getConn();

  $sql = "SELECT id, name,price,content,description,categoryName FROM products";

$data = $conn->query($sql);
return $data;

}

function getProductById($id)
{
    $products = getProducts();
    foreach ($products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }
    return null;
}


function createProduct($data)
{
      $db = new Database();
     $conn = $db->getConn();

            $name = $_POST['name'];
            $price =$_POST['price'];
            $content =$_POST['content'];
            $description =$_POST['description'];
            $categoryName =$_POST['categoryName'];

     $sql = "INSERT INTO products(name,price,content,description,categoryName) VALUES('$name','$price','$content','$description','categoryName')";

    $data = $conn->query($sql);
    return $data;

}

function updateProduct($data, $id)
{
   
     $db = new Database();
     $conn = $db->getConn();

            $name = $_POST['name'];
            $price =$_POST['price'];
            $content =$_POST['content'];
            $description =$_POST['description'];
            $categoryName =$_POST['categoryName'];

     $sql = "UPDATE products SET name = '$name', price = '$price', content = '$content',description='$description',categoryName='categoryName' WHERE id = '$id'";

    $data = $conn->query($sql);
    return $data;

}

function deleteProduct($id)

  {
    
     $db = new Database();
     $conn = $db->getConn();

            $name = $_POST['name'];
            $price =$_POST['price'];
            $content =$_POST['content'];
            $description =$_POST['description'];
            $categoryName =$_POST['categoryName'];

     $sql = "DELETE FROM products WHERE id = '$id'";

    $data = $conn->query($sql);
    


}

function validateProduct($product, &$errors){

    $isValid = true;
    if (!$product['name']) {
        $isValid = false;
        $errors['name'] = 'Product name is required!!';
    }
     if (!$product['price']) {
        $isValid = false;
        $errors['price'] = 'Product price is required!!';
    }

    return $isValid;
}



?>


