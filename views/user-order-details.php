<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="cont_wrapper" id="user_order_details">
    <div class="container-fluid">

        <div class="row d-block d-md-none">
            <div class="col">
                <button class="back_history border-0" onclick="goBack()">
                    <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
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

                <div class="bg-white">
                    <div class="border-bottom p-3">
                        <h4 class="m-0">Order details</h4>
                    </div>
                    <div class="order_summary border-bottom p-3">
                        <ul class="p-0">
                            <li><span>3</span>&nbsp;<span>Items</span></li>
                            <li><span>Placed on</span>&nbsp;<span>29-11-2020</span></li>
                            <li><span>Total:</span>&nbsp;&nbsp;<span>₦</span><span>210,550</span></li>
                        </ul>
                    </div>
                    <div class="p-3">
                        <div>
                            <h6>ITEMS IN YOUR ORDER</h6>
                        </div>
                        <div class="container-fluid p-0 border">
                            <div class="border-bottom p-2">
                                <b>Status : DELIVERED</b>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="card item_card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-4 img_container">
                                                <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                                    class="card-img" alt="item thumbnail">
                                            </div>
                                            <div class="col-8">
                                                <div class="card-body">
                                                    <h6 class="card-title m-0">Scanfrost 6.8kg Twin Tub Semi-Automatic
                                                        Washing
                                                        Machine - SFSANTTD6.</h6>
                                                    <p class="card-text m-0">
                                                        <ul class="p-0">
                                                            <li><span>Quantity:</span>&nbsp;<span>3</span></li>
                                                            <li><span>Price:</span>&nbsp;<span>₦</span><span>71,000</span></li>
                                                        </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card item_card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-4 img_container">
                                                <img src="../images/Nexus_1000VA_Digital_Stabilizer_With_AVR_Function.png"
                                                    class="card-img" alt="item thumbnail">
                                            </div>
                                            <div class="col-8">
                                                <div class="card-body">
                                                    <h6 class="card-title m-0">Scanfrost TELEVISION 32" INCHES SOUND BAR
                                                        SFLED32SB</h6>
                                                    <p class="card-text m-0">
                                                        <ul class="p-0">
                                                            <li><span>Quantity:</span>&nbsp;<span>3</span></li>
                                                            <li><span>Price:</span>&nbsp;<span>₦</span><span>71,000</span></li>
                                                        </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6 p-0">
                                    <div class="card payment_card mr-md-3 my-md-4">
                                        <div class="card-body">
                                            <h6>PAYMENT INFORMATION</h6>

                                            <dl>
                                                <dt>
                                                    Payment Method
                                                </dt>
                                                <dd>
                                                    Bank Transfer / Third-party payment interface
                                                </dd>
                                                <dt>
                                                    Payment Details
                                                </dt>
                                                <dd>
                                                    Items total: ₦ 4000
                                                </dd>
                                            </dl>

                                            <p>Shipping Fees:</p>

                                            <p>Total: ₦210,550</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 p-0">
                                    <div class="card delivery_card ml-md-3 my-md-4">
                                        <div class="card-body">
                                            <h6>DELIVERY INFORMATION</h6>

                                            <dl>
                                                <dt>
                                                    Delivery Method
                                                </dt>
                                                <dd>
                                                    Standard Door Delivery
                                                </dd>
                                                <dt>
                                                    Shipping Address
                                                </dt>
                                                <dd>
                                                    AKINOLA OLUWATOBI
                                                </dd>
                                            </dl>

                                            <p>6a kolawole Shonibare Street, Ilupeju, Lagos Nigeria.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>