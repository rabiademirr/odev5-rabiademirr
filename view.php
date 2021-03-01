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

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View Product: <b><?php echo $product['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $product['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?php echo $product['name'] ?></td>
            </tr>
            <tr>
                <th>Price:</th>
                <td><?php echo $product['price'] ?></td>
            </tr>
            <tr>
                <th>Content:</th>
                <td><?php echo $product['content'] ?></td>
            </tr>
            <tr>
                <th>Description:</th>
                <td><?php echo $product['description'] ?></td>
            </tr>
             <tr>
                <th>Category Name:</th>
                <td><?php echo $product['categoryName'] ?></td>
            </tr>
        
            </tbody>
        </table>
    </div>
</div>


<?php include 'footer.php' ?>
