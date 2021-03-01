<?php
 

 function importJsonFile() {
if(isset($_FILES['importfile'])){
$data = file_get_contents($_FILES['importfile']['tmp_name']);
 $_SESSION['data'] = $data;
$products = json_decode($data,true); 

return $products;
    }


}
 $products=importJsonFile();

include 'header.php';

?>

<div class="container">
    <div class="btn-group">
    <p>
        <a class="btn btn-secondary " href="create.php">Create New Product</a>
        <a class="btn btn-warning" href="export.php">Export Data</a>   
<form  action="import.php" method="post" enctype="multipart/form-data">
        <label for="frm_importfile"></label>
        <input type="file" name="importfile" id="frm_importfile">
        <button  class="btn btn-success "  type="submit">Import</button>
    </form>
    </p>
     </div>
     

    <table class="table  table-striped">
        <thead class="thead-dark">
        <tr>
        	<th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Content</th>
            <th>Description</th>
            <th>Category</th>
            <th></th>
        </tr>
        </thead>
       <!-- <?php	if (is_array($products) || is_object($products)): ?>-->
        <tbody>
        
        <?php foreach ($products as $product): ?>
            <tr>
            	 <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['price']?></td>
                <td><?php echo $product ['content'] ?></td>
                <td><?php echo $product ['description'] ?></td>
                <td><?php echo $product['categoryName'] ?></td>
             <td>
                    <a href="view.php?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-success ">View</a>
                    <a href="update.php?id=<?php echo $product['id'] ?>"
                       class="btn btn-sm btn-info">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td> 
            </tr>
        <?php endforeach; ?>
         
        </tbody>
        <?php endif; ?>
    </table>
</div>



<?php include 'footer.php' ?>
