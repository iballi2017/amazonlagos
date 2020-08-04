<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="cont_wrapper" id="reset_password">
    <div class="bg-white cstm_inner_wrapper mt-5 pb-5">
        <div class="border-bottom p-3 text-center">
            <h6 class="m-0">Forgot Password</h6>
        </div>
        <!-- displays if email is invalid -->
        <div class="my-4 py-3 text-center bg-danger text-white">
            <p class="m-0">Invalid email adress</p>
        </div>
        <!--  -->
        <div class="text-center py-4 px-2" style="display: grid; place-content: center">
            <p>Please enter the email address you registered with. We will send you a link</p>
            <form action="#">
                <div class="form_grp my-3">
                    <input class="py-2" type="text" plaaceholder="Enter email adress">
                    <button class="light_grn_btn py-2 px-3 rounded">Send Link</button>
                </div>
            </form>

            <!-- displays when email is sent -->
            <p class="my-4 txt_lemon">Please check your email</p>
            <!--  -->
        </div>

    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer_alt.php';
?>