<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="cont_wrapper">
    <div class="bg-white mt-5 pb-5 cstm_inner_wrapper">
        <div class="border-bottom p-3 text-center">
            <h6 class="m-0">Reset Password</h6>
        </div>
        <div class="py-4 px-2 acc_form_wrapper">
            <form action="#">
                <div class="form_grp mb-4">
                    <label class="text_capital d-block" for="email">New Password</label>
                    <input type="password" class="d-block w-100 py-2" name="password" id="password">
                </div>
                <div class="form_grp mb-4">
                    <label class="text_capital" for="confirm_password">Confirm Password</label>
                    <input type="password" class="d-block w-100 py-2" name="confirm_password" id="confirm_password">
                </div>
                <div class="form_grp mb-4">
                    <button class="btn-block py-2 light_grn_btn">Login</button>
                </div>
            </form>
        </div>

        <!-- displays when password is successfully saved -->
        <div class="text-center">
            <h5>PASSWORD SAVED</h5>
        </div>
    </div>

</div>

</div>
<!-- footer -->
<?php include_once '../components/footer_alt.php';
?>