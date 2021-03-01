<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($product['id']): ?>
                    Update Product: <b><?php echo $product['name'] ?></b>
                <?php else: ?>
                    Create new Pruduct
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" value="<?php echo $product['name'] ?>"
                           class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input name="price" value="<?php echo $product['price'] ?>"
                           class="form-control <?php echo $errors['price'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['price'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <input name="content" value="<?php echo $product['content'] ?>"
                           class="form-control  <?php echo $errors['content'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['content'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Category Name</label>
                    <input name="categoryName" value="<?php echo $product['categoryName'] ?>"
                           class="form-control  <?php echo $errors['categoryName'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['categoryName'] ?>
                    </div>
                </div>
                 <div class="form-group">
                    <label>Description</label>
                    <input name="description" value="<?php echo $product['description'] ?>"
                           class="form-control  <?php echo $errors['description'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['description'] ?>
                    </div>
                </div>
            
                <button  class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
