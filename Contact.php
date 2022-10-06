<?php include "template/header.php"?>
<?php include "db.php"?>

<div class="d-flex align-items-center justify-content-center" style="padding-top:12%">
    <form class="form-signin text-center" action="" method="post">
        <img class="mb-4" src="/rewity/template/logo.png" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Contact Us</h1>
        <div>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
        </div>
        <div class="pt-2">
            <input type="text" name="communication" id="communication" class="form-control" placeholder="Enter Email / Phone" required>
        </div>
        <div class="pt-2">
            <textarea name="message" id="message" class="form-control" placeholder="Enter message" required></textarea>
        </div>
        <div class="pt-2">
            <button class="btn btn-lg btn-secondary btn-block" name="submit" type="submit">Send</button>
        </div>
    </form>
</div>


<?php
if (isset($_POST['submit'])){
	
    $name = isset($_POST['name']);
    $communication = isset($_POST['communication']);
    $message = isset($_POST['message']);

    date_default_timezone_set("Asia/Riyadh");
    $created_at = date("Y-m-d");
    $updated_at  = $created_at;

    if ($conn->query("INSERT INTO `contact` (`id`, `name`, `communication`, `message`,`created_at`,`updated_at`) VALUES (NULL, '$name', '$communication', '$message', '$created_at', '$updated_at');")){
        Header("Location: index.php");

    }
}

?>
<?php include "template/footer.php"?>
