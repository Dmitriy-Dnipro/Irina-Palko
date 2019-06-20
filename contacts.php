<?php
    /*
    Template Name: Контакты
    */
?>
<?php get_header(); ?>

<section id="contacts-intro" class="commonIntroElements">
	<div class="container fullHeigth">
		<div class="row fullHeigth">
			<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth">
				<h1 class="text-center">Контакты</h1>
				<p class="sub-text text-center">Пиши, звони, приходи в гости</p>
			</div>
		</div>
	</div>
	<a class="downArrow bounce" href="#contacts-body">
		<img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source/build/images/common/arrowDownBlue.svg" />
	</a>
</section>
<?php echo get_template_part( 'parts/menu' ); ?>
<section id="contacts-body">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5">
				<div id="mapDnipro" class="map">
				</div>
				<div class="basic-information text-center">
					<ul class="address">
						<li>
							<p>Адрес</p>
						</li>
						<li>
							<p><span class="name">Днепр</span><br>ул. Якова Самарского 12а</p>
						</li>
					</ul>
					<ul class="address">
						<li>
							<p>Телефон</p>
						</li>
						<li>
							<p>По вопросам обучения <br> <!-- <span class="name">Валерия</span> --> <a href="tel:0958099060">+38 095 809 90 60</a></p>
						</li>
						<li>
							<p>По вопросам сотрудничества <br> <span class="name">Валерия</span> <span class="email">successfulorator@gmail.com</span><!-- <a href="tel:+380664171122">+38 066 417 11 22</a> --></p>
						</li>
					</ul>
					<ul class="schedule">
						<li>
							<p>Время работы</p>
						</li>
						<li>
							<p>Понедельник — Пятница: 9:00 — 18:00<br>Суббота: 10:00 — 17:00</p>
						</li>
					</ul>
					<ul class="email">
						<li>
							<p>E-mail</p>
						</li>
						<li>
							<p>Ораторское искусство и коммуникации<br><span class="email">successfulorator@gmail.com</span></p>
						</li>
						<li>
							<p>Мотивационные Завтраки<br><span class="email">motivational.breakfast@gmail.com</span></p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-offset-2 col-md-5">
				<div id="mapKyiv" class="map">
				</div>
				<div class="basic-information text-center">
					<ul class="address">
						<li>
							<p>Адрес</p>
						</li>
						<li>
							<p><span class="name">Киев</span><br></p>
						</li>
					</ul>
					<ul class="address">
						<li>
							<p>Телефон</p>
						</li>
						<li>
							<p>По вопросам обучения <br> <!-- <span class="name">Валерия</span> --> <a href="tel:0958099060">+38 095 809 90 60</a></p>
						</li>
						<li>
							<p>По вопросам сотрудничества <br> <span class="name">Валерия</span> <span class="email">successfulorator@gmail.com</span><!-- <a href="tel:+380664171122">+38 066 417 11 22</a> --></p>
						</li>
					</ul>
					<ul class="schedule">
						<li>
							<p>Время работы</p>
						</li>
						<li>
							<p>Понедельник — Пятница: 9:00 — 18:00<br>Суббота: 10:00 — 17:00</p>
						</li>
					</ul>
					<ul class="email">
						<li>
							<p>E-mail</p>
						</li>
						<li>
							<p>Ораторское искусство и коммуникации<br><span class="email">successfulorator@gmail.com</span></p>
						</li>
						<li>
							<p>Мотивационные Завтраки<br><span class="email">motivational.breakfast@gmail.com</span></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<p class="connect-us text-center">Присоединяйся:</p>
		<div class="social-media-block">
			<a class="social-network instagram" href="//www.instagram.com/palko_oratory_school" target="_blank"></a>
			<a class="social-network facebook" href="//www.facebook.com/palkooratoryschool" target="_blank"></a>
			<a class="social-network youtube" href="//www.youtube.com/channel/UC4stPrBzrmIG0cHTMI4YchA" target="_blank"></a>
		</div>
	</div>
</section>


<?php
get_footer();
