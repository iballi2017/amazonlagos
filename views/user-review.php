<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="container" id="user_review_page">

    <div class="row mt-2 mt-md-5">
        <div class="col-12 col-md-3 d-none d-md-block">
            <!-- sidebar -->
            <div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link text_capital" href="../views/user-profile.php">My Account</a>
                <a class="account-tab-link text_capital" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link text_capital active" href="../views/#.php">Pending Reviews</a>
                <a class="account-tab-link text_capital" href="../views/#.php">Saved Items</a>
            </div>
        </div>



        <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0 p-0" id="user-profile-page">

            <div class="bg-white">
                <div class="border-bottom p-3">
                    <h4 class="m-0">
                        <button class="back_history border-0" onclick="goBack()">
                            <i class="fas fa-long-arrow-alt-left"></i></button>
                        <span>Review product</span></h4>
                </div>

            </div>
            <div>
                <div class="bg-danger text-white p-3">
                    <aside>Help us get better by giving your feedback</aside>
                </div>
                <div class="border-bottom">
                    <div class="card border-0">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                    class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title">Scanfrost 6.8kg Twin Tub Semi-Automatic Washing Machine -
                                        SFSANTTD6.e</h6>
                                    <p class="card-text"><label for=""><strong>Qty:</strong>&nbsp;</label><span>1</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="bg-white p-3">

                        <fieldset class="container">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-row">
                                        <div class="col-12 mb-3">
                                            <label for="inputName">Name</label>
                                            <!-- <input type="text" class="form-control" id="inputName"> -->
                                            <input type="text" class="d-block w-100" name="fullName" id="fullName">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="rating" style="display: block">Rate</label>

                                            <!-- star rating -->
                                            <span class="star-rating">
                                                <i class="far fa-star text-warning review-star"></i>
                                                <i class="far fa-star text-warning review-star"></i>
                                                <i class="far fa-star text-warning review-star"></i>
                                                <i class="far fa-star text-warning review-star"></i>
                                                <i class="far fa-star text-warning review-star"></i>
                                            </span>
                                            <!-- star rating hidden input field-->
                                            <input type="text" id="rating_value" style="visibility: hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-row">
                                        <div class="col-12">
                                            <label for="inputName">Comment</label>
                                            <textarea type="text" rows="4" class="d-block w-100"
                                                id="inputName"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="p-3">
                    <div class="container p-3">
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="review-btn px-md-5 light_grn_btn btn-lg">Submit</button>
                            </div>
                        </div>
                    </div></div>
                </form>
            </div>
        </main>
    </div>


    
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>