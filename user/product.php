<?php
    $title = "user"
?>
<?php include "../template/header.php"; ?>
<?php include "../db.php"; ?>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <?php
                foreach ($conn->query('SELECT * FROM products INNER JOIN category on category.id = products.id_category WHERE id_user ='.$_SESSION['id']) as $product){ ?>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="../images/<?php echo $product['image']?>" style="height: 450px; width: 100%; display: block;">
                            <div class="card-body">
                                <small class="card-text"><b>Subject : <?php echo $product['subject']?></b></small><br>
                                <small class="card-text"><b>Author : <?php echo $product['author']?></b></small><br>
                                <small class="card-text"><?php echo substr($product['description'] , '0','100') ?>...</small>
                                <div class="text-center">
                                    <div class="btn-group w-75 pt-3">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-4" >
                    <a href="create.php">
                        <button type="submit" name="category" value="" class="btn btn-outline-dark">Create Product</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php include "../template/footer.php"; ?>