$(document).ready(function () {

    $("h1, h2, h3, h4, h5, h6").addClass('font-head');
    $("p, a, button").addClass('font-body');

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



function openToggle() {
    const navs = document.querySelectorAll('.mobile-menu')
        
    navs.forEach(nav => nav.classList.toggle('navbar_toggleshow'));
}

document.querySelector('.open_link-toggle')
.addEventListener('click', openToggle);


$(window).scroll(function() {
    let sticky = $('.header');
    
      scroll = $(window).scrollTop();
        
    if (scroll >= 80) {sticky.addClass('sticky')}
    else {sticky.removeClass('sticky')}
});
