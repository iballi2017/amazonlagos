<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon | </title>
    <!-- Bootstrap 4.3.x -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome 5.13.x -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <!-- Owl carousel stylesheet -->
    <link rel="stylesheet" href="../plugins/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../plugins/owl_carousel/owl.theme.default.min.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <!-- header -->
    <!-- a. large screen header -->
    <nav class="main_nav_lg bg-white sticky-top d-none d-md-block py-2">
        <div class="cont_wrapper main_nav_inner">
            <div class="fl_itm_1">
                <!-- <a class="navbar-brand" href="#">AmazonLagos</a> -->
                <a href="../index.html" class="navbar-brand">
                    <img src="../images/amazon_brand_logo.png" alt="AmazonLagos"></a>
                <nav class="nav">
                    <li class="nav-item dropdown top_nav_dropdown">
                        <a class="nav-link custom_dropdown_toggle pseudo_after" href="#" id="navbarDropdown"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            Help
                        </a>
                        <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                            <ul class="category_list_lg_scrn">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <a class="nav-link txt_green" href="#">Shopping List</a>
                </nav>
            </div>
            <div class="fl_itm_2">
                <form class="search_form_lg-scrn d-flex" action="#">
                    <input class="mr-2 rounded-left py-2 px-1" type="text" placeholder="SEARCH" name="searchItem"
                        style="width: 85%">
                    <button class="px-3 rounded-right text_upper y_btn">Search</button>
                </form>
            </div>
            <div class="fl_itm_3">
                <!-- <form class="search_form_lg-scrn" action="#" style="display: flex">
                    <input class="mr-2 rounded-left py-0" type="text" placeholder="SEARCH" name="searchItem">
                    <button class="px-3 rounded-right text_upper y_btn">Search</button>
                </form> -->
                <ul class="nav justify-content-end">
                    <li class="nav-item dropdown top_nav_dropdown">
                        <a class="nav-link custom_dropdown_toggle pseudo_after" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu px-3 border-0" aria-labelledby="navbarDropdown">
                            <ul class="category_list_lg_scrn">
                                <li class="text-center rounded p-0">
                                    <a href="../views/login.php">Login</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li class="text-center rounded p-0">
                                    <a href="../views/register.php">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link txt_green" href="#">
                            <i class="fas fa-shopping-bag shopping_cart_icon">
                                <span class="badge badge-primary" id="cart_count">0</span>
                            </i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main_nav_cateory_wrapper d-none d-md-block">
        <div class="cont_wrapper">
            <ul class="nav flex_just_spb width_full">
                <li class="nav-item dropdown category_dropdown_alt">
                    <a class="nav-link category_dropdown_toggle pseudo_after category_title pl-0" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        All Categories
                    </a>
                    <div class="dropdown-menu border-0 p-0" aria-labelledby="navbarDropdown">
                        <ul class="category_list_lg_scrn">
                            <li>
                                <a href="#">Entertainment</a>
                            </li>
                            <li>
                                <a href="#">Household/Appliances</a>
                            </li>
                            <li>
                                <a href="#">Cooling</a>
                            </li>
                            <li>
                                <a href="#">Kitchen appliances</a>
                            </li>
                            <li>
                                <a href="#">Power</a>
                            </li>
                            <li>
                                <a href="#">Groceries</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item category_dropdown">
                    <a class="nav-link category_title" href="#">Entertainment</a>
                    <div class="category_dropdown_list absolute_position" style="width: 60%; left: 20%">
                        <ul class="mx-2 my-3">
                            <li>
                                <a href="#">Television</a>
                            </li>
                            <li>
                                <a href="#">
                                    Home theater</a>
                            </li>
                            <li>
                                <a href="#"> Sound bar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item category_dropdown">
                    <a class="nav-link category_title" href="#">Household/Appliances</a>
                    <div class="category_dropdown_list absolute_position" style="width: 60%; left: 20%">
                        <ul class="mx-2 my-3">
                            <li>
                                <a href="#">Washing machine </a>
                            </li>
                            <li>
                                <a href="#">
                                    Refrigerators</a>
                            </li>
                            <li>
                                <a href="#"> Freezers</a>
                            </li>
                            <li>
                                <a href="#">Water dispensers</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item category_dropdown">
                    <a class="nav-link category_title" href="#">Cooling</a>
                    <div class="category_dropdown_list absolute_position" style="width: 60%; left: 20%">
                        <ul class="mx-2 my-3">
                            <li>
                                <a href="#">Air conditioners - split unit, floor standing AC </a>
                            </li>
                            <li>
                                <a href="#">
                                    Refrigerators</a>
                            </li>
                            <li>
                                <a href="#"> Cassette air conditioner</a>
                            </li>
                            <li>
                                <a href="#">Air coolers</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item category_dropdown">
                    <a class="nav-link category_title" href="#">Kitchen appliances</a>
                    <div class="category_dropdown_list absolute_position" style="width: 60%; left: 20%">
                        <ul class="mx-2 my-3 row">
                            <li class="col-4">
                                <a href="#">Electric jugs </a>
                            </li>
                            <li class="col-4">
                                <a href="#">
                                    Electric oven</a>
                            </li>
                            <li class="col-4">
                                <a href="#"> Gas stoves</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Hot plates</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Microwaves</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Pressure cookers</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Rice cookers</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Sandwich makers</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Blender </a>
                            </li>
                            <li class="col-4">
                                <a href="#">
                                    Mixers</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Juice extractor</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Pressing iron</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Electric kettle</a>
                            </li>
                            <li class="col-4">
                                <a href="#"> Deep fryer</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Coffee maker</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Toasters</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Gas cooker </a>
                            </li>
                            <li class="col-4">
                                <a href="#">
                                    Built in oven</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Built in Hob</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Built in chimney</a>
                            </li>
                            <li class="col-4">
                                <a href="#">Table top cooker</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item category_dropdown">
                    <a class="nav-link category_title" href="#">Power</a>
                    <div class="category_dropdown_list absolute_position" style="width: 40%; left: 50%">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <ul class="mx-2 my-3">
                                        <li>
                                            <a href="#">Stabilizers </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Generator set</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item category_dropdown">
                    <a class="nav-link category_title" href="#">Groceries</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ##### -->
    <!--  -->
    <!-- b. small screen header -->
    <nav class="cust_nav navbar-expand-lg navbar-light p-0 sticky-top d-block d-md-none">
        <div class="bg-white">
            <div class="cont_wrapper flex_just_spb right_0 left_0 align_center">
                <span>
                    <!-- Brand-logo -->
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="../index.html">
                        <img src="../images/amazon_brand_logo.png" alt="AmazonLagos">
                    </a></span>
                <span>
                    <!-- <i class="fas fa-shopping-cart"> -->
                    <i class="fas fa-shopping-bag shopping_cart_icon">
                        <span class="badge" id="cart_count">0</span>
                    </i>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-0">
                <li class="nav-item bg-white py-4 my-2 inline_flex">
                    <div class="text-center margin-auto-0">
                        <a class="access_btn py-2 px-5 white_btn mr-2" href="../views/login-page.php">Login</a>
                        <a class="access_btn py-2 px-5 white_btn" href="../views/register-page.php">Sign Up</a></div>
                </li>
            </ul>
            <h6 class="container bg-white py-3 text_capital">All Categories</h6>
            <div class="bg-white">
                <div class="container">
                    <div class="accordion" id="accordionExample">
                        <div class="card border-0">
                            <button class="btn btn-link cust_nav_link_dropdown px-0" type="button"
                                data-toggle="collapse" data-target="#entertainment" aria-expanded="true"
                                aria-controls="entertainment" id="entertainmentHeading">
                                <span>Entertainment</span>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </button>

                            <div id="entertainment" class="collapse" aria-labelledby="entertainmentHeading"
                                data-parent="#accordionExample">
                                <div class="card-body py-0">
                                    <ul class="navbar-nav category_list_wrapper mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link text_capital" href="#">Television</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Home Theatre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Sound Bar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <div class="card border-0">
                            <button class="btn btn-link cust_nav_link_dropdown px-0" type="button"
                                data-toggle="collapse" data-target="#householdAppliances" aria-expanded="true"
                                aria-controls="householdAppliances" id="householdAppliancesHeading">
                                <span>Household/Appliances</span>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </button>

                            <div id="householdAppliances" class="collapse" aria-labelledby="householdAppliancesHeading"
                                data-parent="#accordionExample">
                                <div class="card-body py-0">
                                    <ul class="navbar-nav category_list_wrapper mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link text_capital" href="#">Washing machine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Refrigerators </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Freezers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Water dispensers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <div class="card border-0">
                            <button class="btn btn-link cust_nav_link_dropdown px-0" type="button"
                                data-toggle="collapse" data-target="#cooling" aria-expanded="true"
                                aria-controls="cooling" id="coolingHeading">
                                <span>Cooling</span>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </button>

                            <div id="cooling" class="collapse" aria-labelledby="coolingHeading"
                                data-parent="#accordionExample">
                                <div class="card-body py-0">
                                    <ul class="navbar-nav category_list_wrapper mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link text_capital" href="#">Air conditioners - split unit,
                                                floor
                                                standing AC</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Industrial fan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Cassette air conditioner</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Air coolers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <div class="card border-0">
                            <button class="btn btn-link cust_nav_link_dropdown px-0" type="button"
                                data-toggle="collapse" data-target="#kitchenAppliances" aria-expanded="true"
                                aria-controls="kitchenAppliances" id="kitchenAppliancesHeading">
                                <span>Kitchen appliances</span>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </button>
                            <div id="kitchenAppliances" class="collapse" aria-labelledby="kitchenAppliancesHeading"
                                data-parent="#accordionExample">
                                <div class="card-body py-0">
                                    <div class="container-fluid">
                                        <ul class="sm-navbar-nav category_list_wrapper mr-auto row p-0">
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#"> Electric jugs
                                                </a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Electric oven</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Gas stoves</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#"> Hot plates </a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Microwaves</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Pressure
                                                    cookers</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Rice cookers</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Sandwich
                                                    makers</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#"> Blender </a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Mixers</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Juice
                                                    extractor</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#"> Pressing iron
                                                </a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Electric
                                                    kettle</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Deep fryer</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Coffee maker</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Toasters</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#"> Gas cooker </a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Built in oven</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Built in Hob</a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#"> Built in chimney
                                                </a>
                                            </li>
                                            <li class="nav-item p-0 col-6">
                                                <a class="nav-link text_capital" href="#">Table top
                                                    cooker</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <div class="card border-0">
                            <button class="btn btn-link cust_nav_link_dropdown px-0" type="button"
                                data-toggle="collapse" data-target="#power" aria-expanded="true" aria-controls="power"
                                id="powerHeading">
                                <span>Power</span>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </button>

                            <div id="power" class="collapse" aria-labelledby="powerHeading"
                                data-parent="#accordionExample">
                                <div class="card-body py-0">
                                    <ul class="navbar-nav category_list_wrapper mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link text_capital" href="#">Stabilizers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Generator set</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- break -->
                        <div class="card border-0">
                            <button class="btn btn-link cust_nav_link_dropdown px-0" type="button"
                                data-toggle="collapse" data-target="#groceries" aria-expanded="true"
                                aria-controls="groceries" id="groceriesHeading">
                                <span>Groceries</span>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </button>

                            <div id="groceries" class="collapse" aria-labelledby="groceriesHeading"
                                data-parent="#accordionExample">
                                <div class="card-body py-0">
                                    <ul class="navbar-nav category_list_wrapper mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link text_capital" href="#">A</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">B</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">C</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mt-3" id="accordionExample2">
                        <div class="card border-0">
                            <button class="btn btn-link cust_nav_link_dropdown px-0" type="button"
                                data-toggle="collapse" data-target="#faq" aria-expanded="true" aria-controls="faq"
                                id="faqHeading">
                                <span>FAQ</span>
                                <span>
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </button>

                            <div id="faq" class="collapse" aria-labelledby="faqHeading"
                                data-parent="#accordionExample2">
                                <div class="card-body py-0">
                                    <ul class="navbar-nav category_list_wrapper mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link text_capital" href="#">Telivision</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Home Theatre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text_capital" href="#">Sound Bar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="py-2 search_input_wrapper d-block d-md-none">
        <div class="cont_wrapper">
            <div class="input-group border search_input_grp">
                <input type="text" class="form-control border-0" placeholder="SEARCH" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="border-0 bg-white rounded-right pr-3" type="button" id="button-addon2">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div><!-- /header -->

    <main>