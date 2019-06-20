<?php
/*
 Template Name: Галерея — Ораторское искусство
 */
?>
<?php
    get_header(); 
?>
<?php

    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);

?>

<section id="archive-portfolio-intro" class="commonIntroElements" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
	<div class="container fullHeigth">
		<div class="row fullHeigth">
			<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth flex-additional-wrap">
				<h1 class="text-center">Gallery</h1>
                <p class="sub-text text-center">Обучаться с нами легко</p>
			</div>
		</div>
	</div>
	<a class="downArrow bounce" href="#archive-gallery">
		<img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source/build/images/common/arrowDownBlue.svg" />
	</a>
</section>
<?php echo get_template_part( 'parts/menu' ); ?>
<section id="archive-gallery">
    <div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-offset-1 col-md-10">
				<div class="projects">
					<ul class="projects-filter">
						<li class="active text-center">
							<a href="#">Ораторское искусство</a>
						</li>
						<li class="text-center">
							<a href="//irinapalko.com/galereya/korporativnoe-obuchenie/">Корпоративное обучение</a>
						</li>
						<li class="text-center">
							<a href="//irinapalko.com/galereya/oratorskoe-iskusstvo-dlya-shkolnikov/">Ораторское искусство для школьников</a>
						</li>
						<li class="text-center">
							<a href="//irinapalko.com/galereya/diskusionnyy-klub/">Дискуссионный Клуб</a>
						</li>
                        <li class="text-center">
							<a href="//irinapalko.com/galereya/motivacionnyy-zavtrak/">Мотивационный Завтрак</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Tab panes -->
			<div class="col-xs-12 col-md-offset-1 col-md-10 tab-content">
				<div class="common-projects-wrapper" id="oratorskoe-isskustvo">
                    <?php echo do_shortcode('[envira-gallery id="992"]') ?>
                    <a class="fb-link" href="//www.facebook.com/pg/successfulorator/photos/">Смотреть больше в facebook</a>
				</div>
			</div><!-- tab-content -->
		</div> <!-- row -->
	</div> <!-- container -->
</section>

<?php
get_footer();
