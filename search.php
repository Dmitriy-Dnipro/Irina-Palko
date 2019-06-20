<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package irynapalko
 */

get_header();
?>
	<section id="search-results" class="commonIntroElements" style="background-image: url('//irinapalko.com/wp-content/uploads/2018/12/3-min-1.jpg')">
		<div class="container fullHeigth">
			<div class="row fullHeigth">
				<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth flex-additional-wrap">
					<h1 class="text-center">Результаты поиска</h1>
					<p class="sub-text text-center">Найдено результатов: <?php global $wp_query; echo $wp_query->found_posts; ?></p>
				</div>
			</div>
		</div>
	</section>
	<?php echo get_template_part( 'parts/menu' ); ?>
	<section class="archive-poster" id="poster">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <div class="card-wrapper">
					<?php if ( have_posts() ) : ?>

			

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								
								get_template_part( 'parts/poster');

							endwhile;

							the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
						?>
                    </div>
                    <div id="loadMorePosters">
                        <p>Смотреть еще</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
		

<?php
get_footer();
