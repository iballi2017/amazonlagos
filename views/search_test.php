<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="cont_wrapper"><ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li>Search Result</li>
</ul></div>
<div class="cont_wrapper">

    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12 col-md-3 filter_sidenav">
                <h6>Search Results - Washing Machine</h6>
                <section class="mr-1">
                    <div class="filt_title_cont">
                        <h6 class="m-0 text_upper">Category</h6>
                    </div>
                    <ul>
                        <li>
                            <h6 class="m-0">Household Appliances</h6>
                        </li>
                        <li>Washing machine </li>
                    </ul>
                </section>
                <section class="mr-1">
                    <form>
                        <div class="filt_title_cont">
                        <h6 class="m-0 text_upper">Brand</h6>
                                    </div>
                        <ul>
                            <li>
                                <input type="checkbox" name="Nexus" id="nexusCheckbox" class="check_rej">
                                <label for="nexusCheckbox">
                                <span class="custom_check"></span>    
                                Nexus</label>
                            </li>
                            <li>
                                <input type="checkbox" name="Scanfrost" id="scanfrostCheckbox" class="check_rej">
                                <label for="scanfrostCheckbox">
                                <span class="custom_check"></span> Scanfrost</label>
                            </li>
                        </ul>
                    </form>
                </section>
                <section class="mr-1">
                    <div class="filt_title_cont">
                    <h6 class="m-0 text_upper">Price</h6></div>
                    <ul>
                        <li class="container">
                            <form class="row" action="#">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                <input type="number" name="priceFrom" placeholder="From" id="priceFrom" style="width: 100%">
                                    </div>
                                    <div class="col-6">
                                <input type="number" name="priceTo" placeholder="To" id="priceTo" style="width: 100%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Apply</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </li>
                    </ul>
                </section>
                <section class="mr-1">
                <form>
                    <div class="filt_title_cont">
                    <h6 class="m-0 text_upper">Rating</h6>
                                </div>
                    <ul>
                        <li>
                            <input type="checkbox" name="five_stars" id="five_starsCheckbox" class="check_rej">
                            <label for="five_starsCheckbox">
                            <span class="custom_check"></span>    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </label>
                        <br/>
                            <input type="checkbox" name="four_stars" id="four_starsCheckbox" class="check_rej">
                            <label for="four_starsCheckbox">
                            <span class="custom_check"></span>    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <br/>
                        </label>
                        <br/>
                            <input type="checkbox" name="three_stars" id="three_starsCheckbox" class="check_rej">
                            <label for="three_starsCheckbox">
                            <span class="custom_check"></span>    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <br/>
                        </label>
                        <br/>
                            <input type="checkbox" name="two_stars" id="two_starsCheckbox" class="check_rej">
                            <label for="two_starsCheckbox">
                            <span class="custom_check"></span>    
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <br/>
                        </label>
                        <br/>
                            <input type="checkbox" name="one_stars" id="one_starsCheckbox" class="check_rej">
                            <label for="one_starsCheckbox">
                            <span class="custom_check"></span>    
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <br/>
                        </label>
                        </li>
                    </ul>
                </form>
                </section>
            </div>
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col">
                        <div style="display: flex; justify-content: flex-end">
                            <form action="#">
                                <label for="price_range">Sort By:</label>
                                <select name="price_range" id="price_range" style="padding: .5em">
                                    <option value="Price: Low to High">Price: Low to High</option>
                                    <option value="Price: High to Low">Price: High to Low</option>
                                    <option value="New Arrival">New Arrival</option>
                                </select>
                            </form>
                        </div>
                    </div>  
                </div>
                <div class="row no-gutters">
                    <div class="col-12 col-sm-4 col-md-3">
                        <div class="card product_card product_card_search_output shadow border-0 m-1">
                            <a href="#">
                                <div class="row no-gutters">
                                    <div class="col-6 col-sm-12">
                                        <form class="wish_form" style="display: flex; justify-content: flex-end; padding: .5em">
                                            <div>
                                                <input class="wish_toggler" type="hidden" name="wish" id="wish">
                                                <button class="" for="wish" id="wish_btn">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-6 col-sm-12">
                                        <div class="card-body">
                                            <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto Twin-Tub ...
                                            </h6>
                                            <p class="card-text prod_price">₦ 71,000
                                                <br/>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <small style="font-weight: 400">(No ratings yet)</small>
                                            </p>                                 
                                            <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-6 col-sm-4 col-md-3">
                        <div class="card product_card product_card_search_output shadow border-0 m-1">
                            <form class="wish_form" style="display: flex; justify-content: flex-end; padding: .5em">
                                <div>
                                    <input class="wish_toggler" type="hidden" name="wish" id="wish">
                                    <button class="active" for="wish" id="wish_btn">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </form>
                            <a href="#">
                                <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto Twin-Tub ...
                                    </h6>
                                    <p class="card-text prod_price">₦ 71,000
                                        <br/>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>                                 
                                    <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to cart</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card product_card product_card_search_output shadow border-0 m-1">
                            <form class="wish_form" style="display: flex; justify-content: flex-end; padding: .5em">
                                <div>
                                    <input class="wish_toggler" type="hidden" name="wish" id="wish">
                                    <button class="active" for="wish" id="wish_btn">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </form>
                            <a href="#">
                                <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto Twin-Tub ...
                                    </h6>
                                    <p class="card-text prod_price">₦ 71,000
                                        <br/>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>                                 
                                    <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to cart</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card product_card product_card_search_output shadow border-0 m-1">
                            <form class="wish_form" style="display: flex; justify-content: flex-end; padding: .5em">
                                <div>
                                    <input class="wish_toggler" type="hidden" name="wish" id="wish">
                                    <button class="active" for="wish" id="wish_btn">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </form>
                            <a href="#">
                                <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto Twin-Tub ...
                                    </h6>
                                    <p class="card-text prod_price">₦ 71,000
                                        <br/>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>                                 
                                    <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to cart</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3">
                        <div class="card product_card product_card_search_output shadow border-0 m-1">
                            <form class="wish_form" style="display: flex; justify-content: flex-end; padding: .5em">
                                <div>
                                    <input class="wish_toggler" type="hidden" name="wish" id="wish">
                                    <button class="" for="wish" id="wish_btn">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </form>
                            <a href="#">
                                <img src="../images/Nexus_NEXUS_ELECTRIC_OVEN_STAINLESS_STEEL_NX-936SS.png"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text_capital">Nexus 7KG Washing Machine Semi-Auto Twin-Tub ...
                                    </h6>
                                    <p class="card-text prod_price">₦ 71,000
                                        <br/>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </p>                                 
                                    <button class="btn-block text_upper mt-2 py-1 light_grn_btn">Add to cart</button>
                                </div>
                            </a>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                <div class="col">
                <div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<?php include_once '../components/footer.php'; ?>