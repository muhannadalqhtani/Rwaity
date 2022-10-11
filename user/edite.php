

<div class="d-flex align-items-center justify-content-center" style="padding-top:10%">
    <form class="form-signin text-center" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <img class="mb-4" src="/rewity/template/logo.png" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">تعديل المنتج</h1>

        <div>
            <input type="text" name="subject" id="subject" class="form-control" value="<?php echo $product['subject']?>" required>
        </div>
        <div class="pt-2">
            <input type="text" name="author" id="author" class="form-control" value="<?php echo $product['author']?>" required>
        </div>
        <div class="pt-2">
            <input type="text" name="description" id="description" class="form-control" value="<?php echo $product['description']?>" required>
        </div>
        <div class="pt-2">
            <input type="file" name="image" id="image" class="form-control" value="image" required>
        </div>
        <div class="pt-2">
            <select class="custom-select d-block w-100" id="category" name="category" required>

            </select>
        </div>
        <div class="pt-2">
            <input type="text" name="price" id="price" class="form-control" value="<?php echo $product['price']?>" required>
        </div>

        <div class="pt-2">
            <button class="btn btn-lg btn-secondary btn-block"  type="submit">حفظ التعديل</button>
        </div>
    </form>
</div>
