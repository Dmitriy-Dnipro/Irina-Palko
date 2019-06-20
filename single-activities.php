<?php 
    get_header();    
?>


    <?php if( have_rows('art') ): 

        while( have_rows('art') ): the_row(); 
            
            $subheading = get_sub_field('firstscreen_subheading');
		    $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            
            ?>
                <section id="landingIntro" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="textBlock textBlockLeft">
                                    <?php
                                        $event_date = strtotime(get_field('event_date'));
                                        
                                    ?>
                                    <p>старт&nbsp;</p>
                                    <p class="date"><?php echo date_i18n('d F', $event_date); ?></p>
                                    <p class="city before">
                                        <?php
                                            
                                            $field = get_field_object('event_city');
                                            $value = $field['value'];
                                            $label = $field['choices'][ $value ];

                                            echo $label; 
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-offset-6 col-xs-3">
                                <div class="textBlock textBlockRight">
                                    <p class="city">Irina</p>
                                    <p class="city before">Palko</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h1><?php the_title() ?></h1>
                            <div class="small-wrap">
                                <?php echo $subheading; ?>
                            </div>
                            
                        </div>
                    </div>
                    <button class="common-button-styles" data-target="#modalFormOrder" data-toggle="modal">Оставить заявку</button>
                    <a class="downArrow bounce" href="#speak">
                        <img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source/build/images/common/arrowDownBlue.svg" />
                    </a>
                </section>
                <?php echo get_template_part( 'parts/menu' ); ?>
                <section id="speak" class="common-margin">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-12">
                                <h2 class="traditional-heading text-center">Речь — это мощный инструмент убеждения!</h2>
                                <p class="sub-heading text-center">Наше умение уверенно и красиво говорить напрямую влияет на успех и доход.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-12">
                                <?php if( have_rows('second_screen_block') ): 

                                    while( have_rows('second_screen_block') ): the_row(); 
                                        
                                        // vars
                                        $second_screen_block_first_subblock_first_point = get_sub_field('second_screen_block_first_subblock_first_point');
                                        $second_screen_block_first_subblock_second_point = get_sub_field('second_screen_block_first_subblock_second_point');
                                        $second_screen_block_first_subblock_third_point = get_sub_field('second_screen_block_first_subblock_third_point');

                                        $second_screen_block_second_subblock_first_point = get_sub_field('second_screen_block_second_subblock_first_point');
                                        $second_screen_block_second_subblock_second_point = get_sub_field('second_screen_block_second_subblock_second_point');
                                        $second_screen_block_second_subblock_third_point = get_sub_field('second_screen_block_second_subblock_third_point');

                                        $second_screen_block_third_subblock_first_point = get_sub_field('second_screen_block_third_subblock_first_point');
                                        $second_screen_block_third_subblock_second_point = get_sub_field('second_screen_block_third_subblock_second_point');
                                        $second_screen_block_third_subblock_third_point = get_sub_field('second_screen_block_third_subblock_third_point');
                                        
                                        ?>
                                        <div id="hugeWrappper" class="wrap sliderWrapper owl-carousel">
                                            <div class="dataWrapper">
                                                <p class="dataNumber">
                                                    01
                                                </p>
                                                <p class="dataText">
                                                    если тебе приходится:
                                                </p>
                                                <ul class="dataList">
                                                    <li><?php echo $second_screen_block_first_subblock_first_point ?></li>
                                                    <li><?php echo $second_screen_block_first_subblock_second_point ?></li>
                                                    <li><?php echo $second_screen_block_first_subblock_third_point ?></li>
                                                </ul>
                                                <!-- <button class="dataButton" data-target="#modalForm" data-toggle="modal">запишись</button> -->
                                                <button class="common-button-styles" data-target="#modalForm" data-toggle="modal">забронировать место</button>
                                                
                                            </div>
                                            <div class="dataWrapper">
                                                <p class="dataNumber">
                                                    02
                                                </p>
                                                <p class="dataText">
                                                    если ты хочешь:
                                                </p>
                                                <ul class="dataList">
                                                    <li><?php echo $second_screen_block_second_subblock_first_point ?></li>
                                                    <li><?php echo $second_screen_block_second_subblock_second_point ?></li>
                                                    <li><?php echo $second_screen_block_second_subblock_third_point ?></li>
                                                </ul>
                                                <button class="common-button-styles" data-target="#modalForm" data-toggle="modal">забронировать место</button>
                                            </div>
                                            <div class="dataWrapper">
                                                <p class="dataNumber">
                                                    03
                                                </p>
                                                <p class="dataText">
                                                    если ты чувствуешь:
                                                </p>
                                                <ul class="dataList">
                                                    <li><?php echo $second_screen_block_third_subblock_first_point ?></li>
                                                    <li><?php echo $second_screen_block_third_subblock_second_point ?></li>
                                                    <li><?php echo $second_screen_block_third_subblock_third_point ?></li>
                                                </ul>
                                                <button class="common-button-styles" data-target="#modalForm" data-toggle="modal">забронировать место</button>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="textBlue">
                    <div class="container">
                        <div class="col-xs-12">
                            <p>Мы <span>докажем</span>, что страха публичных выступлений у тебя нет, лишь волнение с которым мы точно <span>справимся</span>.</p>
                        </div>
                    </div>
                </section>
                <section id="skills" class="skillset common-margin">
                    <div class="container">
                        <div class="col-xs-12 col-md-6">
                            <div class="textWrapper">
                                <?php if( have_rows('fourth_screen_block') ): 
                                    while( have_rows('fourth_screen_block') ): the_row(); 
                                        
                                        // vars
                                        $first_paragraph_header = get_sub_field('first_paragraph_header');
                                        $first_paragraph_content = get_sub_field('first_paragraph_content');

                                        $second_paragraph_header = get_sub_field('second_paragraph_header');
                                        $second_paragraph_content = get_sub_field('second_paragraph_content');

                                        $third_paragraph_header = get_sub_field('third_paragraph_header');
                                        $third_paragraph_content = get_sub_field('third_paragraph_content');

                                        $fourth_paragraph_header = get_sub_field('fourth_paragraph_header');
                                        $fourth_paragraph_content = get_sub_field('fourth_paragraph_content');
                                        
                                        ?>
                                        <h2 class="traditional-heading text-center">Чему ты <span>научишься</span>?</h2>
                                        <ul>
                                            <li>
                                                <p class="upperText"><?php echo $first_paragraph_header; ?></p>
                                                <p class="bottomText"><?php echo $first_paragraph_content; ?></p>
                                            </li>
                                            <li>
                                                <p class="upperText"><?php echo  $second_paragraph_header; ?></p>
                                                <p class="bottomText"><?php echo $second_paragraph_content; ?></p>
                                            </li>
                                            <li>
                                                <p class="upperText"><?php echo $third_paragraph_header; ?></p>
                                                <p class="bottomText"><?php echo $third_paragraph_content; ?></p>
                                            </li>
                                            <li>
                                                <p class="upperText"><?php echo $fourth_paragraph_header; ?></p>
                                                <p class="bottomText"><?php echo $fourth_paragraph_content; ?></p>
                                            </li>
                                        </ul>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                    <div id="bigVideoContainer" class="video">
                        <div id="fullVideo" class="button">
                            <svg class="but" viewBox="0 0 23 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.5621 14.8918L1.15733 0.129891C0.930738 -0.0258473 0.636976 -0.0420854 0.394881 0.0841288C0.152048 0.211819 0 0.462772 0 0.737343V30.2612C0 30.5357 0.152048 30.7874 0.394881 30.9151C0.502643 30.9712 0.620738 30.9992 0.738095 30.9992C0.884976 30.9992 1.03112 30.955 1.15733 30.8686L22.5621 16.1067C22.7621 15.9687 22.881 15.7421 22.881 15.4992C22.881 15.2564 22.7614 15.0298 22.5621 14.8918Z" fill="white"/>
                            </svg>
                            <svg class="but hidden" xmlns="http://www.w3.org/2000/svg" viewBox="-45 0 327 327">
                                <path d="m158 0h71c4.417969 0 8 3.582031 8 8v311c0 4.417969-3.582031 8-8 8h-71c-4.417969 0-8-3.582031-8-8v-311c0-4.417969 3.582031-8 8-8zm0 0" fill="#FFFFFF"/>
                                <path d="m8 0h71c4.417969 0 8 3.582031 8 8v311c0 4.417969-3.582031 8-8 8h-71c-4.417969 0-8-3.582031-8-8v-311c0-4.417969 3.582031-8 8-8zm0 0" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <div class="videoWrapper">
                            <video id="topVideo" autoplay loop>
                                <source src="//irinapalko.com/wp-content/themes/irynapalko/source/video/palko-2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="hideFromHorizontalTablet adaptiveVideo commonVideoPoster">
                        <div id="playButton" class="button">
                            <svg class="but" viewBox="0 0 23 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.5621 14.8918L1.15733 0.129891C0.930738 -0.0258473 0.636976 -0.0420854 0.394881 0.0841288C0.152048 0.211819 0 0.462772 0 0.737343V30.2612C0 30.5357 0.152048 30.7874 0.394881 30.9151C0.502643 30.9712 0.620738 30.9992 0.738095 30.9992C0.884976 30.9992 1.03112 30.955 1.15733 30.8686L22.5621 16.1067C22.7621 15.9687 22.881 15.7421 22.881 15.4992C22.881 15.2564 22.7614 15.0298 22.5621 14.8918Z" fill="white"/>
                            </svg>
                            <svg class="but hidden" xmlns="http://www.w3.org/2000/svg" viewBox="-45 0 327 327">
                                <path d="m158 0h71c4.417969 0 8 3.582031 8 8v311c0 4.417969-3.582031 8-8 8h-71c-4.417969 0-8-3.582031-8-8v-311c0-4.417969 3.582031-8 8-8zm0 0" fill="#FFFFFF"/>
                                <path d="m8 0h71c4.417969 0 8 3.582031 8 8v311c0 4.417969-3.582031 8-8 8h-71c-4.417969 0-8-3.582031-8-8v-311c0-4.417969 3.582031-8 8-8zm0 0" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <video id="bottomVideo" loop poster="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7">
                            <source src="//irinapalko.com/wp-content/themes/irynapalko/source/video/palko-2.mp4" type="video/mp4">
                        </video>
                    </div>
                </section>
                <section id="work" class="common-margin">
                    <div class="container">
                        <h2 class="traditional-heading text-center">Почему это работает?</h2>
                        <div class="row">
                            <?php if( have_rows('fifth_screen_block') ):
                                while( have_rows('fifth_screen_block') ): the_row(); 
                                        
                                    // vars
                                    $first_subblock_heading = get_sub_field('first_subblock_heading');
                                    $first_subblock_content = get_sub_field('first_subblock_content');
                                        
                                    $second_subblock_heading = get_sub_field('second_subblock_heading');
                                    $second_subblock_content = get_sub_field('second_subblock_content');
                                        
                                    $third_subblock_heading = get_sub_field('third_subblock_heading');
                                    $third_subblock_content = get_sub_field('third_subblock_content');
                                                                                
                                    $fourth_subblock_heading = get_sub_field('fourth_subblock_heading');
                                    $fourth_subblock_content = get_sub_field('fourth_subblock_content');

                                    $fifth_subblock_heading = get_sub_field('fifth_subblock_heading');
                                    $fifth_subblock_content = get_sub_field('fifth_subblock_content');

                                    $sixth_subblock_heading = get_sub_field('sixth_subblock_heading');
                                    $sixth_subblock_content = get_sub_field('sixth_subblock_content');
                                    ?>
                                        <div class="col-xs-12 col-md-6 hideTillHorizontalTabletInclude">
                                            <div class="blockWrapper">
                                                <div class="block current" data-tab="tab-1">
                                                    <p class="number">01</p>
                                                    <p class="text"><?php echo $first_subblock_heading; ?></p>
                                                    <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/like.png" class="tabImage" alt="like">
                                                </div>
                                                <div class="block" data-tab="tab-2">
                                                    <p class="number">02</p>
                                                    <p class="text"><?php echo $second_subblock_heading; ?></p>
                                                    <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/practice.png" class="tabImage" alt="like">
                                                </div>
                                                <div class="block" data-tab="tab-3">
                                                    <p class="number">03</p>
                                                    <p class="text"><?php echo $third_subblock_heading; ?></p>
                                                    <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/skill.png" class="tabImage" alt="like">
                                                </div>
                                                <div class="block" data-tab="tab-4">
                                                    <p class="number">04</p>
                                                    <p class="text"><?php echo $fourth_subblock_heading; ?></p>
                                                    <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/fun.png" class="tabImage" alt="like">
                                                </div>
                                                <div class="block" data-tab="tab-5">
                                                    <p class="number">05</p>
                                                    <p class="text"><?php echo $fifth_subblock_heading; ?></p>
                                                    <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/joy.png" class="tabImage" alt="like">
                                                </div>
                                                <div class="block" data-tab="tab-6">
                                                    <p class="number">06</p>
                                                    <p class="text"><?php echo $sixth_subblock_heading; ?></p>
                                                    <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/garantee.png" class="tabImage" alt="like">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-offset-1 col-md-5 hideTillHorizontalTabletInclude">
                                            <div class="headText">
                                                Принципы<br>нашей работы
                                            </div>
                                            <div id="tab-1" class="tab-content tab-content-work current">
                                                <p class="tab-heading">
                                                    <?php echo $first_subblock_heading; ?>
                                                </p>
                                                <?php echo $first_subblock_content; ?>
                                            </div>
                                            <div id="tab-2" class="tab-content tab-content-work">
                                                <p class="tab-heading">
                                                    <?php echo $second_subblock_heading; ?>
                                                </p>
                                                <?php echo $second_subblock_content; ?>
                                            </div>
                                            <div id="tab-3" class="tab-content tab-content-work">
                                                <p class="tab-heading">
                                                    <?php echo $third_subblock_heading; ?>
                                                </p>
                                                <?php echo $third_subblock_content; ?>
                                            </div>
                                            <div id="tab-4" class="tab-content tab-content-work">
                                                <p class="tab-heading">
                                                    <?php echo $fourth_subblock_heading; ?>
                                                </p>
                                                <?php echo $fourth_subblock_content; ?>
                                            </div>
                                            <div id="tab-5" class="tab-content tab-content-work">
                                                <p class="tab-heading">
                                                    <?php echo $fifth_subblock_heading; ?>
                                                </p>
                                                <?php echo $fifth_subblock_content; ?>
                                            </div>
                                            <div id="tab-6" class="tab-content tab-content-work">
                                                <p class="tab-heading">
                                                    <?php echo $sixth_subblock_heading; ?>
                                                </p>
                                                <?php echo $sixth_subblock_content; ?>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 hideFromHorizontalTablet">
                                            <p class="textTop">Принципы нашей работы</p>
                                            <div class="panel-group blockWrapper" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="block current">
                                                            <p class="number">01</p>
                                                            <p class="text"><?php echo $first_subblock_heading; ?></p>
                                                            <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/like.png" class="tabImage" alt="like">
                                                        </a>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <p class="tab-heading">
                                                                <?php echo $first_subblock_heading; ?>
                                                            </p>
                                                            <?php echo $first_subblock_content; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="block">
                                                                <p class="number">02</p>
                                                                <p class="text"><?php echo $second_subblock_heading; ?></p>
                                                                <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/practice.png" class="tabImage" alt="like">
                                                            </a>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p class="tab-heading">
                                                                <?php echo $second_subblock_heading; ?>
                                                            </p>
                                                            <?php echo $second_subblock_content; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="block">
                                                            <p class="number">03</p>
                                                            <p class="text"><?php echo $third_subblock_heading; ?></p>
                                                            <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/skill.png" class="tabImage" alt="like">
                                                        </a>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p class="tab-heading">
                                                                <?php echo $third_subblock_heading; ?>
                                                            </p>
                                                            <?php echo $third_subblock_content; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="block">
                                                            <p class="number">04</p>
                                                            <p class="text"><?php echo $fourth_subblock_heading; ?></p>
                                                            <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/fun.png" class="tabImage" alt="like">
                                                        </a>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p class="tab-heading">
                                                                <?php echo $fourth_subblock_heading; ?>
                                                            </p>
                                                            <?php echo $fourth_subblock_content; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="block">
                                                            <p class="number">05</p>
                                                            <p class="text"><?php echo $fifth_subblock_heading; ?></p>
                                                            <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/joy.png" class="tabImage" alt="like">
                                                        </a>
                                                    </div>
                                                    <div id="collapseFive" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p class="tab-heading">
                                                                <?php echo $fifth_subblock_heading; ?>
                                                            </p>
                                                            <?php echo $fifth_subblock_content; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" class="block">
                                                            <p class="number">06</p>
                                                            <p class="text"><?php echo $sixth_subblock_heading; ?></p>
                                                            <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/work/garantee.png" class="tabImage" alt="like">
                                                        </a>
                                                    </div>
                                                    <div id="collapseSix" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p class="tab-heading">
                                                                <?php echo $sixth_subblock_heading; ?>
                                                            </p>
                                                            <?php echo $sixth_subblock_content; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <section id="advantages" class="common-margin">
                    <div class="container">
                        <h2 class="traditional-heading text-center">Наши преимущества</h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-5">
                                <div class="textBlock textBlockLeft">
                                    <p class="textHeading">Закрытые группы</p>
                                    <p class="point">Для нас важно сохранить <br> <span>индивидуальный подход к каждому</span>.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-offset-3 col-lg-4">
                                <div class="textBlock textBlockRight">
                                    <p class="textHeading">100% результат</p>
                                    <p class="point">Без пустых обещаний, только то, что работает! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fullWidthBlock">
                        <div class="half left">
                            <!-- <img src="build" alt="poster" class="poster"> -->
                        </div>
                        <div class="half right">
                            <p><span>Мы гарантируем 100% возврат<br> оплаты,</span> если ты не получишь<br> результат.</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
                                <p class="text text-center">Мы <span>перевернем твой взгляд</span> на процесс обучения и не дадим сойти с дистанции!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-md-offset-1 col-md-5">
                                <div class="percentWrapper percentWrapperLeft">
                                    <p class="percent text-center">
                                        80%
                                    </p>
                                    <p class="percentDescription text-center">
                                        практики
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-5">
                                <div class="percentWrapper">
                                    <p class="percent text-center">
                                        20%
                                    </p>
                                    <p class="percentDescription text-center">
                                        теории
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="coach" class="common-margin">
                    <div class="container">
                        <h2 class="traditional-heading text-center">О тренере</h2>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/coach/palko.png" alt="Iryna Palko" class="portrait">
                            </div>
                            <div class="col-sm-6 col-md-8">
                                <div class="textWrapper">
                                    <p class="description">
                                        <span>Ирина Палько</span> — человек, который изменил себя. <br>
                                        Прошла путь от застенчивого и неуверенного в себе человека до <span>открытого и харизматичного спикера!</span> 
                                    </p>
                                    <div class="coloredImage">
                                        <img src="<?php bloginfo("template_directory"); ?>/source/build/images/land/coach/palkoMob.png" alt="Iryna Palko">
                                    </div>
                                    <ul>
                                        <li>Мотивационный спикер.</li>
                                        <li>Основатель Школы Ораторского Искусства Ирины Палько.</li>
                                        <li>Создатель и руководитель проекта Motivational Breakfast.</li>
                                        <li>Создатель авторских программ по ораторскому искусству и презентациям, бизнес-этикету и личной эффективности.</li>
                                    </ul>
                                    <a href="//irinapalko.com/o-trenere/" class="link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <?php if( have_rows('seventh_screen') ):
                                    while( have_rows('seventh_screen') ): the_row(); 
                                            
                                        // vars
                                        $number_expierence = get_sub_field('number_expierence');
                                        $number_graduates = get_sub_field('number_graduates');
                                            
                                        $number_courses = get_sub_field('number_courses');
                                        $number_actions = get_sub_field('number_actions');
                                            
                                        ?>
                                            <div class="dataWrapperFlex dataWrapperTop">
                                                <div class="columnElement upperColumn">
                                                    <p>Практический опыт</p>
                                                    <p class="bottomInfo">более<br><span><?php echo $number_expierence; ?></span> лет</p>
                                                </div>
                                                <div class="columnElement upperColumn">
                                                    <p>Количество выпусников</p>
                                                    <p class="bottomInfo">более<br><span><?php echo $number_graduates; ?></span></p>
                                                </div>
                                                <div class="columnElement upperColumn">
                                                    <p>Проведенных курсов</p>
                                                    <p class="bottomInfo">более<br><span><?php echo $number_courses; ?></span></p>
                                                </div>
                                                <div class="columnElement upperColumn">
                                                    <p>Количество выступлений</p>
                                                    <p class="bottomInfo">более<br><span><?php echo $number_actions; ?></span></p>
                                                </div>
                                            </div>
                                            <div class="dataWrapperFlex dataWrapperBottom">
                                                <div class="columnElement bottomColumn">
                                                    <p class="bottomInfo">более<br><span><?php echo $number_expierence; ?></span> лет</p>
                                                </div>
                                                <div class="columnElement bottomColumn">
                                                    <p class="bottomInfo">более<br><span><?php echo $number_graduates; ?></span></p>
                                                </div>
                                                <div class="columnElement bottomColumn">
                                                    <p class="bottomInfo">более<br><span><?php echo $number_courses; ?></span></p>
                                                </div>
                                                <div class="columnElement bottomColumn">
                                                    <p class="bottomInfo">более<br><span><?php echo $number_actions; ?></span></p>
                                                </div>
                                            </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="programme" class="common-margin blue-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <h2 class="traditional-heading text-center">Программа</h2>
                                <p class="sub-heading text-center">это самый короткий путь к убедительной речи</p>
                                <div class="programmeWrapper">
                                    <h3 class="text">
                                        День программы
                                    </h3>
                                    <?php if( have_rows('eighth_screen_block') ):
                                        while( have_rows('eighth_screen_block') ): the_row(); 
                                                
                                            // vars
                                            $first_day_date = strtotime(get_sub_field('first_day_date'));
                                            $first_day_adress = get_sub_field('first_day_adress');
                                            $first_day_registration_time = get_sub_field('first_day_registration_time');
                                            $first_day_study_time_first = get_sub_field('first_day_study_time_first');
                                            $first_day_study_text_first = get_sub_field('first_day_study_text_first');
                                            $first_day_coffee_break = get_sub_field('first_day_coffee_break');
                                            $first_day_study_time_second = get_sub_field('first_day_study_time_second');
                                            $first_day_study_text_second = get_sub_field('first_day_study_text_second');
                                                
                                            $second_day_date = strtotime(get_sub_field('second_day_date'));
                                            $second_day_study_time_first = get_sub_field('second_day_study_time_first');
                                            $second_day_study_text_first = get_sub_field('second_day_study_text_first');
                                            $second_day_coffee_break = get_sub_field('second_day_coffee_break');
                                            $second_day_study_time_second = get_sub_field('second_day_study_time_second');
                                            $second_day_study_text_second = get_sub_field('second_day_study_text_second');

                                            $third_day_date = strtotime(get_sub_field('third_day_date'));
                                            $third_day_study_time_first = get_sub_field('third_day_study_time_first');
                                            $third_day_study_text_first = get_sub_field('third_day_study_text_first');
                                            $third_day_coffee_break = get_sub_field('third_day_coffee_break');
                                            $third_day_study_time_second = get_sub_field('third_day_study_time');
                                            $third_day_study_text_second = get_sub_field('third_day_study_text_second');

                                            $fourth_day_date = strtotime(get_sub_field('fourth_day_date'));
                                            $fourth_day_study_time_first = get_sub_field('fourth_day_study_time_first');
                                            $fourth_day_study_text_first = get_sub_field('fourth_day_study_text_first');
                                            $fourth_day_coffee_break = get_sub_field('fourth_day_coffee_break');
                                            $fourth_day_study_time_second = get_sub_field('fourth_day_study_time_second');
                                            $fourth_day_study_text_second = get_sub_field('fourth_day_study_text_second');

                                            $fifth_day_date = strtotime(get_sub_field('fifth_day_date'));
                                            $fifth_day_study_time_first = get_sub_field('fifth_day_study_time_first');
                                            $fifth_day_study_text_first = get_sub_field('fifith_day_study_text_first');
                                            $fifth_day_coffee_break = get_sub_field('fifth_day_coffee_break');
                                            $fifth_day_study_time_second = get_sub_field('fifth_day_study_time_second');
                                            $fifth_day_study_text_second = get_sub_field('fifth_day_study_text_second');

                                            $sixth_day_date = strtotime(get_sub_field('sixth_day_date'));
                                            $sixth_day_study_time_first = get_sub_field('sixth_day_study_time_first');
                                            $sixth_day_study_text_first = get_sub_field('sixth_day_study_text_first');
                                            $sixth_day_coffee_break = get_sub_field('sixth_day_coffee_break');
                                            $sixth_day_study_time_second = get_sub_field('sixth_day_study_time_second');
                                            $sixth_day_study_text_second = get_sub_field('sixth_day_study_text_second');

                                            $seventh_day_date = strtotime(get_sub_field('seventh_day_date'));
                                            $seventh_day_study_time_first = get_sub_field('seventh_day_study_time_first');
                                            $seventh_day_study_text_first = get_sub_field('seventh_day_study_text_first');
                                            $seventh_day_coffee_break = get_sub_field('seventh_day_coffee_break');
                                            $seventh_day_study_time_second = get_sub_field('seventh_day_study_time_second');
                                            $seventh_day_study_text_second = get_sub_field('seventh_day_study_text_second');
                                                
                                            ?>
                                            <div class="blockWrapperBottom hideTillVerticalTablet">
                                                <div class="block current" data-tab="tab-11">
                                                    <span>1</span>
                                                </div>
                                                <?php if( $second_day_study_time_first ): ?>
                                                    <div class="block" data-tab="tab-12">
                                                        <span>2</span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $third_day_study_time_first ): ?>
                                                    <div class="block" data-tab="tab-13">
                                                        <span>3</span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $fourth_day_study_time_first ): ?>
                                                    <div class="block" data-tab="tab-14">
                                                        <span>4</span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $fifth_day_study_time_first ): ?>
                                                    <div class="block" data-tab="tab-15">
                                                        <span>5</span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $sixth_day_study_time_first ): ?>
                                                    <div class="block" data-tab="tab-16">
                                                        <span>6</span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $seventh_day_study_time_first ): ?>
                                                    <div class="block" data-tab="tab-17">
                                                        <span>7</span>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="swiper-container daysWrapper hideFromVerticalTablet">
                                                <div class="swiper-wrapper blockWrapperBottom">
                                                    <div class="swiper-slide">
                                                        <div class="block current" data-tab="tab-11">
                                                            <span>1</span>
                                                        </div>
                                                    </div>
                                                    <?php if( $second_day_study_time_first ): ?>
                                                        <div class="swiper-slide">
                                                            <div class="block" data-tab="tab-12">
                                                                <span>2</span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $third_day_study_time_first ): ?>
                                                        <div class="swiper-slide">
                                                            <div class="block" data-tab="tab-13">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $fourth_day_study_time_first ): ?>
                                                        <div class="swiper-slide">
                                                            <div class="block" data-tab="tab-14">
                                                                <span>4</span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $fifth_day_study_time_first ): ?>
                                                        <div class="swiper-slide">
                                                            <div class="block" data-tab="tab-15">
                                                                <span>5</span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $sixth_day_study_time_first ): ?>
                                                        <div class="swiper-slide">
                                                            <div class="block" data-tab="tab-16">
                                                                <span>6</span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if( $seventh_day_study_time_first ): ?>
                                                        <div class="swiper-slide">
                                                            <div class="block" data-tab="tab-17">
                                                                <span>7</span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination hideFromVerticalTablet">
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                            <div class="contentWrapper">
                                                <div id="tab-11" class="tab-content-bottom current">
                                                    <h4 class="tab-heading text-center">
                                                        Дата события — <span class="date"><?php echo date_i18n('d F', $first_day_date); ?></span>
                                                    </h4>
                                                    <?php if( get_sub_field('first_day_adress') ): ?>
                                                        <div class="data-adreess">
                                                            <p><span>Адрес проведения:</span> <?php echo $first_day_adress; ?></p>
                                                        </div>
                                                    <?php endif; ?>
                                                   
                                                    <p class="dataPoint">
                                                        Регистрация на тренинг
                                                    </p>
                                                    <p class="time">
                                                        <?php echo $first_day_registration_time; ?>
                                                    </p>
                                                    <p class="dataPoint">
                                                        Обучение
                                                    </p>
                                                    <p class="time">
                                                        <?php echo $first_day_study_time_first; ?>
                                                    </p>
                                                    <?php echo $first_day_study_text_first; ?>
                                                    <p class="dataPoint">
                                                        Кофе-брейк
                                                    </p>
                                                    <p class="time">
                                                        <?php echo $first_day_coffee_break; ?>
                                                    </p>
                                                    <p class="dataPoint">
                                                        Обучение
                                                    </p>
                                                    <p class="time">
                                                        <?php echo $first_day_study_time_second; ?>
                                                    </p>
                                                    <?php echo $first_day_study_text_second; ?>
                                                    <button class="common-button-styles" href="#variaties">Узнать стоимость</button>
                                                </div>
                                                <?php if( $second_day_study_time_first ): ?>
                                                    <div id="tab-12" class="tab-content-bottom">
                                                        <h4 class="tab-heading text-center">
                                                            Дата события — <span class="date"><?php echo date_i18n('d F', $second_day_date); ?></span>
                                                        </h4>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $second_day_study_time_first; ?>
                                                        </p>
                                                        <?php echo $second_day_study_text_first; ?>
                                                        <p class="dataPoint">
                                                            Кофе-брейк
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $second_day_coffee_break; ?>
                                                        </p>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $second_day_study_time_second; ?>
                                                        </p>
                                                        <?php echo $second_day_study_text_second; ?>
                                                        <button class="common-button-styles" href="#variaties">Узнать стоимость</button>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $third_day_study_time_first ): ?>
                                                    <div id="tab-13" class="tab-content-bottom">
                                                        <h4 class="tab-heading text-center">
                                                            Дата события — <span class="date"><?php echo date_i18n('d F', $third_day_date); ?></span>
                                                        </h4>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $third_day_study_time_first; ?>
                                                        </p>
                                                        <?php echo $third_day_study_text_first; ?>
                                                        <p class="dataPoint">
                                                            Кофе-брейк
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $third_day_coffee_break; ?>
                                                        </p>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $third_day_study_time_second; ?>
                                                        </p>
                                                        <?php echo $third_day_study_text_second; ?>
                                                        <button class="common-button-styles" href="#variaties">Узнать стоимость</button>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $fourth_day_study_time_first ): ?>
                                                    <div id="tab-14" class="tab-content-bottom">
                                                        <h4 class="tab-heading text-center">
                                                            Дата события — <span class="date"><?php echo date_i18n('d F', $fourth_day_date); ?></span>
                                                        </h4>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $fourth_day_study_time_first; ?>
                                                        </p>
                                                        <?php echo $fourth_day_study_text_first; ?>
                                                        <p class="dataPoint">
                                                            Кофе-брейк
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $fourth_day_coffee_break; ?>
                                                        </p>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $fourth_day_study_time_second; ?>
                                                        </p>
                                                        <?php echo $fourth_day_study_text_second; ?>
                                                        <!-- <button class="common-button-styles" data-target="#modalForm" data-toggle="modal">Узнать стоимость</button> -->
                                                        <button class="common-button-styles" href="#variaties">Узнать стоимость</button>
                                                        
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $fifth_day_study_time_first ): ?>
                                                    <div id="tab-15" class="tab-content-bottom">
                                                        <h4 class="tab-heading text-center">
                                                            Дата события — <span class="date"><?php echo date_i18n('d F', $fifth_day_date); ?></span>
                                                        </h4>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $fifth_day_study_time_first; ?>
                                                        </p>
                                                        <?php echo $fifth_day_study_text_first; ?>
                                                        <p class="dataPoint">
                                                            Кофе-брейк
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $fifth_day_coffee_break; ?>
                                                        </p>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $fifth_day_study_time_second; ?>
                                                        </p>
                                                        <?php echo $fifth_day_study_text_second; ?>
                                                        <button class="common-button-styles" href="#variaties">Узнать стоимость</button>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $sixth_day_study_time_first ): ?>
                                                    <div id="tab-16" class="tab-content-bottom">
                                                        <h4 class="tab-heading text-center">
                                                            Дата события — <span class="date"><?php echo date_i18n('d F', $sixth_day_date); ?></span>
                                                        </h4>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $sixth_day_study_time_first; ?>
                                                        </p>
                                                        <?php echo $sixth_day_study_text_first; ?>
                                                        <p class="dataPoint">
                                                            Кофе-брейк
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $sixth_day_coffee_break; ?>
                                                        </p>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $sixth_day_study_time_second; ?>
                                                        </p>
                                                        <?php echo $sixth_day_study_text_second; ?>
                                                        <button class="common-button-styles" href="#variaties">Узнать стоимость</button>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if( $seventh_day_study_time_first ): ?>
                                                    <div id="tab-17" class="tab-content-bottom">
                                                        <h4 class="tab-heading text-center">
                                                            Дата события — <span class="date"><?php echo date_i18n('d F', $seventh_day_date); ?></span>
                                                        </h4>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $seventh_day_study_time_first; ?>
                                                        </p>
                                                        <?php echo $seventh_day_study_text_first; ?>
                                                        <p class="dataPoint">
                                                            Кофе-брейк
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $seventh_day_coffee_break; ?>
                                                        </p>
                                                        <p class="dataPoint">
                                                            Обучение
                                                        </p>
                                                        <p class="time">
                                                            <?php echo $seventh_day_study_time_second; ?>
                                                        </p>
                                                        <?php echo $seventh_day_study_text_second; ?>
                                                        <button class="common-button-styles" href="#variaties">Узнать стоимость</button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>			
                        </div>
                    </div>
                </section>
                <section id="gallery" class="single-activity-page common-margin">
                    <h2 class="traditional-heading text-center">Яркие моменты</h2>
                    <p class="sub-heading text-center">Обучайся с нами в кайф</p>
                    <?php if( have_rows('bright_moments') ):
                        while( have_rows('bright_moments') ): the_row(); 
                                       
                            // vars
                            $image_1 = get_sub_field('image_1');
                                        
                            $image_2 = get_sub_field('image_2');
                                        
                            $image_3 = get_sub_field('image_3');
                                                                                
                            $image_4 = get_sub_field('image_4');

                            $image_5 = get_sub_field('image_5');

                            $image_6 = get_sub_field('image_6');

                            $image_7 = get_sub_field('image_7');

                            $image_8 = get_sub_field('image_8');
                            
                            $image_9 = get_sub_field('image_9');

                            $image_10 = get_sub_field('image_10');
                        ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="main-gallery-block text-center">
                        <div class="gallery-block-wrapper">
                            <div class="gallery-block first-row">
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
                            </div>
                            <div class="gallery-block second-row">
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
                        </div>	
                        <a href="//irinapalko.com/galereya/oratorskoe-iskusstvo/" class="common-button-styles">Посмотреть больше</a>
                    </div>
                </section>
                <section id="feedback-slider" class="index-feedback-slider common-margin section-testimonials fix-bg break">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="traditional-heading text-center">Истории успеха и<br> отзывы</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 ">
                                <div class="slider slider-nav">
                                    <?php
                                        $args = array(
                                            'posts_per_page' => -1,
                                            'post_type' => 'reviews',
                                            'reviews_category' => 'oratorskoe-iskusstvo-review',
                                            'orderby' => 'date',
                                            'order' => 'DESC',
                                        ); 
                                        $posts_smth_1 = new WP_Query( $args );
                                        while ( $posts_smth_1->have_posts() ) : $posts_smth_1->the_post();?>
                                            <div class="slider-nav-content">
                                                <?php 
                                                    $thumb_id = get_post_thumbnail_id();
                                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                                                ?>
                                                <img src="<?php echo $thumb_url[0]; ?>" alt='Аватар'>
                                            </div>
                                            <?php 
                                        endwhile; 
                                        wp_reset_postdata();
							            wp_reset_query();
                                    ?>
                                </div>
                            </div>
                            <div class="col-xs-7 col-md-offset-1 col-md-6">
                                <div class="slider slider-for">
                                    <?php
                                        $args = array(
                                            'posts_per_page' => -1,
                                            'post_type' => 'reviews',
                                            'reviews_category' => 'oratorskoe-iskusstvo-review',
                                            'orderby' => 'date',
                                            'order' => 'DESC',
                                        ); 
                                        $posts_smth_2 = new WP_Query( $args );
                                        while ( $posts_smth_2->have_posts() ) : $posts_smth_2->the_post();?>
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
                                        wp_reset_postdata();
							            wp_reset_query();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section id="variaties" class="common-margin">
                    <div class="container">
                        <div class="row">
                            <h2 class="traditional-heading text-center">Пакеты обучения</h2>
                            <div class="col-12">
                                <?php if( have_rows('ninth_screen') ):
                                    while( have_rows('ninth_screen') ): the_row(); 
                                            
                                        // vars
                                        $first_price_batch_name = get_sub_field('first_price_batch_name');
                                        $first_price_batch_date = strtotime(get_sub_field('first_price_batch_date'));
                                        $first_price_batch_full_value = get_sub_field('first_price_batch_full_value');
                                        $first_price_batch_promo_value = get_sub_field('first_price_batch_promo_value');
                                        $first_price_batch_list = get_sub_field('first_price_batch_list');
                                            
                                        $second_price_batch_name = get_sub_field('second_price_batch_name');
                                        $second_price_batch_date = strtotime(get_sub_field('second_price_batch_date'));
                                        $second_price_batch_full_value = get_sub_field('second_price_batch_full_value');
                                        $second_price_batch_promo_value = get_sub_field('second_price_batch_promo_value');
                                        $second_price_batch_list = get_sub_field('second_price_batch_list');

                                        $third_price_batch_name = get_sub_field('third_price_batch_name');
                                        $third_price_batch_date = strtotime(get_sub_field('third_price_batch_date'));
                                        $third_price_batch_full_value = get_sub_field('third_price_batch_full_value');
                                        $third_price_batch_promo_value = get_sub_field('third_price_batch_promo_value');
                                        $third_price_batch_list = get_sub_field('third_price_batch_list');

                                        $now = date('j.n.Y');
                                            
                                        ?>
                                        <div class="variatyWrapper">
                                            <div class="variaty">
                                                <div class="priceWrapper">
                                                    <?php if (strtotime($now) < $first_price_batch_date) : ?>
                                                        <p class="smallText text-center">
                                                            Успей оплатить <span>до <?php echo date_i18n('j.n.Y', $first_price_batch_date); ?></span> по сниженной цене
                                                        </p>
                                                        <p class="price text-center">
                                                            <span><?php echo $first_price_batch_promo_value; ?></span> UAH
                                                        </p>
                                                        <p class="price text-center">
                                                            <?php echo $first_price_batch_full_value; ?> UAH
                                                        </p>
                                                    <?php else : ?>
                                                        <p class="price text-center" style="margin: auto;">
                                                            <span><?php echo $first_price_batch_full_value; ?></span> UAH
                                                        </p>
                                                    <?php endif;  ?>
                                                </div>
                                                <div class="variatyData">
                                                    <p class="variatyName">
                                                        пакет <br><span><?php echo $first_price_batch_name; ?></span>
                                                    </p>
                                                </div>
                                                <?php echo $first_price_batch_list ?>
                                                <button class="common-button-styles" data-target="#modalFormStandart" data-toggle="modal">Я иду</button>
                                            </div>
                                            <div class="variaty active optimal">
                                                <div class="priceWrapper">
                                                    <?php if (strtotime($now) < $second_price_batch_date) : ?>
                                                        <p class="smallText text-center">
                                                            Успей оплатить <span>до <?php echo date_i18n('j.n.Y', $second_price_batch_date); ?></span> по сниженной цене
                                                        </p>
                                                        <p class="price text-center">
                                                            <span><?php echo $second_price_batch_promo_value; ?></span> UAH
                                                        </p>
                                                        <p class="price text-center">
                                                            <?php echo $second_price_batch_full_value; ?> UAH
                                                        </p>
                                                    <?php else : ?>
                                                        <p class="price text-center" style="margin: auto;">
                                                            <span><?php echo $second_price_batch_full_value; ?></span> UAH
                                                        </p>
                                                    <?php endif;  ?>
                                                </div>
                                                <div class="variatyData">
                                                    <p class="variatyName">
                                                        пакет <br><span><?php echo $second_price_batch_name; ?></span>
                                                    </p>
                                                </div>
                                                <?php echo $second_price_batch_list ?>
                                                <button class="common-button-styles" data-target="#modalFormOptimal" data-toggle="modal">Я иду</button>       
                                            </div>
                                            <div class="variaty">
                                                <div class="priceWrapper">
                                                    <?php if (strtotime($now) < $third_price_batch_date) : ?>
                                                        <p class="smallText text-center">
                                                            Успей оплатить <span>до <?php echo date_i18n('j.n.Y', $third_price_batch_date); ?></span> по сниженной цене
                                                        </p>
                                                        <p class="price text-center">
                                                            <span><?php echo $third_price_batch_promo_value; ?></span> UAH
                                                        </p>
                                                        <p class="price text-center">
                                                            <?php echo $third_price_batch_full_value; ?> UAH
                                                        </p>
                                                    <?php else : ?>
                                                        <p class="price text-center" style="margin: auto;">
                                                            <span><?php echo $third_price_batch_full_value; ?></span> UAH
                                                        </p>
                                                    <?php endif;  ?>
                                                </div>
                                                <div class="variatyData">
                                                    <p class="variatyName">
                                                        пакет <br><span><?php echo $third_price_batch_name; ?></span>
                                                    </p>
                                                </div>
                                                <?php echo $third_price_batch_list ?>
                                                <button class="common-button-styles" data-target="#modalFormPremium" data-toggle="modal">Я иду</button>
                                            </div>
                                            
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>	
                        </div>
                        <!-- <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10">
                                <p class="motto text-center">
                                    Когда откладывание дел, приводило тебя к результатам?<br>
                                    <span>Не жди подходящего момента.</span> Если ты дочитал до конца, значит тебе это действительно нужно. <span>Я иду!</span>
                                </p>
                            </div>
                        </div> -->
                    </div>
                </section>
                <?php echo get_template_part( 'parts/clients' ); ?>
                <section id="variaties" class="common-margin">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10">
                                <p class="motto text-center">
                                    Когда откладывание дел, приводило тебя к результатам?<br>
                                    <span>Не жди подходящего момента.</span> Если ты дочитал до конца, значит тебе это действительно нужно. <span>Я иду!</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <section id="order-form" class="land-order-form common-margin">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-text">
                                        <p class="top-form-text">сделай первый <br> шаг <span>к развитию</span></p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-block text-center">
                                        <h2 class="upper-text">Оставьте заявку сейчас</h2>
                                        <?php echo do_shortcode('[contact-form-7 id="205" title="Карточка товара"]');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="modalFormOrder" class="recall modal fade in">
                        <div class="modal-dialog">
                            <div class="modal-content modal-content-form">
                                <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                <div class="form-block text-center">
                                    <h2 class="form-upper-text">Это первый шаг к<br> изменению твоей жизни</h2>
                                    <?php echo do_shortcode('[contact-form-7 id="205" title="Карточка товара"]');?>
                                </div>				
                            </div>
                        </div>
                    </div>
                    <div id="modalFormStandart" class="recall modal fade in">
                        <div class="modal-dialog">
                            <div class="modal-content modal-content-form">
                                <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                <div class="form-block text-center">
                                    <h2 class="form-upper-text">Это первый шаг к<br> изменению твоей жизни</h2>
                                    <?php echo do_shortcode('[contact-form-7 id="841" title="Мероприятия. Пакет Стандарт"]');?>
                                </div>				
                            </div>
                        </div>
                    </div>
                    <div id="modalFormOptimal" class="recall modal fade in">
                        <div class="modal-dialog">
                            <div class="modal-content modal-content-form">
                                <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                <div class="form-block text-center">
                                    <h2 class="form-upper-text">Это первый шаг к<br> изменению твоей жизни</h2>
                                    <?php echo do_shortcode('[contact-form-7 id="842" title="Мероприятия. Пакет Оптимальный"]');?>
                                </div>				
                            </div>
                        </div>
                    </div>
                    <div id="modalFormPremium" class="recall modal fade in">
                        <div class="modal-dialog">
                            <div class="modal-content modal-content-form">
                                <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                <div class="form-block text-center">
                                    <h2 class="form-upper-text">Это первый шаг к<br> изменению твоей жизни</h2>
                                    <?php echo do_shortcode('[contact-form-7 id="844" title="Мероприятия. Пакет Премиум"]');?>
                                </div>				
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'reviews',
                        'reviews_category' => 'oratorskoe-iskusstvo-review',
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
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'reviews',
                        'reviews_category' => 'oratorskoe-iskusstvo-review',
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
                <?php if( have_rows('fifth_screen_block') ):
                    while( have_rows('fifth_screen_block') ): the_row(); 
                                        
                        // vars
                        $first_subblock_heading = get_sub_field('first_subblock_heading');
                        $first_subblock_content = get_sub_field('first_subblock_content');
                                        
                        $second_subblock_heading = get_sub_field('second_subblock_heading');
                        $second_subblock_content = get_sub_field('second_subblock_content');
                                        
                        $third_subblock_heading = get_sub_field('third_subblock_heading');
                        $third_subblock_content = get_sub_field('third_subblock_content');
                                                                                
                        $fourth_subblock_heading = get_sub_field('fourth_subblock_heading');
                        $fourth_subblock_content = get_sub_field('fourth_subblock_content');

                        $fifth_subblock_heading = get_sub_field('fifth_subblock_heading');
                        $fifth_subblock_content = get_sub_field('fifth_subblock_content');

                        $sixth_subblock_heading = get_sub_field('sixth_subblock_heading');
                        $sixth_subblock_content = get_sub_field('sixth_subblock_content');
                        ?>
                        <div id="modalFormTab1" class="modalFormTab recall modal fade in">
                            <div class="modal-dialog">
                                <div class="modal-content modal-content-form">
                                    <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                    <div id="tab-1" class="tab-content tab-content-work current">
                                        <p class="tab-heading">
                                            <?php echo $first_subblock_heading; ?>
                                        </p>
                                        <?php echo $first_subblock_content; ?>
                                    </div>		
                                </div>
                            </div>
                        </div>
                        <div id="modalFormTab2" class="modalFormTab recall modal fade in">
                            <div class="modal-dialog">
                                <div class="modal-content modal-content-form">
                                    <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                    <div id="tab-2" class="tab-content tab-content-work">
                                        <p class="tab-heading">
                                            <?php echo $second_subblock_heading; ?>
                                        </p>
                                        <?php echo $second_subblock_content; ?>
                                    </div>	
                                </div>
                            </div>
                        </div>
                        <div id="modalFormTab3" class="modalFormTab recall modal fade in">
                            <div class="modal-dialog">
                                <div class="modal-content modal-content-form">
                                    <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                    <div id="tab-3" class="tab-content tab-content-work">
                                        <p class="tab-heading">
                                            <?php echo $third_subblock_heading; ?>
                                        </p>
                                        <?php echo $third_subblock_content; ?>
                                    </div>	
                                </div>
                            </div>
                        </div>
                        <div id="modalFormTab4" class="modalFormTab recall modal fade in">
                            <div class="modal-dialog">
                                <div class="modal-content modal-content-form">
                                    <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                    <div id="tab-4" class="tab-content tab-content-work">
                                        <p class="tab-heading">
                                            <?php echo $fourth_subblock_heading; ?>
                                        </p>
                                        <?php echo $fourth_subblock_content; ?>
                                    </div>	
                                </div>
                            </div>
                        </div>
                        <div id="modalFormTab5" class="modalFormTab recall modal fade in">
                            <div class="modal-dialog">
                                <div class="modal-content modal-content-form">
                                    <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                    <div id="tab-5" class="tab-content tab-content-work">
                                        <p class="tab-heading">
                                            <?php echo $fifth_subblock_heading; ?>
                                        </p>
                                        <?php echo $fifth_subblock_content; ?>
                                    </div>		
                                </div>
                            </div>
                        </div>
                        <div id="modalFormTab6" class="modalFormTab recall modal fade in">
                            <div class="modal-dialog">
                                <div class="modal-content modal-content-form">
                                    <button class="close-button" type="button" data-dismiss="modal" aria-hidden="true"></button>
                                    <div id="tab-6" class="tab-content tab-content-work">
                                        <p class="tab-heading">
                                            <?php echo $sixth_subblock_heading; ?>
                                        </p>
                                        <?php echo $sixth_subblock_content; ?>
                                    </div>		
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
        <?php endwhile; ?>
    <?php endif; ?>

<?php
    get_footer();