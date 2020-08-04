$(document).ready(function () {
    // latest product slider
    $(".product_slider_one").owlCarousel({
        loop: true,
        dots: false,
        margin: 15,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 4
            }
        }
    });
    var owl = $('.product_slider_one');
    owl.owlCarousel();
    // Go to the previous item
    $(".latest_product_nav_prev").click(function () {
        owl.trigger('prev.owl.carousel', [800]);
    })
    // Go to the next item
    $(".latest_product_nav_next").click(function () {
        owl.trigger('next.owl.carousel', [800]);
    });

    // brand slider    
    $(".brand_slider_one").owlCarousel({
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 3,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 5
            }
        }
    });

    // ###### custom bootstrap carousel events
    $("#prev").on("click", function () {
        $('.carousel').carousel("prev")
    })
    $("#next").on("click", function () {
        $('.carousel').carousel("next")
    })

    // Product Image slider
    $(".image_slider").owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: false,
        autoplayTimeout: 10000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1
            }
        }
    });
    var imgSlider = $('.image_slider');
    imgSlider.owlCarousel();
    // Go to the main image item
    $("#main_item_img_nav").click(function () {
        imgSlider.trigger('prev.owl.carousel', [800]);
    })
    // Go to the alternative image item
    $("#alt_main_item_img_nav").click(function () {
        imgSlider.trigger('next.owl.carousel', [800]);
    });


    // Mobile view filter switch
    var toggledNavItems = document.querySelectorAll(".toggledNavItem")
    $("#filter_btn").click(function () {
        $.each(toggledNavItems, function (item) {
            if (toggledNavItems[item].classList.contains("d-none")) {
                toggledNavItems[item].classList.remove("d-none")
            }
            testFilterBtn(toggledNavItems[item])
            testSortBtn();
        })
        if (!sorting_comp_wrapper.classList.contains("d-none")) {
            sorting_comp_wrapper.classList.add("d-none")
        }
        $(".product_search_items").addClass("d-none")
        $(".search_item_title").addClass("d-none")
        $("#search_page_breadcrumb").addClass("d-none")
        $(".search_apply_ctrl_wrapper").removeClass("d-none")
        $(".search_apply_ctrl_wrapper").addClass("d-block")
        // 
        $("#sort_btn").removeClass("active")
        $(".pagination_wrapper").addClass("d-none");
    })
    // Mobile view sort switch
    var sorting_comp_wrapper = document.querySelector(".sorting_comp_wrapper")
    $("#sort_btn").click(function () {
        if (sorting_comp_wrapper.classList.contains("d-none")) {
            sorting_comp_wrapper.classList.remove("d-none")
            $(".product_search_items").addClass("d-none")
            $(".search_item_title").addClass("d-none")
            $("#search_page_breadcrumb").addClass("d-none")
            let search_apply_ctrl_wrapper = $(".search_apply_ctrl_wrapper")
            if (search_apply_ctrl_wrapper.hasClass("d-none")) {
                search_apply_ctrl_wrapper.removeClass("d-none")
                search_apply_ctrl_wrapper.addClass("d-block")
            } $.each(toggledNavItems, function (item) {
                if (!toggledNavItems[item].classList.contains("d-none")) {
                    toggledNavItems[item].classList.add("d-none")
                }
            })
            $("#filter_btn").removeClass("active")
            testSortBtn();
        }
        $(".pagination_wrapper").addClass("d-none");
    })

    $("#search_apply_ctrl").click(function () {
        if ($(".product_search_items").hasClass("d-none")) {
            $(".product_search_items").removeClass("d-none");
            testSortBtn();
            $(".pagination_wrapper").removeClass("d-none");
            $(".sorting_comp_wrapper").addClass("d-none");
        }
        // 
        $.each(toggledNavItems, function (item) {
            toggledNavItems[item].classList.add("d-none")
        })
        // 
    })

    var testSortBtn = function () {
        if (!sorting_comp_wrapper.classList.contains("d-none")) {
            $("#sort_btn").addClass("active")
        } else {
            $("#sort_btn").removeClass("active")
        }
    }
    var testFilterBtn = function (arg) {
        if (!arg.classList.contains("d-none")) {
            $("#filter_btn").addClass("active")
        } else {
            $("#filter_btn").removeClass("active")
        }
    }
});



// nav tabs dropdown links
class DropTabLink {
    constructor(name) {
        this.name = name
    }
    mouseOverDropdownClass() {
        if (this.name.classList.contains("category_dropdown_list")) {
            this.name.parentElement.firstChild.nextElementSibling.style.backgroundColor = "#fff"
            this.name.parentElement.firstChild.nextElementSibling.style.color = "#1f3200"
            return this.name.style.transform = "scaleY(1)"
        }
    }
    mouseOutDropdownClass() {
        if (this.name.classList.contains("category_dropdown_list")) {
            this.name.parentElement.firstChild.nextElementSibling.style.backgroundColor = "unset"
            this.name.parentElement.firstChild.nextElementSibling.style.color = "#fff"
            return this.name.style.transform = "scaleY(0)";
        }
        if (this.name.classList.contains("category_dropdown_list")) {
            return this.name.style.transformOrigin = "top";
        }

    }

}
// 
var categoryDropdown = document.querySelectorAll(".category_dropdown");
var categoryDropdownList = document.querySelector(".category_dropdown_list");
categoryDropdown.forEach(drop => {

    drop.addEventListener("mouseover", function () {
        for (let i = 0; i < drop.children.length; i++) {
            let newTest = new DropTabLink(drop.children[i])
            newTest.mouseOverDropdownClass()
        }

    })
    drop.addEventListener("mouseout", function () {
        for (let i = 0; i < drop.children.length; i++) {
            let newTest = new DropTabLink(drop.children[i])
            newTest.mouseOutDropdownClass()
        }

    })
})



// styling dropdown toggler
var custom_dropdown_toggle = document.querySelectorAll(".top_nav_dropdown");

custom_dropdown_toggle.forEach(dropdown => {
    dropdown.addEventListener("mouseover", () => {
        dropdown.firstElementChild.nextElementSibling.style.transform = "scaleY(1)"
        dropdown.firstElementChild.style.backgroundColor = "#1f3200"
        dropdown.firstElementChild.style.color = "#fff"
        dropdown.firstElementChild.classList.add("rmps")

    })
    dropdown.addEventListener("mouseout", () => {
        dropdown.firstElementChild.nextElementSibling.style.transform = "scaleY(0)"
        dropdown.firstElementChild.style.backgroundColor = "unset"
        dropdown.firstElementChild.style.color = "unset"
        dropdown.firstElementChild.classList.remove("rmps")

    })
})

// All Category dropdown
var category_dropdown_alt = document.querySelector(".category_dropdown_alt");
category_dropdown_alt.addEventListener("mouseover", () => {
    category_dropdown_alt.firstElementChild.nextElementSibling.style.transform = "scaleY(1)"
    category_dropdown_alt.firstElementChild.style.backgroundColor = "#fff"
    category_dropdown_alt.firstElementChild.style.color = "#1f3200"
})
category_dropdown_alt.addEventListener("mouseout", () => {
    category_dropdown_alt.firstElementChild.nextElementSibling.style.transform = "scaleY(0)"
    category_dropdown_alt.firstElementChild.style.backgroundColor = "unset"
    category_dropdown_alt.firstElementChild.style.color = "#fff"
})
