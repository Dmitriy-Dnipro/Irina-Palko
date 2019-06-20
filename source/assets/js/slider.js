$('.courses').owlCarousel({
    loop:true,
    margin:0,
    dots: false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        1024:{
            items:2
        }
    }
});

$('.phrasesWrapper').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    animateOut: 'fadeOut',
    autoplayHoverPause:false,
    items:1
});

$('.feedback-big-wrapper').owlCarousel({
    loop:true,
    margin:0,
    dots: false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:3
        }
    }
});

$('.speakerProfileWrapper').owlCarousel({
    loop:true,
    margin:5,
    dots: false,
    nav:true,
    items:1
});

$('.breakfastData').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    responsive:{
        0:{
            items:1,
            margin:0
        },
        768:{
            items:2,
            margin:10
        }
    }
});

$('.posts-wrapper').owlCarousel({
    margin:0,
    dots: false,
    responsive:{
        0:{
            items:1,
            loop:true,
            nav:true
        },
        1230:{
            items:2,
            nav: false,
            loop:false
        }
    }
});

$('.owl-carousel-poster').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});

$('.owl-feedback').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    }
});

$('.loop').owlCarousel({
    //center: true,
    loop:true,
    margin:20,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }, 
        1279:{
            items:3
        },
        1439:{
            items:3
        },
        1919:{
            items:4
        }
    }
});

$('#hugeWrappper').owlCarousel({
    margin: 0,
    nav:true,
    responsive:{
        0:{
            items:1,
            loop: true
        },
        768:{
            items:1,
            loop: true
        },
        1024:{
            items:3,
            loop: false
        }
    }
});

var swiper = new Swiper('.clients-slider', {
    slidesPerView: 4,
    slidesPerColumn: 4,
    // spaceBetween: 10,
    spaceBetween: 45,
    //loop: true,
    autoplay: {
        delay: 2000,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
      breakpoints: {
        640: {
            slidesPerView: 3,
            slidesPerColumn: 3,
            spaceBetween: 25,
        },
        320: {
            slidesPerView: 3,
            slidesPerColumn: 3,
            spaceBetween: 25,
        }
    }
});

var swiper = new Swiper('.clients-slider-coach', {
    slidesPerView: 4,
    slidesPerColumn: 2,
    spaceBetween: 10,
    //spaceBetween: 45,
    //loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var swiper1 = new Swiper('.daysWrapper', {
    slidesPerView: 2,
    spaceBetween: 10,
    //spaceBetween: 45,
    //loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    arrows: true,
    //autoplay: true,
    //dots: true,
    centerMode: true,
    centerPadding: 0,
    vertical: true,
    verticalSwiping: true,
    focusOnSelect: true
});