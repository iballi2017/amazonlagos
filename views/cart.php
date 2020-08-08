<!-- header -->
<?php include_once '../components/header.php'; ?>


<div class="container" id="cart_page_wrapper">
    <h5 class="py-2">Cart (1 Item)</h5>

    <div class="row bg-secondary p-2 text-white heading_label">
        <div class="col col-md-5 d-none d-md-block">
            Item
        </div>
        <div class="col col-md-2 d-none d-md-block">
            Quantity
        </div>
        <div class="col col-md-2 d-none d-md-block">
            Price
        </div>
        <div class="col col-md-2 d-none d-md-block">
            Action
        </div>
    </div>
<!-- Item 1 -->
    <div class="row bg-white p-2 mb-1">
        <div class="col-12 col-md-5">
            <div class="flex_align_center">

                <img src="../images/Nexus_1000VA_Digital_Stabilizer_With_AVR_Function.png" class="card-img mr-2"
                    alt="..." style="max-width: 100px;">
                <div>
                    <h6>Scanfrost 6.8kg Twin Tub Semi -Automatic Washing Machine...</h6>
                </div>
            </div>

        </div>
        <div class="col-4 col-md-2 item_qty_wrapper">

            <div>
                    <hsmall class="d-block d-md-none">Quantity</hsmall>
                <div class="inline_flex border">
                    <button class="bg-white border-right">-</button>
                    <div class="text-center">1</div>
                    <button class="bg-white border-left">+</button>
                </div>
            </div style="display: flex; align-items: center">
        </div>
        <div class="col-8 col-md-2">
            <div>₦ 71,000
            </div>
            <div class="initial_cal"><span>₦71,000</span>&nbsp;x&nbsp;<span>1</span>&nbsp;Item</div>
        </div>
        <div class="col-12 col-md-2">
            <div class="cart_btn_wrapper">
                <button class="cart_item_btn"><small>
                        <i class="fas fa-trash"></i>
                        Remove</small></button>
                <button class="cart_item_btn"><small>
                        <i class="fas fa-heart"></i>
                        Save Item</small></button>
            </div>
        </div>
    </div>
    <!-- Item 2 -->
    <div class="row bg-white p-2 mb-1">
        <div class="col-12 col-md-5">
            <div class="flex_align_center">

                <img src="../images/Nexus_1000VA_Digital_Stabilizer_With_AVR_Function.png" class="card-img mr-2"
                    alt="..." style="max-width: 100px;">
                <div>
                    <h6>Scanfrost 6.8kg Twin Tub Semi -Automatic Washing Machine...</h6>
                </div>
            </div>

        </div>
        <div class="col-4 col-md-2 item_qty_wrapper">

            <div>
                    <hsmall class="d-block d-md-none">Quantity</hsmall>
                <div class="inline_flex border">
                    <button class="bg-white border-right">-</button>
                    <div class="text-center">1</div>
                    <button class="bg-white border-left">+</button>
                </div>
            </div style="display: flex; align-items: center">
        </div>
        <div class="col-8 col-md-2">
            <div>₦ 71,000
            </div>
            <div class="initial_cal"><span>₦71,000</span>&nbsp;x&nbsp;<span>1</span>&nbsp;Item</div>
        </div>
        <div class="col-12 col-md-2">
            <div class="cart_btn_wrapper">
                <button class="cart_item_btn"><small>
                        <i class="fas fa-trash"></i>
                        Remove</small></button>
                <button class="cart_item_btn"><small>
                        <i class="fas fa-heart"></i>
                        Save Item</small></button>
            </div>
        </div>
    </div>


    <!-- Total Amount -->
    <div class="row">
        <div class="col">
            <div class="cart_summary_wrapper float_r mb-2">
                <label for="">TOTAL:&nbsp;</label>
                <span class="total_cost"><span>₦</span>&nbsp;<span>71,000</span></span>
                <div class="info">Without shipping fee</div>
            </div>
        </div>
    </div>

    <!-- Process buttons -->
    <div class="row">
        <div class="col">
            <div class="process_btn_wrapper">
                <a href="#" class="w_btn p-2 text-center process_btn continue_shopping_btn">CONTINUE SHOPPING</a>
                <a href="#" class="light_grn_btn p-2 text-center process_btn process_checkout_btn">PROCEED TO CHECKOUT</a>
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<?php include_once '../components/footer.php'; ?>