<?php
    /*
    Template Name: Блог — все записи
    */
?>
<?php get_header(); ?>
<section id="archive-blog-intro" class="commonIntroElements">
	<div class="container fullHeigth">
		<div class="row fullHeigth">
			<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth flex-additional-wrap">
				<h1 class="text-center">Все статьи</h1>
				<p class="sub-text text-center">Речь — это мощный инструмент убеждения!</p>
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
				<div class="common-projects-wrapper all-blogs" >
					<?php 
						$loop = new WP_Query(array('post_type' =>  'post', 'posts_per_page' => -1));
						$count =0;
					?>
					<?php if ( $loop ) : 
	                     
						 while ( $loop->have_posts() ) : $loop->the_post(); ?>
	 
							 <?php
								 $thumb_id = get_post_thumbnail_id();
								 $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
								 //$post_tags = get_the_tags();
								 $post_categories = get_categories();
								 $post_id = get_the_ID();
								 $post_url = get_post_permalink();
								 if ( $post_categories && ! is_wp_error( $post_categories ) ) : 
									 $links = array();
									 $names = array();
	 
									 foreach ( $post_categories as $post_category ) 
										 {
											 $links[] = $post_category->slug;
											 $names[] = $post_category->name;
										 }
										 $links = str_replace(' ', '-', $links); 
										 $tax = join( " ", $links );   
										 $name = join( ", ", $names );    
									 else :  
										 $tax = '';  
										 $name = '';
									 endif;										
								 
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
	 
									 
							 <?php endwhile; else: ?>
							 <li class="error-not-found">Sorry, no portfolio entries for while.</li>     
						 <?php endif; ?>
						 <div class="button-wrapper all-blogs-button">
							<a href="http://irinapalko.com/category/<?php echo $category_list->slug ?>" class="link-to-blogs">Смотреть еще</a>
						</div>
				</div> <!-- common-projects-wrapper -->
			</div><!-- col-xs-12 -->
		</div> <!-- row -->
	</div> <!-- container -->
</section>
<?php
get_footer();


