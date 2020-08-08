<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="cont_wrapper">
    <div class="container-fluid">

        <div class="row d-block d-md-none">
            <div class="col">
                <button class="bo_back_history border-0" onclick="goBack()">
                    <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
            </div>
            <div class="col">
                <h5 class="mt-2">Orders</h5>
            </div>
        </div>

        <div class="row mt-2 mt-md-5">
            <div class="col-12 col-md-3 d-none d-md-block">
                <!-- sidebar -->
                <div class="nav flex-column nav-pills bg-light">
                    <a class="account-tab-link text_capital" href="../views/user-profile.php">My Account</a>
                    <a class="account-tab-link text_capital active" href="../views/user-orders.php">Orders</a>
                    <a class="account-tab-link text_capital" href="../views/pending-review.php">Pending Reviews</a>
                    <a class="account-tab-link text_capital" href="../views/saved-items.php">Saved Items</a>
                </div>
            </div>

        <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0" id="user-orders-page">

            <div class="form-wrapper p-3 bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 col-md-2 d-none d-md-block"><h6>Order number</h6></div>
                        <div class="col-8 col-md-2 d-none d-md-block"><h6>Date</h6></div>
                        <div class="col-8 offset-4 offset-md-0 col-md-2 d-none d-md-block"><h6>Ship to</h6></div>
                        <div class="col-4 offset-4 offset-md-0 col-md-2 d-none d-md-block"><h6>Order total</h6></div>
                        <div class="col-4  col-md-2 d-none d-md-block"><h6>Status</h6></div>
                        <div class="col-12 col-md-2 d-none d-md-block"><h6>Details</h6></div>
                    </div>
                    <div class="row my-1 p-2 bg-light">
                        <div class="col-4 col-md-2">1</div>
                        <div class="col-8 col-md-2">09/11/2019</div>
                        <div class="col-8 offset-4 offset-md-0 col-md-2">Akinola Oluwaobi</div>
                        <div class="col-4 offset-4 offset-md-0 col-md-2">#4,000.00</div>
                        <div class="col-4  col-md-2 text-secondary">Processing</div>
                        <hr class="d-block d-md-none border-top">
                        <div class="col-12 col-md-2"><a class="btn-sm btn-block text-center light_grn_btn" href="./user-order-details.php">View</a></div>
                    </div>
                    <div class="row my-1 p-2 bg-light">
                        <div class="col-4 col-md-2">2</div>
                        <div class="col-8 col-md-2">09/08/2020</div>
                        <div class="col-8 offset-4 offset-md-0 col-md-2">Adejumo Daniel</div>
                        <div class="col-4 offset-4 offset-md-0 col-md-2">#2,300.00</div>
                        <div class="col-4  col-md-2 text-success">Delivered</div>
                        <hr class="d-block d-md-none border-top">
                        <div class="col-12 col-md-2"><a class="btn-sm btn-block text-center light_grn_btn" href="./user-order-details.php">View</a></div>
                    </div>
                </div>
            </div>

        </main>
        </div>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>