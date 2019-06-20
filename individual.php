<?php
    /*
    Template Name: Индивидуальное обучение
    */
?>
<?php get_header(); ?>
<?php

    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);

?>
<section id="individualIntro" class="commonIntroElements" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
	<div class="container fullHeigth">
		<div class="row fullHeigth">
			<div class="col-xs-12 col-md-offset-1 col-md-10 fullHeigth flex-additional-wrap">
				<h1 class="text-center">Индивидуальное обучение</h1>
			</div>
		</div>
	</div>
	<button class="common-button-styles" data-target="#modalForm" data-toggle="modal">Оставить заявку</button>
    <a class="downArrow bounce" href="#individual">
		<img alt="downArrow" class="blue-arrow" src="<?php bloginfo("template_directory"); ?>/source/build/images/common/arrowDownBlue.svg" />
	</a>
</section>
<?php echo get_template_part( 'parts/menu' ); ?>
<section id="individual">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="traditional-heading text-center">Индивидуальное обучение</h2>
                <p class="sub-heading text-center">по оратоскому искусству — это:</p>
                <div id="tab-1" class="tab-content tab-content-work current">
					<p class="tab-heading text-center">
						1. Индивидуальный подход
					</p>
				</div>
				<div id="tab-2" class="tab-content tab-content-work">
					<p class="tab-heading text-center">
						2. Быстрый результат
					</p>
				</div>
				<div id="tab-3" class="tab-content tab-content-work">
					<p class="tab-heading text-center">
						3. Максимальное количество практики
					</p>
				</div>
				<div id="tab-4" class="tab-content tab-content-work">
					<p class="tab-heading text-center">
						4. Постановка правильной уверенной речи
					</p>
				</div>
				<div id="tab-5" class="tab-content tab-content-work">
					<p class="tab-heading text-center">
						5. Не возможно не делать
					</p>
				</div>
				<div id="tab-6" class="tab-content tab-content-work">
					<p class="tab-heading text-center">
						6. Видеозапись всех выступлений
					</p>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="blockWrapper">
					<div class="block current" data-tab="tab-1" data-target="#modalFormTab1" data-toggle="modal">
						<p class="number">1.</p>
						<svg width="50" height="65" viewBox="0 0 50 65" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.02087 11.264L12.993 14.7689C11.4123 17.1056 10.5876 19.7859 10.5876 22.6036C10.5876 30.3008 16.8416 36.6235 24.6075 36.6235C32.3735 36.6235 38.6274 30.3695 38.6274 22.6036C38.6274 19.8546 37.8027 17.1056 36.2908 14.8377L43.3007 11.5389V24.8715L41.1703 29.4074C41.0328 29.751 41.0328 30.0946 41.239 30.3695C41.4452 30.6444 41.7888 30.8506 42.1324 30.8506H46.1872C46.5308 30.8506 46.8745 30.7132 47.0119 30.3695C47.2181 30.0946 47.2181 29.751 47.0806 29.4074L45.2251 24.8715V10.6454C45.2251 10.0956 45.1563 9.68329 44.1942 9.27094C43.988 9.20221 25.0886 0.817748 25.0886 0.817748C24.8137 0.680298 24.5388 0.680298 24.2639 0.817748L5.02087 9.33966C4.67724 9.47711 4.40234 9.88946 4.40234 10.3018C4.40234 10.7142 4.60852 11.0578 5.02087 11.264ZM36.497 22.6036C36.497 29.2012 31.1364 34.5618 24.5388 34.5618C17.9412 34.5618 12.5806 29.2012 12.5806 22.6036C12.5806 20.0608 13.4053 17.6554 14.8486 15.5936L24.1952 19.7859C24.3326 19.8546 24.4701 19.8546 24.6075 19.8546C24.745 19.8546 24.8824 19.8546 25.0199 19.7859L34.229 15.6624C35.741 17.7241 36.497 20.1295 36.497 22.6036ZM43.7131 28.7889L44.1942 27.758L44.6065 28.7889H43.7131ZM24.6762 2.8795L41.3764 10.3018L24.6762 17.7241L7.97605 10.3018L24.6762 2.8795Z"/>
							<path d="M24.9498 39.0977C11.5484 39.0977 0.621094 50.0249 0.621094 63.4263C0.621094 63.9761 1.10217 64.4572 1.65197 64.4572H48.2476C48.7974 64.4572 49.2785 63.9761 49.2785 63.4263C49.2785 50.0249 38.3512 39.0977 24.9498 39.0977ZM2.75157 62.3955C3.30137 50.5747 13.0603 41.1594 25.0185 41.1594C36.9767 41.1594 46.6669 50.6435 47.2167 62.3955H2.75157Z"/>
						</svg>
					</div>
					<div class="block" data-tab="tab-2" data-target="#modalFormTab2" data-toggle="modal">
						<p class="number">2.</p>
						<svg width="53" height="66" viewBox="0 0 53 66"xmlns="http://www.w3.org/2000/svg">
							<path d="M46.4466 11.9462L47.2683 8.68327H50.854C51.5263 8.68327 52.0492 8.13945 52.0492 7.44025V2.002C52.0492 1.3028 51.5263 0.758972 50.854 0.758972H2.07413C1.40181 0.758972 0.878906 1.3028 0.878906 2.002V7.44025C0.878906 8.13945 1.40181 8.68327 2.07413 8.68327H5.65978L6.48149 11.9462C8.57313 20.9582 14.7733 28.1056 23.1399 31.2908V34.243C14.848 37.4283 8.64783 44.5757 6.48149 53.5877L5.43568 57.6275H2.07413C1.40181 57.6275 0.878906 58.1713 0.878906 58.8705V64.3088C0.878906 65.008 1.40181 65.5518 2.07413 65.5518H50.854C51.5263 65.5518 52.0492 65.008 52.0492 64.3088V58.8705C52.0492 58.1713 51.5263 57.6275 50.854 57.6275H47.4924L46.5213 53.51C44.2803 44.5757 38.0801 37.4283 29.7883 34.243V31.2908C38.0801 28.1056 44.2803 20.9582 46.4466 11.9462ZM3.26934 3.24503H49.5841V6.11953H3.26934V3.24503ZM49.6588 63.0657H3.34405V60.1912H49.6588V63.0657ZM28.2942 36.1853C36.2873 38.9044 42.2634 45.6634 44.2803 54.1315L45.102 57.6275H7.75142L8.57313 54.1315C10.6648 45.6634 16.6409 38.9044 24.5592 36.1853C25.0074 36.0299 25.3062 35.5638 25.3062 35.0976V30.5139C25.3062 30.0478 25.0074 29.5817 24.5592 29.4263C16.6409 26.5518 10.6648 19.8705 8.64783 11.4024L7.97552 8.68327H44.9526L44.2803 11.4024C42.2634 19.8705 36.2873 26.5518 28.2942 29.3486C27.846 29.504 27.5472 29.9701 27.5472 30.4363V35.0199C27.5472 35.5637 27.846 36.0299 28.2942 36.1853Z"/>
						</svg>
					</div>
					<div class="block" data-tab="tab-3" data-target="#modalFormTab3" data-toggle="modal">
						<p class="number">3.</p>
						<svg width="65" height="65" viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg">
							<path d="M53.5991 21.2184V19.2011C56.1162 17.7069 57.7449 14.9425 57.7449 11.954V8.36782C57.7449 3.73563 54.0433 0 49.4533 0C44.8633 0 41.0877 3.73563 41.0877 8.36782V11.954C41.0877 14.8678 42.5683 17.5575 45.0854 19.0517V21.2184C43.9749 21.5172 42.9385 21.9655 41.9021 22.5632C40.2733 18.7529 36.4977 16.0632 32.1298 16.0632C27.836 16.0632 24.2084 18.6034 22.5057 22.3391C21.5433 21.8908 20.5809 21.4425 19.6185 21.2184V19.2011C22.1355 17.7069 23.7642 14.9425 23.7642 11.954V8.36782C23.7642 3.73563 20.0626 0 15.4727 0C10.8827 0 7.18109 3.73563 7.18109 8.36782V11.954C7.18109 14.8678 8.66173 17.5575 11.1788 19.0517V21.2184C4.51595 23.1609 0 29.2126 0 36.2356C0 36.8333 0.518223 37.3563 1.11048 37.3563H23.0239C23.0979 37.3563 23.172 37.3563 23.246 37.3563C24.1344 38.7759 25.3929 39.9713 26.8736 40.8678V44.2299C18.0638 46.6207 12.0672 54.6149 12.0672 63.8793C12.0672 64.477 12.5854 65 13.1777 65H51.3041C51.8964 65 52.4146 64.477 52.4146 63.8793C52.4146 54.6897 46.1219 46.546 37.3861 44.2299V41.0172C38.9408 40.1207 40.1993 38.9253 41.1617 37.431H63.8895C64.4818 37.431 65 36.9081 65 36.3103C64.926 29.2874 60.1879 23.0862 53.5991 21.2184ZM2.22096 35.1897C2.66515 29.3621 6.81093 24.5805 12.5114 23.2356C13.0296 23.0862 13.3998 22.6379 13.3998 22.1149V18.3793C13.3998 17.931 13.1777 17.5575 12.8075 17.408C10.7346 16.3621 9.40205 14.2701 9.40205 11.954V8.36782C9.40205 5.00575 12.1412 2.24138 15.4727 2.24138C18.8041 2.24138 21.5433 5.00575 21.5433 8.36782V11.954C21.5433 14.2701 20.1367 16.4368 18.0638 17.4828C17.6936 17.6322 17.3975 18.0805 17.3975 18.5287V22.1149C17.3975 22.6379 17.7677 23.0862 18.2859 23.2356C19.5444 23.5345 20.7289 23.9828 21.8394 24.5805C21.6913 25.3276 21.6173 26.0747 21.6173 26.8966V31.6782C21.6173 32.8736 21.8394 34.069 22.2096 35.1897H2.22096ZM35.7574 39.2989C35.3872 39.4483 35.0911 39.8966 35.0911 40.3448V45.1264C35.0911 45.6494 35.4613 46.0977 35.9795 46.2471C43.8269 47.9655 49.6014 54.8391 50.1196 62.8333H14.2882C14.7323 54.8391 20.3588 48.1149 28.2061 46.3218C28.7244 46.1724 29.0945 45.7241 29.0945 45.2011V40.2701C29.0945 39.8218 28.8724 39.4483 28.5023 39.2989C25.615 37.8793 23.8383 34.9655 23.8383 31.7529V26.9713C23.8383 22.2644 27.6139 18.5287 32.2039 18.5287C36.7938 18.5287 40.5695 22.3391 40.5695 26.9713V31.6782C40.5695 34.8908 38.7187 37.8793 35.7574 39.2989ZM42.1982 35.1897C42.5683 34.069 42.7904 32.8736 42.7904 31.6782V26.8966C42.7904 26.2241 42.7164 25.477 42.5683 24.8793C43.7528 24.1322 45.0854 23.6092 46.418 23.3103C46.9362 23.1609 47.3064 22.7126 47.3064 22.1897V18.454C47.3064 18.0057 47.0843 17.6322 46.7141 17.4828C44.6412 16.4368 43.3087 14.3448 43.3087 12.0287V8.44253C43.3087 5.08046 46.0478 2.31609 49.3793 2.31609C52.7107 2.31609 55.4499 5.08046 55.4499 8.44253V12.0287C55.4499 14.3448 54.0433 16.5115 51.9704 17.5575C51.6002 17.7069 51.3041 18.1552 51.3041 18.6034V22.1897C51.3041 22.7126 51.6743 23.1609 52.1925 23.3103C57.8929 24.5805 62.1128 29.5115 62.631 35.2644L42.1982 35.1897Z" />
						</svg>					
					</div>
					<div class="block" data-tab="tab-4" data-target="#modalFormTab4" data-toggle="modal">
						<p class="number">4.</p>
						<svg width="60" height="65" viewBox="0 0 60 65" xmlns="http://www.w3.org/2000/svg">
							<path d="M24.9382 25.9867C31.8194 25.9867 37.4427 20.1262 37.4427 12.9548C37.4427 5.78339 31.8194 0 24.9382 0C18.057 0 12.4336 5.78339 12.4336 12.9548C12.4336 20.1262 18.057 25.9867 24.9382 25.9867ZM24.9382 2.31336C30.5615 2.31336 35.223 7.09429 35.223 12.9548C35.223 18.8153 30.6355 23.6733 24.9382 23.6733C19.2408 23.6733 14.6533 18.8153 14.6533 12.9548C14.6533 7.09429 19.2408 2.31336 24.9382 2.31336Z"/>
							<path d="M58.6013 49.66H55.2717V31.9243C55.2717 31.6158 55.1977 31.3074 54.9757 31.1532L52.2381 28.0687C53.1259 26.2951 52.682 24.0589 51.2022 22.7479L48.1685 20.049C47.2806 19.2779 46.1707 18.8923 45.0609 19.0466C43.951 19.1237 42.9151 19.6635 42.1752 20.5888C40.6954 22.4395 40.9173 25.2926 42.6931 26.8349L45.7268 29.5338C46.5407 30.2278 47.5026 30.6134 48.4645 30.6134C49.2784 30.6134 50.0923 30.382 50.7582 29.9194L53.052 32.4641V49.66H46.7627C46.4667 37.5534 36.9218 27.8373 25.3051 27.8373C13.6144 27.8373 4.06954 37.5534 3.84756 49.66H1.10987C0.517941 49.66 0 50.1998 0 50.8167V63.4631C0 64.08 0.517941 64.6198 1.10987 64.6198H58.6753C59.2672 64.6198 59.7852 64.08 59.7852 63.4631V50.8167C59.7112 50.1998 59.1933 49.66 58.6013 49.66ZM47.1326 27.7602L44.099 25.0613C43.2111 24.2902 43.1371 22.9793 43.877 22.0539C44.247 21.5913 44.6909 21.3599 45.2828 21.2828C45.3568 21.2828 45.4308 21.2828 45.4308 21.2828C45.8748 21.2828 46.3927 21.437 46.7627 21.8226L49.7963 24.5215C50.6842 25.2926 50.7582 26.6035 50.0183 27.5289C49.2784 28.3771 48.0205 28.5313 47.1326 27.7602ZM25.2311 30.0736C35.6639 30.0736 44.247 38.7872 44.4689 49.5829H5.99332C6.28928 38.7872 14.7983 30.0736 25.2311 30.0736ZM57.4915 62.3064H2.14576V51.9734H57.4915V62.3064Z"/>
						</svg>
					</div>
					<div class="block" data-tab="tab-5" data-target="#modalFormTab5" data-toggle="modal">
						<p class="number">5.</p>
						<svg width="43" height="65" viewBox="0 0 43 65" xmlns="http://www.w3.org/2000/svg">
							<path d="M35.1642 4.92549C30.1853 0.796233 23.631 -0.846909 17.1851 0.416081C8.50731 2.11606 1.53777 9.48805 0.23657 18.3437C-0.824778 25.5703 1.72627 32.7873 7.06088 37.6503C9.4645 39.8412 10.9146 42.9968 11.1449 46.537C11.1493 46.6012 11.1618 46.6632 11.1757 46.7245V57.8257C11.1757 58.4369 11.6679 58.9329 12.2759 58.9329H13.3725C13.8192 62.1505 16.1693 64.6145 18.9998 64.6145H23.9948C26.8253 64.6145 29.1746 62.1505 29.6213 58.9329H30.7179C31.3252 58.9329 31.8181 58.4369 31.8181 57.8257V46.5473C31.8181 46.5451 31.8188 46.5429 31.8188 46.5399C31.8188 43.2463 33.3048 40.0656 36.0041 37.5839C40.4504 33.4959 43 27.6815 43 21.6322C43.0007 15.1453 40.1446 9.05549 35.1642 4.92549ZM17.6069 25.9394H15.9162C14.9839 25.9394 14.2255 25.1761 14.2255 24.2379C14.2255 23.2997 14.9839 22.5365 15.9162 22.5365C16.8485 22.5365 17.6069 23.2997 17.6069 24.2379V25.9394ZM25.3884 24.2379C25.3884 23.2997 26.1468 22.5365 27.0798 22.5365C28.012 22.5365 28.7705 23.2997 28.7705 24.2379C28.7705 25.1761 28.012 25.9394 27.0798 25.9394H25.3906L25.3884 24.2379ZM24.726 47.5682H29.6184V56.7184H28.6113C28.6091 56.7184 28.6069 56.7177 28.604 56.7177C28.601 56.7177 28.5996 56.7184 28.5966 56.7184H14.3979C14.3957 56.7184 14.3935 56.7177 14.3906 56.7177C14.3876 56.7177 14.3862 56.7184 14.3832 56.7184H13.3769V47.5682H23.9141H24.726ZM19.8073 45.3537V28.1539H23.1938L23.2187 45.3537H19.8073ZM23.9948 62.4H18.9998C17.3582 62.4 15.98 60.9208 15.5986 58.9329H27.3952C27.0145 60.9208 25.6363 62.4 23.9948 62.4ZM34.5202 35.9496C31.6802 38.5604 29.999 41.8644 29.6844 45.3537H25.4185L25.3942 28.1539H27.0798C29.2252 28.1539 30.9709 26.3971 30.9709 24.2379C30.9709 22.0788 29.2252 20.322 27.0798 20.322C24.9336 20.322 23.1879 22.0788 23.1879 24.2394L23.1901 25.9394H19.8073V24.2379C19.8073 22.0788 18.0616 20.322 15.9162 20.322C13.7708 20.322 12.0251 22.0788 12.0251 24.2379C12.0251 26.3971 13.7708 28.1539 15.9162 28.1539H17.6069V45.3537H13.2265C12.76 41.6592 11.1258 38.367 8.53738 36.0086C3.74921 31.6432 1.45928 25.1606 2.41281 18.6671C3.57978 10.7245 9.82684 4.11352 17.6047 2.58922C23.405 1.45393 29.2949 2.9273 33.7633 6.63433C38.2346 10.3421 40.7988 15.8089 40.7988 21.633C40.8003 27.0614 38.5111 32.2802 34.5202 35.9496Z"/>
						</svg>
					</div>
					<div class="block" data-tab="tab-6" data-target="#modalFormTab6" data-toggle="modal">
						<p class="number">6.</p>
						<svg width="70" height="63" viewBox="0 0 70 63" xmlns="http://www.w3.org/2000/svg">
							<path d="M67.7534 3.3728C66.5045 2.81386 65.1134 3.07291 64.1388 4.04021L50.2041 17.4434V6.30917C50.2041 2.83045 47.4882 0 44.1502 0H6.05388C2.71592 0 0 2.83045 0 6.30917V35.9982C0 39.3697 2.63143 42.1121 5.86653 42.1121H23.9584L15.6784 60.7168C15.3943 61.3561 15.66 62.1154 16.2735 62.4115C16.44 62.4931 16.6151 62.5302 16.7878 62.5302C17.2494 62.5302 17.6914 62.2558 17.8996 61.7913L25.8759 43.8694L33.8522 61.7913C34.0592 62.2558 34.5012 62.5302 34.9628 62.5302C35.1355 62.5302 35.3106 62.4931 35.4771 62.4115C36.0906 62.1154 36.3575 61.3561 36.0722 60.7168L27.7935 42.1121H43.8698C47.362 42.1121 50.2041 39.1503 50.2041 35.5095V25.2979L64.0653 39.1043C64.7155 39.7794 65.5506 40.1354 66.4126 40.1354C66.8449 40.1354 67.282 40.0474 67.7069 39.8649C68.9767 39.32 69.7959 38.04 69.7959 36.6031V6.61416C69.7959 5.17852 69.0135 3.93557 67.7534 3.3728ZM47.7551 35.5095C47.7551 37.7427 46.0126 39.5599 43.8698 39.5599H25.9212C25.9188 39.5599 25.9163 39.5599 25.9139 39.5599H25.8392C25.8355 39.5599 25.8306 39.5599 25.8269 39.5599H5.86653C3.98204 39.5599 2.44898 37.9622 2.44898 35.9982V6.30917C2.44898 4.23801 4.06653 2.55225 6.05388 2.55225H44.1502C46.1375 2.55225 47.7551 4.23801 47.7551 6.30917V35.5095ZM67.3469 36.6031C67.3469 37.2118 66.9098 37.4466 66.7751 37.5041C66.6086 37.5768 66.1775 37.698 65.7918 37.2935L50.4747 22.0387C50.2959 21.8511 50.2004 21.5997 50.2041 21.333C50.2077 21.0663 50.3106 20.82 50.4833 20.649L65.8139 5.90208C66.0208 5.69662 66.2375 5.63665 66.42 5.63665C66.5792 5.63665 66.7126 5.68386 66.7886 5.71704C66.9184 5.77574 67.3469 6.01438 67.3469 6.61416V36.6031Z"/>
							<path d="M22.2053 20.0646C22.8739 18.851 23.2621 17.4485 23.2621 15.9516C23.2621 11.3779 19.6915 7.65674 15.3029 7.65674C10.9144 7.65674 7.34375 11.3779 7.34375 15.9516C7.34375 20.5253 10.9144 24.2465 15.3029 24.2465C17.3686 24.2465 19.247 23.4157 20.6625 22.0656L22.3964 23.8726C22.6351 24.1214 22.9486 24.2465 23.2621 24.2465C23.5756 24.2465 23.889 24.1214 24.1278 23.8726C24.6066 23.3736 24.6066 22.5671 24.1278 22.0681L22.2053 20.0646ZM15.3029 21.6942C12.265 21.6942 9.79272 19.1177 9.79272 15.9516C9.79272 12.7855 12.265 10.209 15.3029 10.209C18.3409 10.209 20.8131 12.7855 20.8131 15.9516C20.8131 16.7364 20.66 17.4842 20.3845 18.167L18.0054 15.6874C17.5266 15.1885 16.7527 15.1885 16.2739 15.6874C15.7952 16.1864 15.7952 16.9929 16.2739 17.4919L18.9201 20.2496C17.949 21.1378 16.6927 21.6942 15.3029 21.6942Z"/>
						</svg>							
					</div>
				</div>
            </div>
        </div>
    </div>
</section>
<section id="format" class="common-margin">
	<h2 class="traditional-heading text-center">
		Формат обучения
	</h2>
	<?php if( have_rows('format') ):
        while( have_rows('format') ): the_row();                          
            // vars
            $heading_1 = get_sub_field('first_third_heading');
            $text_content_1 = get_sub_field('first_third_content');          
            $heading_2 = get_sub_field('second_third_heading');
            $text_content_2 = get_sub_field('second_third_content');                  
            $heading_3 = get_sub_field('third_third_heading');
            $text_content_3 = get_sub_field('third_third_content');                                                          
            
    	?>
        <?php endwhile; ?>
	<?php endif; ?>
	<div class="big-column-wrapper">
		<div class="column-wrapper">
			<div class="column">
				<div class="text-block">
					<p><?php echo $heading_1 ?></p>
					<?php echo $text_content_1 ?>
				</div>
			</div>
			<div class="column">
				<div class="text-block">
					<p><?php echo $heading_2 ?></p>
					<?php echo $text_content_2 ?>
				</div>
			</div>
			<div class="column">
				<div class="text-block">
					<p><?php echo $heading_3 ?></p>
					<?php echo $text_content_3 ?>
				</div>
			</div>
		</div>
	</div>
	
</section>
<section id="coach" class="individual-coach">
	<div class="container">
		<h2 class="traditional-heading text-center">О тренере</h2>
		<p class="description text-center hideFromHorizontalTablet">
			<span>Ирина Палько</span> - человек, который изменил себя. От неуверенного и застенчивого <span>до харизматичного и уверенного спикера и лидера.</span> 
		</p>
		<img class="hideFromVerticalTablet" src="<?php bloginfo("template_directory"); ?>/source/build/images/individual/palko-coach.png" alt="Palko">
		<div class="row">
			<!-- <div class="col-sm-6 col-md-5">
			</div> -->
			<div class="col-sm-offset-6 col-md-offset-5 col-sm-6 col-md-7">
				<div class="textWrapper">
					<p class="description hide-xs">
						<span>Ирина Палько</span> - человек, который изменил себя. <br>
						От неуверенного и застенчивого <span>до харизматичного и уверенного спикера и лидера.</span> 
					</p>
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
	</div>
</section>
<section id="blueCounter" class="individual-blueCounter common-margin">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="cell-wrapper">
                    <div class="cell text-center">
                        <p class="num">
                            <span class="statvalue" numx="12">0</span>
                        </p>
                        <p class="subtitle">лет опыта</p>
                    </div>
                    <div class="cell text-center">
                        <p class="num">
                            <span class="statvalue" numx="6000">0</span>
                            +
                        </p>
                        <p class="subtitle">выпускников</p>
                    </div>
                    <div class="cell text-center">
                        <p class="num">
                            <span class="statvalue" numx="1700">0</span>
                            +
                        </p>
                        <p class="subtitle">выступлений</p>
                    </div>
                    <div class="cell text-center">
                        <p class="num">
                            <span class="statvalue" numx="1600">0</span>
                        </p>
                        <p class="subtitle">курсов</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="clients" class="common-margin">
	<div class="container">
		<h2 class="traditional-heading text-center">Основные клиенты <br> и первые лица компаний</h2>
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
							$posts = new WP_Query( $args );
							while ( $posts->have_posts() ) : $posts->the_post();?>
									<div class="swiper-slide">
										<?php 
											$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
										?>
										<img src="<?php echo $thumb_url[0]; ?>" class="logo" alt="logo">
									</div>
								<?php 
							endwhile; 
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
<section id="success-feedback" class="common-margin blue-section">
    <div class="container">
		<h2 class="traditional-heading text-center">Отзывы</h2>
		<p class="sub-heading text-center">О нас говорят:</p>
        <div class="row">
            <div class="col-xs-12">
                <div class="feedback-big-wrapper owl-carousel">
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
                            <div class="feedback-wrapper text-center">
                                    
                                <?php 
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                                ?>
                                <div class="avatar" style="background-image: url(<?php echo $thumb_url[0]; ?>)">
                                </div>
                                    <!-- <img class="avatar" src=""> -->
                                <p class="name"><?php the_title() ?></p>
                                <p class="description">
                                    <?php echo the_field('position') ?>
                                </p>
                                <a class="read-request" data-target="#<?php the_ID(); ?>" data-toggle="modal">читать отзыв</a>
                            </div>
                            <?php 
                        endwhile; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="order-form" class="individual-order-form common-margin">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-offset-1 col-md-10">
				<h2 class="text-center">Когда откладывание дел, приводило тебя к результатам?<br><span>Не жди подходящего момента.</span> Если ты дочитал до конца, значит тебе это действительно нужно. <span>Я иду!</span></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-text">
					<p class="top-form-text">сделай первый <br> шаг <span>к изменению своей жизни</span></p>
				</div>
			</div>
			<?php echo get_template_part( 'parts/form' ); ?>
		</div>
	</div>
</section>
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
get_footer();
