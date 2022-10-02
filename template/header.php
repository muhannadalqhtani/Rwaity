<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/rewity">
        <img src="/rewity/template/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span>Rewity</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <!-- auth -->
                <?php if (isset($_SESSION['id'])) {?>
                    <!-- admin -->
                    <?php if ($_SESSION['role']) { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/admin">Dashboard</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/admin/orders.php">Order</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/admin/products.php">Product</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/admin/messages.php">Message</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/admin/users.php">Users</a>
                        </li>
                    <?php }else{ ?>

                        <!-- user -->
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/user">Dashboard</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/user/product.php">Product</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/user/order.php">Orders</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/rewity/user/checkout.php">Cart</a>
                        </li>
                    <?php } ?>
                    <form action="" method="post" >
                        <a class="nav-link text-danger" href="/rewity/auth/logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 15 20">
                                <path d="M7.5 1v7h1V1h-1z"></path>
                                <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"></path>
                            </svg>
                        </a>
                    </form>
                <?php }else{ ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/rewity/contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/rewity/auth/login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/rewity/auth/register.php">Register</a>
                    </li>
                <?php } ?>
            </ul>
        </form>
    </div>
</nav>


