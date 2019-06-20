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

// $('#fullVideo').click(function () {
//     $('.but').toggleClass('hidden');
//     var mediaVideo = $("#topVideo").get(0);
//     if (mediaVideo.paused) {
//         mediaVideo.play();
//     } else {
//         mediaVideo.pause();
//     }
// });

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

/*
*
* Страница о тренере, частичный показ для мобильных устройств
*/

$(window).load(function() {
    $firstHeight = $(".wrapper-coach").height();
    $value = $firstHeight * 0.33333;
    $(".wrapper-coach").height($value);
    $('#arrowHeight').click(function(){
        $value = $value + $firstHeight * 0.33333;
        if ($value > $firstHeight){
            $(".wrapper-coach").animate({height: $firstHeight}, 500);
        }
        else{
            $(".wrapper-coach").animate({height: $value}, 500);
        }
    });
    /* Консоль лог, чтобы понимать полную высота блока */
    //console.log($firstHeight);
});