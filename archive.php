<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package irynapalko
 */

get_header();
?>

<section id="archive-blog-intro" class="commonIntroElements">
	<div class="container fullHeigth">
		<div class="row fullHeigth">
			<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth flex-additional-wrap">
				<h1 class="text-center"><?php single_tag_title(); ?></h1>
			</div>
		</div>
	</div>
	<a class="downArrow bounce" href="#archive-blog">
		<img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source/build/images/common/arrowDownBlue.svg" />
	</a>
</section>
<?php echo get_template_part( 'parts/menu' ); ?>
<section id="archive-blog" class="real-archive">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a class="back-button" href="//irinapalko.com/blog/">Вернуться в блог</a>
			</div>
			<!-- Tab panes -->
			<div class="col-xs-12">
				<div class="common-projects-wrapper" >
					<?php if(have_posts()) : // make sure we have films to show before doing anything?>
						<?php while(have_posts()) : the_post(); ?>
							<?php 
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
							?>
							<div class="post-wrapper">
								<div class="post-image" style="background-image: url(<?php echo $thumb_url[0]; ?>)">
								</div>
								<div class="post-text">
									<p class="date"><?php echo get_the_date(); ?></p>
									<h3><?php the_title() ?></h3>
									<p><?php echo excerpt(12); ?></p>
									<a class="link-to-post" href="<?php the_permalink() ?>">Читай дальше</a>
								</div> <!-- post-text -->
							</div> <!-- post-wrapper -->
						<?php endwhile; ?>
						<?php wp_reset_query() ?>
					<?php endif; ?>
				</div> <!-- common-projects-wrapper -->
			</div><!-- col-xs-12 -->
		</div> <!-- row -->
	</div> <!-- container -->
</section>

<?php
get_footer();
