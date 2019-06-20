$(document).ready(function(){
	
	$('div.blockWrapper div.block').hover(function(){
		var tab_id = $(this).attr('data-tab');

		$('div.blockWrapper div.block').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
    });
    
    $(function () {
		initHoverBoxes();
	});

	function initHoverBoxes() {
		var $column = $('.column');
		
		$column.mouseenter(function() {
			$column.removeClass('wide');
			$column.css('width', '22.5%');
			$(this).addClass('wide');
		});
		
		$column.mouseleave(function() {
			$column.css('width', '33.3333333333333333%');
			$column.removeClass('wide');
		});
	}

})

$(document).ready(function(){
	
	$('div.blockWrapperBottom div.block').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('div.blockWrapperBottom div.block').removeClass('current');
		$('.tab-content-bottom').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})

$(document).ready(function() {
    $number = $(".projects-filter li").length;
    $width = $(".projects-filter").width() / $number;
    $(".projects-filter li").width($width);
});

$(function () {
    $(".speakerWrapperBig").slice(0, 6).show();
    $("#showMoreSpeakers").on('click', function (e) {
        e.preventDefault();
        $(".speakerWrapperBig:hidden").slice(0, 6).slideDown();
        $('.speakerWrapperBig .descriptionWrapper').readmore({
            speed: 150,
            collapsedHeight: 57,
            moreLink: '<a href="#"><img class="clicked" src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/morning/arrowBottom.svg"></a>',
            lessLink: '<a href="#"><img class="clicked" src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/morning/topArrow.svg"></a>',
        });
        if ($(".speakerWrapperBig:hidden").length == 0) {
            $("#showMoreSpeakers").hide();
        }
    });
    if ($(".speakerWrapperBig:hidden").length == 0) {
        $("#showMoreSpeakers").hide();
    }
});

$(function () {
    $(".trigger-height").slice(0, 3).show();
    $("#show-more-triggered").on('click', function (e) {
        e.preventDefault();
        $(".trigger-height:hidden").slice(0, 3).slideDown();
        if ($(".trigger-height:hidden").length == 0) {
            $("#show-more-triggered").hide();
        }
    });
    if ($(".trigger-height:hidden").length == 0) {
        $("#show-more-triggered").hide();
    }
});

$(function() {
    var selectedClass = "";
        $("span.pr-tabs").click(function() {
            $('span.pr-tabs.active-pr-tab').removeClass('active-pr-tab');
            $(this).addClass("active-pr-tab");
            selectedClass = $(this).attr("data-rel");
            $("#projects").fadeTo(350, 0);
            $("#projects div.all").not("." + selectedClass).fadeOut();
            setTimeout(function() {
            $("." + selectedClass).fadeIn();
            $("#projects").fadeTo(750, 1);
        }, 1000);
    });
});

$('.search-icon').click(function () {
    $('.input-position').toggleClass('hide');
});

$('#goTop').on('click', function(e){
    $("html, body").animate({scrollTop: $("#top").offset().top}, 500);
    return false;
});

$(function () {
    $(".global-course-wrapper").slice(0, 1).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".global-course-wrapper:hidden").slice(0, 1).slideDown();
        if ($(".global-course-wrapper:hidden").length == 0) {
            $("#loadMore").hide();
        }
    });
});

$(function () {
    $(".card").slice(0, 6).show();
    $("#loadMorePosters").on('click', function (e) {
        e.preventDefault();
        $(".card:hidden").slice(0, 6).slideDown();
        if ($(".card:hidden").length == 0) {
            $("#loadMorePosters").hide();
        }
    });
    if ($(".card:hidden").length == 0) {
        $("#loadMorePosters").hide();
    }
});

$(function () {
    $(".photo-preview").slice(0, 20).show();
    $("#showMorePhotos").on('click', function (e) {
        e.preventDefault();
        $(".photo-preview:hidden").slice(0, 20).slideDown();
        if ($(".photo-preview:hidden").length == 0) {
            $("#showMorePhotos").addClass('unvisible').fadeOut(750);
        }
    });
    if ($(".photo-preview:hidden").length == 0) {
        $("#showMorePhotos").addClass('unvisible').fadeOut(750);
    }
});

$('#fullVideo').click(function(){
    $('#bigVideoContainer').toggleClass('fullWidthVideo');
});

var options = {  
    useEasing: true,
      useGrouping: true,
      separator: ',',
      decimal: '.',
      prefix: '',
      suffix: ''
};

$('#right-button').click(function() {
    event.preventDefault();
    $('#scrollable').animate({
        scrollLeft: "+=272px"
    }, "slow");
});
// $('#left-button').click(function() {
//     event.preventDefault();
//     $('#projects').animate({
//         scrollLeft: "-=252px"
//     }, "slow");
// });

/**
 * Выравнивание по высоте
 */

$(document).ready(function(){
    $.fn.equivalent = function (){
        //запишем значение jQuery выборки к которой будет применена эта функция в локальную переменную $blocks
        var $blocks = $(this),
            //примем за максимальную высоту - высоту первого блока в выборке и запишем ее в переменную maxH
            maxH    = $blocks.eq(0).height();
        //делаем сравнение высоты каждого блока с максимальной
        $blocks.each(function(){
            maxH = ( $(this).height() > maxH ) ? $(this).height() : maxH;
        });
        //устанавливаем найденное максимальное значение высоты для каждого блока jQuery выборки
        $blocks.height(maxH);
    }
    //применяем нашу функцию в элементам jQuery выборки - $('.nav')
    $('.data-wrapper').equivalent();
    $('#success-feedback .description').equivalent();
    $('.owl-item .dataWrapper .dataList').equivalent();
    $('.owl-item .dataWrapper .dataText').equivalent();
    $('.post-wrapper').equivalent();
    //$('#corporate-format .trigger-height .bottom-text').equivalent();
    //$('#corporate-format .block').equivalent();
});



// Trigger CSS animations on scroll.
// Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

// Looking for a version that also reverses the animation when
// elements scroll below the fold again?
// --> Check https://codepen.io/bramus/pen/vKpjNP

jQuery(function($) {
  
    // Function which adds the 'animated' class to any '.animatable' in view
    var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
        // Unbind scroll handler if we have no animatables
        if ($animatables.length == 0) {
            $(window).off('scroll', doAnimations);
        }
    
        // Check all animatables and animate them if necessary
        $animatables.each(function(i) {
            var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
            }
        });

    };
  
    // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');

});

