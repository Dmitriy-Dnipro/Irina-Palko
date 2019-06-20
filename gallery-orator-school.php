<?php
/*
 Template Name: Галерея — Ораторское для школьников
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
						<li class="text-center">
							<a href="//irinapalko.com/galereya/oratorskoe-iskusstvo/">Ораторское искусство</a>
						</li>
						<li class="text-center">
							<a href="//irinapalko.com/galereya/korporativnoe-obuchenie/">Корпоративное обучение</a>
						</li>
						<li class="active text-center">
							<a href="#">Ораторское искусство для школьников</a>
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
                <div class="common-projects-wrapper" id="oratorskoe-dlya-schkolnikov">

				<?php if( have_rows('gallery_content') ):
						while( have_rows('gallery_content') ): the_row(); 
												
							// vars
							$image_1 = get_sub_field('gallery_content_image_1');
							$image_2 = get_sub_field('gallery_content_image_2');
							$image_3 = get_sub_field('gallery_content_image_3');
							$image_4 = get_sub_field('gallery_content_image_4');
							$image_5 = get_sub_field('gallery_content_image_5');
							$image_6 = get_sub_field('gallery_content_image_6');
							$image_7 = get_sub_field('gallery_content_image_7');
							$image_8 = get_sub_field('gallery_content_image_8');
							$image_9 = get_sub_field('gallery_content_image_9');
							$image_10 = get_sub_field('gallery_content_image_10');

							?>
						<?php endwhile; ?>
					<?php endif; ?>

                    <div class="photos-gallery-wrapper">
						<a class="galleryImage" href="<?php echo $image_1; ?>" style="background-image: url(<?php echo $image_1; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_2; ?>" style="background-image: url(<?php echo $image_2; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_3; ?>" style="background-image: url(<?php echo $image_3; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_4; ?>" style="background-image: url(<?php echo $image_4; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_5; ?>" style="background-image: url(<?php echo $image_5; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_6; ?>" style="background-image: url(<?php echo $image_6; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_7; ?>" style="background-image: url(<?php echo $image_7; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_8; ?>" style="background-image: url(<?php echo $image_8; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_9; ?>" style="background-image: url(<?php echo $image_9; ?>)">
						</a>
						<a class="galleryImage" href="<?php echo $image_10; ?>" style="background-image: url(<?php echo $image_10; ?>)">
						</a>
					</div>
                    <a class="fb-link" href="//www.facebook.com/pg/successfulorator/photos/">Смотреть больше в facebook</a>
				</div>
			</div><!-- tab-content -->
		</div> <!-- row -->
	</div> <!-- container -->
</section>

<?php
get_footer();