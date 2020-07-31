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
        console.log("Previous")
    })
    $("#next").on("click", function () {
        $('.carousel').carousel("next")
        console.log("Next")
    })

    // wishlist active icon

});


// nav tabs dropdown links
class DropTabLink {
    constructor(name) {
        this.name = name
    }
    mouseOverDropdownClass() {
        if (this.name.classList.contains("category_dropdown_list")) {
            console.log(this.name.parentElement.firstChild.nextElementSibling)
            this.name.parentElement.firstChild.nextElementSibling.style.backgroundColor = "#fff"
            this.name.parentElement.firstChild.nextElementSibling.style.color = "#1f3200"
            return this.name.style.transform = "scaleY(1)"
        }
        if (this.name.classList.contains("category_dropdown_list")) {
            // return this.name.classList
            console.log(this.name.classList)
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
            console.log(drop.children[i].firstChild)
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
        console.log(dropdown.firstElementChild.nextElementSibling)
        dropdown.firstElementChild.nextElementSibling.style.transform = "scaleY(1)"
        dropdown.firstElementChild.style.backgroundColor = "#1f3200"
        dropdown.firstElementChild.style.color = "#fff"
        dropdown.firstElementChild.classList.add("rmps")

    })
    dropdown.addEventListener("mouseout", () => {
        console.log(dropdown.firstElementChild.nextElementSibling)
        dropdown.firstElementChild.nextElementSibling.style.transform = "scaleY(0)"
        dropdown.firstElementChild.style.backgroundColor = "unset"
        dropdown.firstElementChild.style.color = "unset"
        dropdown.firstElementChild.classList.remove("rmps")

    })
})

// All Category dropdown
var category_dropdown_alt = document.querySelector(".category_dropdown_alt");
category_dropdown_alt.addEventListener("mouseover", ()=>{
    category_dropdown_alt.firstElementChild.nextElementSibling.style.transform = "scaleY(1)"
    category_dropdown_alt.firstElementChild.style.backgroundColor = "#fff"
    category_dropdown_alt.firstElementChild.style.color = "#1f3200"
})
category_dropdown_alt.addEventListener("mouseout", ()=>{
    category_dropdown_alt.firstElementChild.nextElementSibling.style.transform = "scaleY(0)"
    category_dropdown_alt.firstElementChild.style.backgroundColor = "unset"
    category_dropdown_alt.firstElementChild.style.color = "#fff"
})
