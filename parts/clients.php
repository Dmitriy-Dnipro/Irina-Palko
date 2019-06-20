<section id="clients" class="common-margin">
	<div class="container">
		<h2 class="traditional-heading text-center">Нам доверяют</h2>
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="swiper-container clients-slider">
					<div class="swiper-wrapper">
						<?php
							$args = array(
								'posts_per_page' => -1,
								'post_type' => 'partner',
								'orderby' => 'date',
								'order' => 'DESC'
							); 
							$posts_clients = new WP_Query( $args );
							while ( $posts_clients->have_posts() ) : $posts_clients->the_post();?>
									<div class="swiper-slide">
										<?php 
											$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
										?>
										<img src="<?php echo $thumb_url[0]; ?>" class="logo" alt="logo">
									</div>
								<?php 
							endwhile; 
							wp_reset_postdata();
							wp_reset_query();
						?>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-button-next">
					<svg width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1l6 7.368L1 16" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</div>
    			<div class="swiper-button-prev">
					<svg width="8" height="17" viewBox="0 0 8 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 16L1 8.632 7 1" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</div>
			</div>
		</div>
	</div>
</section>