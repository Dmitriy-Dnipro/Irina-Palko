<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package irynapalko
 */

get_header();
?>

<section id="intro" class="commonIntroElements">
	<div class="container fullHeigth">
		<div class="row fullHeigth">
			<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth flex-additional-wrap">
				<h1 class="text-center">Transform your speech</h1>
				<p class="sub-text text-center">Говори и убеждай</p>
				<a class="get-video text-center breathing-button" data-target="#modalFormVideo" data-toggle="modal">Получить видеоурок</a>
			</div>
		</div>
	</div>
	<a class="downArrow bounce" href="#courses">
		<img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source//build/images/common/arrowDownBlue.svg" />
	</a>
	<video autoplay loop id="video-background" muted>
		<source src="<?php bloginfo("template_directory"); ?>/source/video/palko.mp4" type="video/mp4">
	</video>
</section>
<?php echo get_template_part( 'parts/menu' ); ?>
<section id="courses" class="common-margin">
	<div class="container">
		<div class="row">
			<h2 class="traditional-heading text-center">Наши проекты</h2>
			<p class="sub-heading text-center">Единая платформа для развития каждого</p>
			<div class="col-xs-12">
				<div class="courses owl-carousel">
					<?php
						$args = array(
							'taxonomy' => 'activities_category',
							'orderby' => 'name', 
							'order' => 'DESC',
							'hide_empty' => true,
						);
						$terms = get_terms( $args );
						foreach( $terms as $term ){
    							$image = get_field('cat_image', $term);
							?>
							<div class="course text-center talks">
								<div class="course-top-image" style="background-image: url(<?php echo $image; ?>)">
								</div>
								<div class="course-bottom-text">
									<h3><?php echo $term->name; ?></h3>
									<p class="subtitle"><?php echo $term->description; ?></p>
									<a class="common-button-styles" href="<?php echo get_term_link( $term ); ?>">Подробнее</a>
								</div>
							</div>

							<?php
						}
					?>
				</div>
			</div> 
		</div>
	</div>
</section>
<section id="poster" class="blue-section common-margin">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-offset-2 col-md-8">
				<h2 class="traditional-heading text-center">Расписание</h2>
				<p class="sub-heading text-center">Запланируй свое обучение и научись говорить убедительно, а выступать с удовольствием!</p>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-12">
				<div class="card-wrapper">
					<?php
						$today = date('Ymd');
						$args = array (
							'posts_per_page' => 3,
							'post_type' => 'activities',
							'orderby'	=> 'event_date',
							'order' => 'ASC',
							'meta_query' => array(
								array(
									'key'		=> 'event_date',
									'compare'	=> '>=',
									'value'		=> $today,
								)
							),
						);
						
						$posts = new WP_Query( $args );
						while ( $posts->have_posts() ) : $posts->the_post();?>
							<?php
								$event_date = strtotime(get_field('event_date'));
								$event_date_finish = strtotime(get_field('event_date_finish'));
								$field = get_field_object('event_city');
								$value = $field['value'];
								$label = $field['choices'][ $value ];  
											
								$image = get_field('morning_poster');


								$thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
							?>
							<?php
								if ( has_term('oratorskoe-iskusstvo', 'activities_category') ) {
							?>
							<div class="card text-center">
								<a href="<?php the_permalink() ?>">
									<img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<!-- <img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" alt="Card image cap"> -->
									<div class="card-body">
										<p class="date"><?php echo date_i18n('d F', $event_date);?></p>
										<p class="date dateSecond"> — </p>
                                        <p class="date"><?php echo date_i18n('d F', $event_date_finish);?></p>
										<h3 class="card-title"><?php echo the_title();?></h3>
										<p class="place"><?php echo $label;?></p>
									</div>
								</a>
							</div>
							<?php
							}
								if ( has_term('motivacionnye-zavtraki', 'activities_category') ) {
								?>
								<div class="card text-center">
									<a href="//irinapalko.com/events/motivacionnye-zavtraki/">
										<img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" alt="Card image cap">
										<div class="card-body">
											<p class="date"><?php echo date_i18n('d F', $event_date);?></p>
											<h3 class="card-title"><?php echo the_title();?></h3>
											<p class="place"><?php echo $label;?></p>
										</div>
									</a>
								</div>
							<?php
							}
							?>
						<?php 
						endwhile; 
					?>
				</div>
			</div>
			<a href="//irinapalko.com/activities/" class="common-button-styles">Все мероприятия</a>
		</div>
	</div>
</section>
<section id="feedback-slider" class="index-feedback-slider common-margin section-testimonials fix-bg break">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="traditional-heading text-center">Истории успеха и <br>отзывы</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-5">
				<div class="slider slider-nav">
					<?php
                        $args = array(
							'posts_per_page' => -1,
							'post_type' => 'reviews',
							'reviews_category' => 'otzyvy-na-glavnuyu-stranicu',
							'orderby' => 'date',
							'order' => 'DESC',
                         ); 
                        $posts = new WP_Query( $args );
                        while ( $posts->have_posts() ) : $posts->the_post();?>
							<div class="slider-nav-content">
								<?php 
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                                ?>
                                <img src="<?php echo $thumb_url[0]; ?>" alt='Аватар'>
							</div>
                            <?php 
                        endwhile; 
                    ?>
				</div>
			</div>
			<div class="col-xs-7 col-md-offset-1 col-md-6">
				<div class="slider slider-for">
					<?php
                        $args = array(
							'posts_per_page' => -1,
							'post_type' => 'reviews',
							'reviews_category' => 'otzyvy-na-glavnuyu-stranicu',
							'orderby' => 'date',
							'order' => 'DESC',
                         ); 
                        $posts = new WP_Query( $args );
                        while ( $posts->have_posts() ) : $posts->the_post();?>
							<div class="slider-content">
								<p class="name"><?php the_title() ?></p>
								<p class="position"><?php echo the_field('position') ?></p>
								<?php the_excerpt() ?>
								<a href="#" data-target="#<?php the_ID(); ?>" data-toggle="modal">Читать дальше</a>
								<?php if( get_field('video_link') ) { ?>
									<a href="#" data-target="#<?php the_ID(); ?>a11" data-toggle="modal" class="video">Смотреть видео</a>
								<?php } ?>
							</div>
                            <?php 
                        endwhile; 
                    ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php echo get_template_part( 'parts/clients' ); ?>
<section id="posts" class="index-posts blue-section common-margin"  style="display: none;">
	<div class="container">
		<h2 class="traditional-heading text-center">Блог</h2>
		<p class="sub-heading text-center">Читай, вдохновляйся, учись</p>
		<div class="row">
			<div class="col-xs-12">
				<div class="posts-wrapper owl-carousel">
					<?php
						$args = array(
							'posts_per_page' => 2,
							'post_type' => 'post',
							'orderby' => 'date',
							'order' => 'DESC'
						); 
						$posts = new WP_Query( $args );
						while ( $posts->have_posts() ) : $posts->the_post();?>
							<div class="post-wrapper">
								<?php 
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
								?>
								<div class="post-image" style="background-image: url('<?php echo $thumb_url[0]; ?>')">
								</div>
								<div class="post-text">
									<?php the_title('<h3>', '</h3>'); ?>
                                    <?php the_excerpt('<p>', '</p>') ?>
									<a class="link-to-post" href="<?php the_permalink() ?>">Читай дальше</a>
								</div>
							</div>
						<?php 
						endwhile; 
					?>
				</div>
				<a href="//irinapalko.com/blog/" class="common-button-styles">Больше статей</a>
			</div>
		</div>
	</div>
</section>
<section id="order-form" class="index-order-form common-margin">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-text">
					<p class="top-form-text">сделай первый <br> шаг <span>к развитию</span></p>
				</div>
			</div>
			<?php echo get_template_part( 'parts/form' ); ?>
		</div>
	</div>
</section>

	<!-- Видеоотзывы в попапе -->
	<?php
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'reviews',
			'reviews_category' => 'otzyvy-na-glavnuyu-stranicu',
			'orderby' => 'date',
			'order' => 'DESC',                    
		); 
		$posts = new WP_Query( $args );
		while ( $posts->have_posts() ) : $posts->the_post();?>
			<div id="<?php the_ID(); ?>a11" class="recall modal modal-video fade in">
				<div class="modal-dialog">
					<div class="modal-content">
						<button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
						<div class="review-wrapper">
						<h2 class="form-upper-text text-center"><?php echo the_title() ?></h2>
                        <p class="position text-center"><?php echo the_field('position') ?></p>
						<?php if( get_field('video_link') ) { ?>
							<?php echo get_field('video_link'); ?>
						<?php } ?>
						</div>				
					</div>
				</div>
			</div>
		<?php 
		endwhile; 
	?>
	
	<!-- Текстовые отзывы в попапе -->
	<?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'reviews',
            'reviews_category' => 'otzyvy-na-glavnuyu-stranicu',
            'orderby' => 'date',
            'order' => 'DESC',                    
        ); 
        $posts = new WP_Query( $args );
        while ( $posts->have_posts() ) : $posts->the_post();?>
            <div id="<?php the_ID(); ?>" class="recall modal modal-review fade in">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                        <div class="review-wrapper">
                            <h2 class="form-upper-text"><?php echo the_title() ?></h2>
                            <p class="position"><?php echo the_field('position') ?></p>
                            <?php echo the_content() ?>
                        </div>				
                    </div>
                </div>
            </div>
        <?php 
        endwhile; 
    ?>
<?php
get_footer();
