<!-- header -->
<?php include_once '../components/header.php'; ?>

<div id="payment">
    <div class="banner py-3 mb-5">
        <p class="cont_wrapper">Kindly input your personal informations ( I.e your real name, and a valid email
            address). Make a deposit of (PRICE SELECTED).
            (NOTE : This fee is a deposit which shows your commitment for us to meet your needs by doing your personal
            shopping and delivering it to your doorstep. The deposit is refundable if not exhausted, and can be carried
            forward to cover your next shopping.)</p>
    </div>

    <section>

        <form action="#">

            <fieldset class="form_section_wrapper mb-3">
                <div class="border-bottom p-4">
                    <legend class="text_upper text-center m-0">Personal Details</legend>
                </div>
                <!--  -->
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <div class="form_grp">
                                <label class="text_capital d-block text_capital" for="fName">Full Name</label>
                                <input type="text" class="d-block w-100" name="fName" id="fName">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="form_grp">
                                <label class="text_capital d-block text_capital" for="email">Email Address</label>
                                <input type="text" class="d-block w-100" name="email" id="email">
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </fieldset>

            <fieldset class="form_section_wrapper mb-3">
                <div class="border-bottom p-4">
                    <legend class="text_upper text-center m-0">MAKE DEPOSIT</legend>
                </div>
                <!--  -->
                <div class="p-3">
                    <div class="row">
                        <div class="col text-center">
                            <div style="display: inline-flex">
                                <div class="form_grp mx-3">
                                    <input type="radio" class="radio_rej" name="make_deposit" id="payment_method_true">
                                    <label class="text_capital" for="payment_method_true">
                                        <span class="custom_radio"></span>
                                        <span>Yes</span>
                                    </label>
                                </div>
                                <div class="form_grp mx-3">
                                    <input type="radio" class="radio_rej" name="make_deposit" id="payment_method_false">
                                    <label class="text_capital" for="payment_method_false">
                                        <span class="custom_radio"></span>
                                        <span>No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </fieldset>

            <fieldset class="form_section_wrapper mb-3 hide" id="payment_method">
                <div class="border-bottom p-4">
                    <legend class="text_upper text-center m-0">SELECT PAYMENT METHOD</legend>
                </div>
                <!--  -->
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form_grp mx-3" style="z-index: 2000">
                                <input type="radio" class="radio_rej" name="payment_option" id="bank_transfer">
                                <label class="text_capital" for="bank_transfer">
                                    <span class="custom_radio"></span>
                                    <span>Bank Transfer</span>
                                </label>
                            </div>
                            <div class="p-3 mx-3 bg-white hide" id="seller_account_details">
                                <dl>
                                    <dt>Bank Account name:</dt>
                                    <dd>###### ######</dd>
                                    <dt>Bank Account Number:</dt>
                                    <dd>#### #### ####</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form_grp mx-3">
                                <input type="radio" class="radio_rej" name="payment_option" id="third_party">
                                <label class="text_capital" for="third_party">
                                    <span class="custom_radio"></span>
                                    <span>Third-party payment interface</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </fieldset>
            <div class="form_grp mb-3 text-center">
                <div class="control_btn_wrapper">
                    <button class="py-2 px-5 my-2 light_grn_btn rounded" onclick="goBack()">Back</button>
                    <button class="py-2 px-5 my-2 light_grn_btn rounded">Complete</button>
                </div>
            </div>
        </form>
    </section>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>