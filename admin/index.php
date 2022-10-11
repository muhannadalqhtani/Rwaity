

    <div class="container py-5 text-center">

        <div class="row">
            <!-- dashboard admin -->
            <div class="col-md-6">
                <div class="card mb-4 p-5 text-center shadow-sm">
                    <h5>اجمالي المبيعات</h5>
                    <h1><?php echo $result_sales['total_sales'] ?></h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 p-5 text-center shadow-sm">
                    <h5> الفوائد </h5>
                    <h1><?php echo $result_sales['total_sales'] - ($result_sales['total_sales'] - ($result_sales['total_sales'] / 100 )* 20) ?></h1>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card mb-4 p-5 text-center shadow-sm">
                    <h5>عدد المنتجات</h5>
                    <h1><?php echo $result_product ?></h1>
                    <div class="card-body">
                        <a href="products.php"><small class="card-text">عرض كل المنتجات</small></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4 p-5 text-center shadow-sm">
                    <h5>عدد الطلبات</h5>
                    <h1><?php echo $result_order ?></h1>
                    <div class="card-body">
                        <a href="orders.php"><small class="card-text">عرض كل الطلبات</small></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4 p-5 text-center shadow-sm">
                    <h5>عدد المستخدمين</h5>
                    <h1><?php echo $result_user ?></h1>
                    <div class="card-body">
                        <a href="users.php"><small class="card-text">عرض كل المستخدمين</small></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-4 p-5 text-center shadow-sm">
                    <h5>عدد الرسائل</h5>
                    <h1><?php echo $result_message ?></h1>
                    <div class="card-body">
                        <a href="messages.php"><small class="card-text">عرض كل الرسائل</small></a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
            <tr>
                <th scope="col">المنتج</th>
                <th scope="col">المالك</th>
                <th scope="col">المشتري</th>
                <th scope="col">حالة الطلب</th>
            </tr>
            </tr>
            </thead>
            <tbody>

                <tr >
                    <th scope="row"><?php echo $order['Product']?></th>
                    <th scope="row"><?php echo $order['Owner']?></th>
                    <th scope="row"><?php echo $order['Buyer']?></th>
                    <th scope="row">

                    </th>
                </tr>
              
            </tbody>
        </table>
    </div>


