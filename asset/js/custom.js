$(document).ready(function () {

    /*----------------------------------------------------*/
    /*	Speakers Slick Carousel
    /*----------------------------------------------------*/
		
    $('#testimonial .center').slick({
        centerMode: true,
        arrows: false,
        autoplay: true,
        centerPadding: '0px',
        speed: 800,
        slidesToShow: 1,
        dots: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 800,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 648,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });
    
});

let dropdown = document.querySelectorAll("ul#menu-duromedia-1 > li a");
let open_menu = document.querySelector(".toggle-menu")
let mobile_menu = document.querySelector(".mobile-menu")
let close_menu = document.querySelector(".close-menu")



let i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  let dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
  }
  else {
        dropdownContent.style.display = "block";
  }
  });
}

open_menu.addEventListener("click", function() {
    if (mobile_menu.style.display === "none") {
        mobile_menu.style.display = "block";
    }
    else {
        mobile_menu.style.display = "none";
    }
});

close_menu.addEventListener("click", function() {
    if (mobile_menu.style.display === "block") {
        mobile_menu.style.display = "none";
    }
    else {
        mobile_menu.style.display = "block";
    }
});