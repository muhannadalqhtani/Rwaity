<?php include "../template/header.php"?>
<?php include "../db.php"?>
<?php
if ($_SESSION['id']){
    header('location:../index.php');
}
?>
<div class="d-flex align-items-center justify-content-center" style="padding-top:10%">
    <form class="form-signin text-center" action="" method="post">
        <img class="mb-4" src="/rewity/template/logo.png" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <div>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
        </div>
        <div class="pt-2">
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
        </div>
        <div class="pt-2">
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" required>
        </div>
        <div class="pt-2">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="pt-2">
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Register</button>
        </div>
    </form>
</div>
<div class="text-center">
    <a href="login.php" class="" >Login</a>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role_admin = 0;
    $password =  password_hash($_POST['password'],PASSWORD_DEFAULT);
    date_default_timezone_set("Asia/Riyadh");
    $created = date("Y-m-d");

    if ($conn->query("INSERT INTO `users` (`id`, `name`, `phone`, `email`, `role_admin`, `password`, `created`) VALUES 
                                                (NULL, '$name', '$phone', '$email', '$role_admin', '$password', '$created');")){
        Header("Location:../");
    }
}

?>

<?php include "../template/footer.php"?>
