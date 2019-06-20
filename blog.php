<?php
    /*
    Template Name: Блог
    */
?>
<?php get_header(); ?>
<section id="archive-blog-intro" class="commonIntroElements">
	<div class="container fullHeigth">
		<div class="row fullHeigth">
			<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth flex-additional-wrap">
				<h1 class="text-center">База знаний</h1>
				<p class="sub-text text-center">Речь — это мощный инструмент убеждения!</p>
			</div>
		</div>
	</div>
	<a class="downArrow bounce" href="#archive-blog">
		<img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source/build/images/common/arrowDownBlue.svg" />
	</a>
</section>
<?php echo get_template_part( 'parts/menu' ); ?>
<section id="archive-blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php $categories_list = get_terms('category'); // get all the genres ?>
				<div class="projects">
					<ul class="projects-filter">
						<li class="active text-center">
							<a data-toggle="tab" href="#all">Все</a>
						</li>
						<?php foreach($categories_list as $category_list) { ?>
							<li class="text-center">
								<a href="#<?php echo $category_list->slug ?>" data-toggle="tab"><?php echo $category_list->name ?></a>
							</li>
						<? } ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Tab panes -->
			
			<div class="col-xs-12 tab-content">
				<div class="tab-pane common-projects-wrapper fade in active" id="all">
					<?php 	
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 6,
							'orderby' => 'date',
							'order' => 'ASC'
						);
						$all_posts = new WP_Query( $args );		
					?>
					<?php if ( $all_posts->have_posts() ) : ?>
						<?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
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
								</div>
							</div>	
						<?php endwhile; ?>
						<?php wp_reset_query() ?>
					<?php endif; ?>
					<div class="button-wrapper">
						<a href="//irinapalko.com/vse-zapisi/" class="link-to-blogs">Смотреть еще</a>
					</div>
				</div>
				
				<?php foreach($categories_list as $category_list) { ?>

					<div class="tab-pane fade common-projects-wrapper" id="<?php echo $category_list->slug ?>">
						<?php
							$args = array(
								'post_type' => 'post',
								'posts_per_page' => 6,
								'orderby' => 'date',
								'order' => 'ASC',
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field' => 'slug',
										'terms' => $category_list->slug
									)
								)
							);
							$categories = new WP_Query( $args );		
						?>
						<?php if ( $categories->have_posts() ) : // make sure we have films to show before doing anything?>
							<?php while ( $categories->have_posts() ) : $categories->the_post(); ?>
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
										<p><?php echo excerpt(15); ?></p>
										<a class="link-to-post" href="<?php the_permalink() ?>">Читай дальше</a>
									</div>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_query() ?>
						<?php endif; ?>
						<div class="button-wrapper">
							<a href="http://irinapalko.com/category/<?php echo $category_list->slug ?>" class="link-to-blogs">Смотреть еще</a>
						</div>
					</div>
					
				<? }  ?>

			</div><!-- tab-content -->
		</div> <!-- row -->
	</div> <!-- container -->
</section>

<?php
get_footer();
