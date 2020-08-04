<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-5 acc_form_wrapper">
                <div class="card-header bg-white">
                    <h5 class="text-center text_upper">Sign Up</h5>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-9">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="fullName">Full Name</label>
                                    <input type="text" class="d-block w-100" name="fullName" id="fullName">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="gender">Gender</label>
                                    <div class="select_drop_wrapper">
                                        <select class="width_full" name="gender" id="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="email">Email Address</label>
                                    <input type="email" class="d-block w-100" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="phone">Phone Number</label>
                                    <input type="text" class="d-block w-100" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="address">Address</label>
                                    <input type="text" class="d-block w-100" name="address" id="address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="town_city">Town/City</label>
                                    <div class="select_drop_wrapper">
                                        <select class="width_full" name="town_city" id="town_city">
                                            <option value="Town A">Town A</option>
                                            <option value="Town B">Town B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="state_city">State</label>
                                    <div class="select_drop_wrapper">
                                        <select class="width_full" name="state_city" id="state_city">
                                            <option value="State A">State A</option>
                                            <option value="State B">State B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="text_capital d-block" for="pwd">Password</label>
                                    <input type="password" class="d-block w-100" name="pwd" id="pwd">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form_grp mb-3">
                                    <label class="password_capital d-block" for="confirm_pwd">Confirm Password</label>
                                    <input type="text" class="d-block w-100" name="confirm_pwd" id="confirm_pwd">
                                </div>
                            </div>
                        </div>
                        <div class="form_grp mb-3">
                            <button class="btn-block py-2 light_grn_btn rounded">Register</button>
                        </div>
                    </form>

                    <div class="my-5">
                        <small class="d-block text-center mb-1">Already have account?</small>
                        <a href="./login.php"
                            class="d-block text-center border_lemon py-2 txt_lemon green_hover rounded">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once '../components/footer.php'; ?>