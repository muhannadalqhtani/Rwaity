<?php include "template/header.php"; ?>

    <div class="py-5">
        <div class="container">
            <!-- Search -->
            <form action="" method="">
                <div class="input-group  w-100 text-center" style="margin: auto; ">
                    <input type="text" class="form-control" placeholder="Enter name book" aria-label="Enter name book" aria-describedby="basic-addon2" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>

            <!-- Category -->
            <div class="w-90 text-center p-5" style="margin: auto;">
                <div class="" role="group" aria-label="Basic example" >
                    <form action="" method="get">
                        <button type="submit" name="category" value="" class="btn btn-outline-dark">drama</button>
                        <button type="submit" name="category" value="" class="btn btn-outline-dark">action</button>
                        <button type="submit" name="category" value="" class="btn btn-outline-dark">horror</button>
                        <button type="submit" name="category" value="" class="btn btn-outline-dark">Show All</button>
                    </form>
                </div>
            </div>

            <!-- show product -->
            <div class="row">
                        <?php for ($i=1 ; $i<5 ;$i++){ ?>
                <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="images/book1.jpg" style="height: 450px; width: 100%; display: block;">
                                <div class="card-body">
                                    <small class="card-text"><b>Subject :Ababel </b></small><br>
                                    <small class="card-text"><b>price :100 </b></small><br>
                                    <small class="card-text"><b>Author : Abdullah </b></small><br>
                                    <small class="card-text text-justify">thid best book</small>
                                    <div class="text-center">
                                        <form action="" method="post">
                                            <div class="btn-group text-center pt-3">
                                                <?php
                                                if (0){ ?>
                                                    <!-- owner -->
                                                    <button type="submit"  disabled class="btn btn-sm btn-block btn-outline-secondary ">You owner</button>
                                                    <?php
                                                }elseif(true){ ?>
                                                    <!-- auth -->
                                                    <button type="submit" name="id_product" value=""  class="btn btn-sm btn-block btn-secondary ">Add to cart</button>
                                                <?php }else{ ?>
                                                    <!-- gist -->
                                                    <a href="/rewity/auth/login.php" >
                                                        <button type="button" class="btn btn-sm btn-block btn-secondary ">Login</button>
                                                    </a>
                                                <?php }
                                                ?>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                </div>
                        <?php } ?>
            </div>
        </div>
    </div>

<?php include "template/footer.php"; ?>
