$(window).load(function() {
	$('.speakerWrapperBig .descriptionWrapper').readmore({
		speed: 150,
		collapsedHeight: 57,
		moreLink: '<a href="#"><img class="clicked" src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/morning/arrowBottom.svg"></a>',
		lessLink: '<a href="#"><img class="clicked" src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/morning/topArrow.svg"></a>',
	});
	// $('.speakerWrapper .descriptionWrapper').readmore({
	// 	speed: 150,
	// 	collapsedHeight: 63,
	// 	moreLink: '<a href="#"><img class="clicked" src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/morning/arrowBottom.svg"></a>',
	// 	lessLink: '<a href="#"><img class="clicked" src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/morning/topArrow.svg"></a>',
	// });
});