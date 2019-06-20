<?php 
    
    get_header();
    
?>
    <section id="posters-intro" class="commonIntroElements">
        <div class="container fullHeigth">
            <div class="row fullHeigth">
                <div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth">
                    <h1 class="text-center">Расписание</h1>
                    <p class="sub-text text-center">Речь - это мощный инструмент убеждения!</p>
                </div>
            </div>
        </div>
        <a class="downArrow bounce" href="#poster">
            <img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source/build/images/common/arrowDownBlue.svg" />
        </a>
    </section>
    <?php echo get_template_part( 'parts/menu' ); ?>
    <section class="archive-poster" id="poster">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <div class="card-wrapper">
                        <?php
                            $today = date('Ymd');
                            $args = array (
                                'posts_per_page' => -1,
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
                                        <!-- <img class="card-img-top" src="<?php echo $poster ?>" alt="Card image cap"> -->
                                        <img class="card-img-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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
                    <div id="loadMorePosters">
                        <p>Смотреть еще</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

<?php
get_footer();