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



            <!-- <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0 p-0" id="user-orders-page">

                <div class="form-wrapper bg-white">
                    <div class="card container-fluid mb-3 border-0">
                        <div class=" row no-gutters">
                            <div class="col-4 col-md-3 img_wrapper">
                                <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                    class="card-img" alt="...">
                            </div>
                            <div class="col-8 col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Scanfrost 6.8kg Twin Tub Semi-Automatic Washing Machine -
                                        SFSANTTD6.</h6>
                                    <p class="card-text">
                                        <span class="txt_bold">
                                            <span>₦</span>
                                            <span>1,234</span>
                                        </span>
                                        <br />
                                        <span>27/08/2020</span>
                                        &nbsp;
                                        <span>Delivered</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <a href="#" class="text-center py-2 w-100 light_grn_btn rounded px-3 my-3"
                                    style="display: block; ">View
                                    details</a>
                            </div>
                        </div>
                    </div>

                </div>
            </main> -->

            

        <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0" id="user-orders-page">

            <div class="p-3 bg-white">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Order Number</th>
                                <th scope="col">Date</th>
                                <th scope="col">Ship To</th>
                                <th scope="col">Order Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>09/11/2019</td>
                                <td>Akinola Oluwaobi</td>
                                <td>#4,000.00</td>
                                <td class="text-secondary">Processing</td>
                                <td><a class="btn-sm light_grn_btn" href="./user-order-details.php">View</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>20/01/2020</td>
                                <td>Olayemi Joshua</td>
                                <td>#5300.99</td>
                                <td class="text-success">Delivered</td>
                                <td><a class="btn-sm light_grn_btn" href="./user-order-details.php">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
        </div>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>