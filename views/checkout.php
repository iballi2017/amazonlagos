<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="mt-5" id="checkout_page">
    <section class="inner_wrapper">

        <div class="title_wrapper p-3">
            <h4 class="text_upper m-0">Check out</h4>
        </div>
        <form action="#">
            <div class="bg-white mb-3">
                <fieldset class="">
                    <legend class="border-bottom text_upper p-3">1. Receiver’s Details</legend>

                    <!--  -->
                    <div class="p-3">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form_grp">
                                    <label class="text_capital d-block" for="fName">First Name</label>
                                    <input type="text" class="d-block w-100" name="fName" id="fName">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <div class="form_grp">
                                    <label class="text_capital d-block" for="lName">Last Name</label>
                                    <input type="text" class="d-block w-100" name="lName" id="lName">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-4">
                                <div class="form_grp">
                                    <label class="text_capital d-block" for="email">Email Address</label>
                                    <input type="text" class="d-block w-100" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-6 mb-4">
                                <div class="form_grp">
                                    <label class="text_capital d-block" for="phone">Phone number</label>
                                    <input type="text" class="d-block w-100" name="phone" id="phone">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-9 mb-4">
                                <div class="form_grp">
                                    <label class="text_capital d-block" for="streetAddress">Street Address</label>
                                    <input type="text" class="d-block w-100" name="streetAddress" id="streetAddress">
                                </div>
                            </div>
                            <div class="col-5 col-md-3 mb-4">
                                <div class="form_grp">
                                    <label class="text_capital d-block" for="state">State</label>
                                    <div class="select_drop_wrapper">
                                        <select name="state" id="state" class="w-100">
                                            <option value="stateA">State A</option>
                                            <option value="stateB">State B</option>
                                            <option value="stateC">State C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                </fieldset>
            </div>
            <div class="bg-white mb-3">
                <fieldset class="">
                    <legend class="border-bottom text_upper p-3">2. Payment Method</legend>

                    <!--  -->

                    <div class="row p-3">
                        <div class="col-12 col-md-6">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="payment_method"
                                    id="bank_transfer">
                                <label class="text_capital" for="bank_transfer">
                                    <span class="custom_radio"></span>
                                    <span>Bank Transfer</span>
                                </label>
                            </div>
                            <div class="hide" id="seller_account_details">
                                <ul>
                                    <li>
                                        <p>Bank Account name:<br />
                                            <span>#### #### #### ####</span>
                                        </p>
                                    </li>
                                    <li>
                                        <p>Bank Account Number:<br />
                                            <span>#### #### #### ####</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="payment_method"
                                    id="third_party">
                                <label class="text_capital" for="third_party">
                                    <span class="custom_radio"></span>
                                    <span>Third-party payment interface</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <!--  -->

                </fieldset>
            </div>
            <div class="bg-white mb-3" id="shipping_option_wrapper">
                <fieldset class="">
                    <legend class="border-bottom text_upper p-3">3. SHIPPING </legend>

                    <!--  -->

                    <div class="row p-3">
                        <div class="col-12">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_one">
                                <label class="text_capital" for="shipping_option_one">
                                    <span class="custom_radio"></span>
                                    <span>Lagos – Standard Delivery (1-7 working days, not including weekends or Public
                                        Holidays): ₦1,000</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_two">
                                <label class="text_capital" for="shipping_option_two">
                                    <span class="custom_radio"></span>
                                    <span>Lagos - Next Working Day Delivery – Island (Order before 5pm, not including
                                        weekends or Public Holidays): ₦2,000
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_three">
                                <label class="text_capital" for="shipping_option_three">
                                    <span class="custom_radio"></span>
                                    <span>Lagos – Next Working Day Delivery – Mainland (Order before 5pm, not including
                                        weekends or Public Holidays): ₦2,500 </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_four">
                                <label class="text_capital" for="shipping_option_four">
                                    <span class="custom_radio"></span>
                                    <span>Lagos – Saturday Delivery – Island (Order before 2pm on Friday): ₦2,500
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_five">
                                <label class="text_capital" for="shipping_option_five">
                                    <span class="custom_radio"></span>
                                    <span>Lagos – Same Day Delivery – Island (Order before 2pm, not including weekends
                                        or
                                        Public Holidays): ₦2,500</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_six">
                                <label class="text_capital" for="shipping_option_six">
                                    <span class="custom_radio"></span>
                                    <span>Lagos – Same Day Delivery – Mainland (Order before 12pm, not including
                                        weekends or
                                        Public Holidays): ₦3,000</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form_grp mb-3">
                                <input type="radio" class="radio_rej d-block w-100" name="shipping_option"
                                    id="shipping_option_seven">
                                <label class="text_capital" for="shipping_option_seven">
                                    <span class="custom_radio"></span>
                                    <span>Lagos – Saturday Delivery – Mainland (Order before 2pm on Friday):: ₦3,000
                                    </span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <!--  -->

                </fieldset>
            </div>


            <!-- Order Summary -->
            <div class="order_summary_section">
                <div class="title_wrapper p-3">
                    <h5 class="text_upper m-0">Order Summary</h5>
                </div>
                <div class="bg-white mb-3">
                    <div class="p-3 border-bottom">
                        <h6 class="m-0">
                            YOUR ORDER ( <span>1</span>&nbsp;<span>ITEM</span> )</h6>
                    </div>
                    <div class="p-3 border-bottom">
                        <ul class="p-0">
                            <li><span>1</span>&nbsp;<span>Items</span></li>
                            <li>
                                <div class="flex_just_spb">
                                    <div class="text_capital">Subtotal:</div>
                                    <div><strong><span>₦</span>&nbsp;<span>71,000</span></strong></div>
                                </div>
                            </li>
                            <li>
                                <div class="flex_just_spb">
                                    <div class="text_capital">Shipping</div>
                                    <div><strong>---</strong></div>
                                </div>
                            </li>
                            <li>
                                <div class="flex_just_spb">
                                    <div class="text_upper">vat</div>
                                    <div><strong>---</strong></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="p-3">
                        <ul class="p-0">
                            <li>
                                <div class="flex_just_spb">
                                    <div class="text_capital">Total to pay:</div>
                                    <div><strong><span>₦</span>&nbsp;<span>71,000</span></strong></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="form-group text-center" style="display: flex; justify-content: center; flex-wrap: wrap">
                <a href="#" class="modify_cart_btn px-5 white_btn btn-lg mr-md-2 my-1 text_upper">Modify Cart</a>
                <a href="#" class="confirm_cart_btn px-5 green_btn btn-lg my-1 text_upper">Confirm Order</a>
            </div>
        </form>
    </section>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>