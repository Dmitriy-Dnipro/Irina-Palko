function scrollNav() {
    $('.downArrow').click(function(){  
      //Animate
      $('html, body').stop().animate({
          scrollTop: $( $(this).attr('href') ).offset().top - 0
      }, 500);
      return false;
    });
    $('.downArrow').scrollTop();
}
scrollNav();

function scrollNav1() {
    $('.tab-content-bottom button.common-button-styles').click(function(){  
      //Animate
      $('html, body').stop().animate({
          scrollTop: $( $(this).attr('href') ).offset().top - 0
      }, 500);
      return false;
    });
    $('.downArrow').scrollTop();
}
scrollNav1();

$('#playButton').click(function () {
    $('.but').toggleClass('hidden');
    var mediaVideo = $("#bottomVideo").get(0);
    if (mediaVideo.paused) {
        mediaVideo.play();
    } else {
        mediaVideo.pause();
    }
});

$('.share-button').click(function () {
    $('.social-bar').toggleClass('make-visisble');
});

$('.big-wrapper .block-wrapped').click(function () {
    $('.block-wrapped.active').toggleClass('active') && $(this).toggleClass('active');
});

$('.menuIcon').click(function () {
    $('#mobile-menu').toggleClass('make-visible') && $('body').addClass('disableBodyScroll');
});

$('.close-button-menu').click(function () {
    $('#mobile-menu').toggleClass('make-visible') && $('body').removeClass('disableBodyScroll');
});

$(window).load(function(){
    var win = $(this); //this = window
    console.log(win.width);
    if (win.width() <= 768) { 
        $('#mobile-menu #primary-menu .menu-item-259 a').first().removeAttr('href');
    }
});

$('#mobile-menu .menu-item-has-children').first().click(function () {
    $('#mobile-menu .menu-item-has-children .sub-menu').toggleClass('show-sub-menu') && $(this).toggleClass('arrowRotation');
});

$("#topVideo").prop('muted', true);
$("#video").prop('muted', true);

$("#fullVideo").click( function (){
    $('.but').toggleClass('hidden');
    if( $("#topVideo").prop('muted') )
    {
        $("#topVideo").prop('muted', false);
    }

    else {
    $("#topVideo").prop('muted', true);
    }

});

$("#sound-button").click( function (){
    $(this).toggleClass('sound-mute');
    //$('.but').toggleClass('hidden');
    if( $("#video").prop('muted') )
    {
        $("#video").prop('muted', false);
    }

    else {
        $("#video").prop('muted', true);
    }

});

/*
* show / hide elements
*/

$(document).ready(function() {

    if ($(window).width() < 768) {
        var elements = $('.wrap-item');
        elements.hide();
        elements.first().show();

        $('#arrowHeight').click(function() {
            if($(".wrap-item:hidden").length > 1) {
                $(".wrap-item:hidden:first").slideToggle('Fast');
            } else if($(".wrap-item:hidden").length == 1) {
                $(".wrap-item:hidden:first").slideToggle('Fast');
                $('#arrowHeight svg').css('transform', 'rotate(0deg)');
            } else if($(".wrap-item:hidden").length == 0){
                elements.hide();
                $('#arrowHeight svg').css('transform', 'rotate(180deg)');
                elements.first().show(500);
            }
        });
    }

});


$(document).ready(function() {
    $(".effect").lettering();
});

$(document).ready(function() {
    $(".card-body .date").lettering();
});

$(document).ready(function() {
    $(".textBlockLeft .date").lettering();
});

$(document).ready(function() {
    $(".blueCircle p").lettering();
});

// /*
// * show / hide elements
// */

// $(document).ready(function() {

//     //var elements = document.getElementsByClassName('wrap-item');
//     var elements = $('.wrap-item');
//     console.log(elements);
//     // var $div = $('.wrap-item').hide();
//     // console.log($div);
//     // // show the first div initially
//     // $div.first().show();

    
// });

/*
*
* Страница о тренере, частичный показ для мобильных устройств
*/

// $(window).load(function() {
//     $firstHeight = $(".wrapper-coach").height();
//     $nullValue = $firstHeight * 0.4;
//     console.log($nullValue );
//     $value = $firstHeight * 0.3333;
//     $(".wrapper-coach").height($value);

//     $('.arrowGoBottom').click(function(){
//         $value = $value + $firstHeight * 0.333wrapper-coach3;
//         if ($value > $firstHeight){
//             $(".wrapper-coach").animate({height: $firstHeight}, 500);
//             $(this).css("transform", "rotate(180deg)");

//             // $(this).click(function() {
//             //     $('.arrowBack').css("transform", "rotate(180deg)");
//             //     $(".wrapper-coach").removeAttr("style"); 
//             //     $(".wrapper-coach").css('height', $nullValue );
//             // })

//             //$(this).removeClass('arrowGoBottom');
//             //$(this).addClass('arrowBack');
//         }
//         else{
//             $(".wrapper-coach").animate({height: $value}, 500);
//             $(this).removeClass('arrowBack');
//             $(this).addClass('arrowGoBottom');
//         }
//     });

//     // $('.arrowBack').click(function() {
//     //     $('.arrowBack').css("transform", "rotate(180deg)");
//     //     //$(".wrapper-coach").css('height', '530px' );
//     // })
//     /* Консоль лог, чтобы понимать полную высота блока */
//     //console.log($firstHeight);
// });