<?php include "../template/header.php"; ?>
<?php include "../db.php"; ?>

    <div class="container">
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
        </div>
        <div class="row py-5">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Cart</span>
                </h4>
                <ul class="list-group mb-3">
                <?php foreach ($conn->query('SELECT * FROM `cart` INNER JOIN products ON products.id = id_product WHERE id_buyer ='.$_SESSION['id'].' and sold = 0') as $cart){ ?>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?php echo $cart['subject'] ?></h6>
                        </div>
                        <span class="text-muted"><?php echo $cart['price'] ?></span>
                    </li>
                    <?php } ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (RSA)</span>
                        <strong>
                            <?php
                            echo isset($cart['price'] );
                            ?>
                        </strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Address</h4>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <?php

                            $query = mysqli_query($conn, 'SELECT * FROM `address` WHERE id_user = '.$_SESSION['id']);
                            $address = mysqli_fetch_assoc($query);

                            ?>
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" name="country" required>
                                <option value="<?php echo $address['country'] ?>"><?php echo $address['country'] ?></option>
                                    <option>Saudi Arabia</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city">City</label>
                            <select class="custom-select d-block w-100" id="city" name="city" required>
                                <option name="city" value="<?php echo $address['city'] ?>"><?php echo $address['city'] ?></option>
                                <option>Riyadh</option>
                                <option>Jeddah</option>
                                <option>Mecca</option>
                                <option>Medina</option>
                                <option>Ad Dammām</option>
                                <option>Tabūk</option>
                                <option>Abhā</option>
                                <option>Arar</option>
                                <option>Jāzān</option>
                                <option>Sakākā</option>
                                <option>Al Bāḩah</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address">Discraptions <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $address['description'] ?>">
                        </div>
                    </div>
                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="cash" name="payment" value="Cash on Delivery" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="cash">Cash on Delivery</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="transfer" name="payment" value="Bank transfer" type="radio" class="custom-control-input" >
                            <label class="custom-control-label" for="transfer">Bank transfer <span class="text-muted">(IBAM SA0380000000608010167519)</span></label>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-secondary btn-lg btn-block" type="submit">Complete the order</button>
                </form>
            </div>
        </div>
<?php include "../template/footer.php"; ?>


<?php



if ($_POST){
    $query = mysqli_query($conn, 'SELECT * FROM `cart` WHERE id_buyer = '.$_SESSION['id']);
    $result = mysqli_fetch_assoc($query);


    $id_buyer = $result['id_buyer'];
    $id_product = $result['id_product'];
    $payment = $_POST['payment'];

    date_default_timezone_set("Asia/Riyadh");
    $created = date("Y-m-d");

    if ($conn->query("INSERT INTO `orders` (`id`, `id_buyer`,`id_product`, `payment`, `status`, `created_at`) VALUES (NULL, '$id_buyer','$id_product', '$payment', false , '$created');")){
        $conn->query("DELETE FROM `cart` WHERE id_product = '$id_product'");
        $conn->query("UPDATE `products` SET `sold` = '1' WHERE `products`.`id` = ".$id_product);

    }else{
        echo "error";
    }

}