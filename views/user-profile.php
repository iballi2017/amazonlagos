<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="cont_wrapper">
    <div class="container-fluid">

        <div class="row d-block d-md-none">
            <div class="col">
                <button class="bo_back_history border-0" onclick="goBack()">
                    <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
            </div>
        </div>

        <div class="row mt-2 mt-md-5">
            <div class="col-12 col-md-3 d-none d-md-block">
                <!-- sidebar -->
                <div class="nav flex-column nav-pills bg-light">
                    <a class="account-tab-link text_capital active" href="../views/user-profile.php">My Account</a>
                    <a class="account-tab-link text_capital" href="../views/user-orders.php">Orders</a>
                    <a class="account-tab-link text_capital" href="../views/pending-review.php">Pending Reviews</a>
                    <a class="account-tab-link text_capital" href="../views/saved-items.php">Saved Items</a>
                </div>
            </div>



            <main class="col-12 col-md-9 mb-3 mt-3 mt-md-0 p-0" id="user-profile-page">

                <form action="#">
                    <div class="form-wrapper bg-white">
                        <div class="border-bottom p-3">
                            <h4 class="m-0"> Account Overview</h4>
                        </div>
                        <!-- <form action="#"> -->
                        <div class="card-body border-bottom">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form_grp mb-3">
                                        <label class="text_capital d-block" for="fullName">Full Name</label>
                                        <input type="text" class="d-block w-100" name="fullName" id="fullName">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form_grp mb-3">
                                        <label class="text_capital d-block" for="email">Current Email</label>
                                        <input type="email" class="d-block w-100" name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form_grp mb-3">
                                        <label class="text_capital d-block" for="address">Address book</label>
                                        <input type="text" class="d-block w-100" name="address" id="address">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form_grp mb-3">
                                        <label class="text_capital d-block" for="phone">Mobile number</label>
                                        <input type="text" class="d-block w-100" name="phone" id="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form_grp mb-3">
                                        <label class="text_capital d-block" for="pwd">Old Password</label>
                                        <input type="password" class="d-block w-100" name="pwd" id="pwd">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form_grp mb-3">
                                        <label class="password_capital d-block" for="new_pwd">New Password</label>
                                        <input type="text" class="d-block w-100" name="new_pwd" id="new_pwd">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->

                    </div>
                    <div class="form_grp my-3">
                        <button class="py-2 light_grn_btn rounded px-4">UPDATE PROFILE</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>