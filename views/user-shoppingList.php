<!-- header -->
<?php include_once '../components/header.php'; ?>

<div id="user_shopping_list">


    <div class="container my-3 d-none d-md-block">
        <h4 class="m-0 text_capital">Shopping list</h3>
    </div>

    <div class="container my-3 d-block d-md-none">
        <button class="bo_back_history border-0" onclick="goBack()">
            <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
        <span class="">Order</span>
    </div>

    <section>

        <div class="text-center mb-5 py-3 page_banner">
            Create a shopping list of any item you want and have it delivered to your doorstep. Save time and money with
            our
            unique online shopping list feature.
        </div>

        <div class="container shopping-list-option-wrapper">
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <div class="card w-80 weekly_card">
                        <h5 class="card-header text_upper">Weeky</h5>
                        <div class="card-body">
                            <ul class="text-left">
                                <li>
                                    Make a list of 1-15 products
                                </li>
                                <li>
                                    Home delivery
                                </li>
                                <li>
                                    Affordable price for the products and delivery
                                </li>
                            </ul>
                            <a href="./user-weekly-shoppingList.php" class="btn light_grn_btn btn-block">Request</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <div class="card w-80 monthly_card">
                        <h5 class="card-header text_upper">Monthly</h5>
                        <div class="card-body">
                            <ul class="text-left">
                                <li>
                                    Make a list of 1- 50 products
                                </li>
                                <li>
                                    Home delivery
                                </li>
                                <li>
                                    Affordable price for the products and delivery
                                </li>
                            </ul>
                            <a href="./user-monthly-shoppingList.php" class="btn light_grn_btn btn-block">Request</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>