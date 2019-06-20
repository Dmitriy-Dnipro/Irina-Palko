<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package irynapalko
 */

get_header();
?>
    <?php 
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
    ?>
    <section id="single-blog-intro" class="commonIntroElements" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
        <a class="downArrow bounce" href="#single-blog">
            <img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source//build/images/common/arrowDownBlue.svg" />
        </a>
    </section>
    <?php echo get_template_part( 'parts/menu' ); ?>
    <section id="single-blog">
        <div class="container relative">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumbs">
                        <li><a href="/">Главная</a></li>
                        <li><a href="//irinapalko.com/blog/">Блог</a></li>
                        <li>
                            <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                }
                            ?>
                        </li>
                        <li><a><?php the_title();?></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-offset-2 col-md-8 ipad-padding">
                    <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<a class="category" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                        }
                    ?>
                    <h1>
                        <?php the_title();?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-offset-2 col-md-8 ipad-padding">
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
						<?php the_content() ?>
                        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
					<?php endwhile; endif; ?>
                </div>
            </div>
            <div class="share-button">
                <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="27">
                    <path d="M20.8333 19.0939C19.7778 19.0939 18.8333 19.5008 18.1111 20.1381L8.20833 14.5103C8.27778 14.1984 8.33333 13.8865 8.33333 13.561C8.33333 13.2356 8.27778 12.9237 8.20833 12.6118L18 7.03817C18.75 7.71622 19.7361 8.13661 20.8333 8.13661C21.9384 8.13661 22.9982 7.70799 23.7796 6.94503C24.561 6.18208 25 5.14729 25 4.06831C25 2.98933 24.561 1.95454 23.7796 1.19158C22.9982 0.428624 21.9384 0 20.8333 0C19.7283 0 18.6685 0.428624 17.8871 1.19158C17.1057 1.95454 16.6667 2.98933 16.6667 4.06831C16.6667 4.39377 16.7222 4.70568 16.7917 5.01758L7 10.5912C6.25 9.91311 5.26389 9.49272 4.16667 9.49272C3.0616 9.49272 2.00179 9.92134 1.22039 10.6843C0.438987 11.4473 0 12.482 0 13.561C0 14.64 0.438987 15.6748 1.22039 16.4378C2.00179 17.2007 3.0616 17.6293 4.16667 17.6293C5.26389 17.6293 6.25 17.2089 7 16.5309L16.8889 22.1587C16.8194 22.4435 16.7778 22.7418 16.7778 23.0537C16.7778 25.2371 18.5972 27 20.8333 27C23.0694 27 24.8889 25.2371 24.8889 23.0537C24.8889 22.0035 24.4616 20.9963 23.701 20.2537C22.9405 19.5111 21.9089 19.0939 20.8333 19.0939Z" fill="#0BACCD"/>
                    </mask>
                    <g mask="url(#mask0)">
                    <rect x="-4.48633" y="-4.06824" width="33.3333" height="32.5465" fill="#0BACCD"/>
                    </g>
                </svg>
            </div>
            <div class="social-bar">
                <?php echo do_shortcode('[addtoany]') ?>
            </div>
            
            
        </div>
    </section>
    <section id="similar-blogs">
        <div class="container">
            <h2 class="text-center">Читай также</h2>
            <div class="col-xs-12">
				<div class="posts-wrapper owl-carousel">
                <?php
                    // Default arguments
                    $args = array(
                        'posts_per_page' => 2, // How many items to display
                        'post__not_in'   => array( get_the_ID() ), // Exclude current post
                        'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
                    );

                    // Check for current post category and add tax_query to the query arguments
                    $cats = wp_get_post_terms( get_the_ID(), 'category' ); 
                    $cats_ids = array();  
                    foreach( $cats as $wpex_related_cat ) {
                        $cats_ids[] = $wpex_related_cat->term_id; 
                    }
                    if ( ! empty( $cats_ids ) ) {
                        $args['category__in'] = $cats_ids;
                    }
                    // Query posts
                    $wpex_query = new wp_query( $args );
                    // Loop through posts
                    foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
                            <?php 
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                            ?>
                            <div class="post-wrapper">
                                <div class="post-image" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
                                </div>
                                <div class="post-text">
                                    <?php the_title('<h3>', '</h3>'); ?>
                                    <?php the_excerpt('<p>', '</p>') ?>
                                    <a class="link-to-post" href="<?php the_permalink() ?>">Читай дальше</a>
                                </div>
                            </div>
                        <?php
                    endforeach;
                wp_reset_postdata(); ?>
                        
					
				</div>
			</div>
        </div>
    </section>

<?php
get_footer();
