<!-- header -->
<?php include_once '../components/header.php'; ?>

<div id="user_monthly_shopping_list">


    <div class="container my-3 flex_just_spb">
        <div class="flex_align_center">
            <button class="bo_back_history border-0" onclick="goBack()">
                <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
            <h4 class="m-0 text_capital">Monthly</h3>
        </div>

        <div>
            2/3
        </div>
    </div>

    <section>


        <div class="list_wrapper">
            <div class="py-3 px-3">
                <div class="flex_align_center flex_just_spb">
                    <span>
                        <h5 class="m-0">List</h5>
                    </span>
                    <button class="text_capital w_btn border_lemon rounded py-2 px-3">
                        Add more
                    </button>
                </div>
            </div>
            <!--  -->
            <div class="accordion list_accordion" id="accordionExample">
                <form action="#">
                    <!-- item 1 -->
                    <div class="card mb-2 rounded-0">
                        <div class="card-header" id="headingOne">
                            <div class="mb-0 flex flex_just_spb">
                                <button class="" type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <i
                                        class="fas fa-chevron-down txt_lemon"></i>&nbsp;<span>#</span><span>1</span>&nbsp;<span>List</span>
                                </button>
                                <button>
                                    <i class="fas fa-times-circle text-danger"></i>
                                </button>
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <!-- form input area -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form_grp mb-3">
                                            <label class="text_capital d-block" for="product_name">Product
                                                name</label>
                                            <input type="text" class="d-block w-100" name="product_name"
                                                id="product_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form_grp mb-3">
                                            <label class="text_capital d-block" for="producer">Producer/Author</label>
                                            <input type="text" class="d-block w-100" name="producer" id="producer">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form_grp mb-3">
                                            <label class="text_capital d-block" for="qty">Quantity</label>
                                            <input type="text" class="d-block w-100" name="qty" id="qty">
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="card mb-2 rounded-0">
                        <div class="card-header" id="headingTwo">
                            <div class="mb-0 flex flex_just_spb">
                                <button class="" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="true" aria-controls="collapseTwo">
                                    <i
                                        class="fas fa-chevron-down txt_lemon"></i>&nbsp;<span>#</span><span>2</span>&nbsp;<span>List</span>
                                </button>
                                <button>
                                    <i class="fas fa-times-circle text-danger"></i>
                                </button>
                            </div>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <!-- form input area -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form_grp mb-3">
                                            <label class="text_capital d-block" for="product_name">Product
                                                name</label>
                                            <input type="text" class="d-block w-100" name="product_name"
                                                id="product_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form_grp mb-3">
                                            <label class="text_capital d-block" for="producer">Producer/Author</label>
                                            <input type="text" class="d-block w-100" name="producer" id="producer">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form_grp mb-3">
                                            <label class="text_capital d-block" for="qty">Quantity</label>
                                            <input type="text" class="d-block w-100" name="qty" id="qty">
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <div class="form_grp mb-3 text-center">
                        <button class="py-2 px-5 my-2 light_grn_btn rounded">Next</button>
                    </div>
                </form>
            </div>
            <!--  -->
        </div>
    </section>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>