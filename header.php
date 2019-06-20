<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package irynapalko
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="ZbII0FvxOWZ73gIhCXTu3uaSiXwTE3TtUF9ih29SS5M" />

		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.5/css/swiper.min.css">
		<link href="<?php bloginfo("template_directory"); ?>/source/build/styles/animate.css?v=0.001" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/source/build/styles/style.min.css?v=0.046" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/source/build/styles/owl.carousel.min.css?v=0.001" rel="stylesheet">
		<link href="<?php bloginfo("template_directory"); ?>/source/build/styles/owl.theme.default.min.css?v=0.001" rel="stylesheet">

		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	

		<meta property="og:url" content="">
		<meta property="og:type" content="website">
		<meta property="og:image" content="build/common/og.jpg">
		<meta property="og:description" content="">
		<meta name="it-rating" content="it-rat-9c84cb8bd9f84ea0e1dfef6f3bdf739a" />

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '283766691959822');
		fbq('track', 'PageView');
		</script>
		<noscript>
		<img height="1" width="1"
		src="https://www.facebook.com/tr?id=283766691959822&ev=PageView
		&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132848863-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-132848863-1');
		</script>

		<?php
			$url = $_SERVER['REQUEST_URI'];

			if($url == '/activities/intensiv-ya-govoryu-menya-slushayut-3/'){?>
				<!-- Google Tag Manager -->
				<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','GTM-T7VB467');</script>
				<!-- End Google Tag Manager -->
			<?}?>

		<?php wp_head(); ?>
	</head>

	<body>

	<?php if($url == '/activities/intensiv-ya-govoryu-menya-slushayut-3/'){?>
			<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7VB467"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->
	<?}?>

	<a name="top" id="top"></a> 
	<header>
		<div class="container">
			<div class="row flex-element">
				<div class="col-xs-4 col-sm-2 text-center">
					<?php if (is_front_page() || is_home()) : ?>
						<img src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/common/logo.svg" alt="logo" class="logo">
					<?php elseif ( is_404() || is_singular('activities') || is_page('stranica-blagodarnosti')) : ?>
						<a href="<?php echo get_home_url(); ?>">
							<img src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/common/logoDark.svg" alt="logo" class="logo">
						</a>
                	<?php else : ?>
						<a href="<?php echo get_home_url(); ?>">
							<img src="//irinapalko.com/wp-content/themes/irynapalko/source/build/images/common/logo.svg" alt="logo" class="logo">
 						</a>
                   	<?php endif; ?>
				</div>
				<div class="col-xs-offset-2 col-xs-6 col-sm-offset-7 col-sm-3 clearfix">
					<div class="wrapper">
						<?php if (is_404() || is_singular('activities') || is_page('stranica-blagodarnosti')) : ?>
							<div class="input-position hide clearfix">	
								<?php get_search_form(); ?>
							</div>
							<a class="phone" href="tel:0958099060" style="color: black;">+38 095 809 90 60</a>
							<div class="search-icon search-icon-dark"></div>
							<a class="circled-phone circled-phone-dark" href="tel:0958099060"></a>
							<div class="menuIcon hideFromHorizontalTablet">
							<svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="0.727539" y="13" width="25" height="3" rx="1.5" fill="black"/>
								<rect x="12.7275" width="13" height="3" rx="1.5" fill="black"/>
								<path d="M7.72754 8C7.72754 7.17157 8.39911 6.5 9.22754 6.5H24.2275C25.056 6.5 25.7275 7.17157 25.7275 8V8C25.7275 8.82843 25.056 9.5 24.2275 9.5H9.22754C8.39911 9.5 7.72754 8.82843 7.72754 8V8Z" fill="black"/>
							</svg>
								<!-- <svg width="30" height="20" viewBox="0 0 30 20" fill="#000000" xmlns="http://www.w3.org/2000/svg">
									<rect y="18.4614" width="29.2308" height="1.53846" rx="0.769231" stroke-width="3" />
									<rect x="13.0767" width="16.1538" height="1.53846" rx="0.769231" stroke-width="3" />
									<rect x="6.15356" y="9.23096" width="23.0769" height="1.53846" rx="0.769231" stroke-width="3" />
								</svg> -->
							</div>
						<?php else : ?>
							<div class="input-position hide clearfix">	
								<?php get_search_form(); ?>
							</div>
							<a class="phone" href="tel:0958099060">+38 095 809 90 60</a>
							<div class="search-icon"></div>
							<a class="circled-phone" href="tel:0958099060"></a>
							<div class="menuIcon hideFromHorizontalTablet">
							<svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="0.727539" y="13" width="25" height="3" rx="1.5" fill="white"/>
								<rect x="12.7275" width="13" height="3" rx="1.5" fill="white"/>
								<path d="M7.72754 8C7.72754 7.17157 8.39911 6.5 9.22754 6.5H24.2275C25.056 6.5 25.7275 7.17157 25.7275 8V8C25.7275 8.82843 25.056 9.5 24.2275 9.5H9.22754C8.39911 9.5 7.72754 8.82843 7.72754 8V8Z" fill="white"/>
							</svg>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<a href="#top" id="goTop"></a>