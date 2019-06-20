<section id="menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'items_wrap' => '<ul id="%1$s" class="menu-list %2$s ">%3$s</ul>', 'container' => false) ); ?>
                <!-- <ul class="menu-list">
                    <li>
                        <a href="#">О Тренере</a>
                    </li>
                    <li>
                        <a href="#">Расписание</a>
                    </li>
                    <li>
                        <a href="#">Программы</a>
                    </li>
                    <li>
                        <a href="#">Мотивационные завтраки</a>
                    </li>
                    <li>
                        <a href="#">Блог</a>
                    </li>
                    <li>
                        <a href="#">Галерея</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
</section>