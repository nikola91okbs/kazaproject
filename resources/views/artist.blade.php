<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $artist->title ?? 'Artist name' }}</title>
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/css/style.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="/css/slick.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="/css/slick-theme.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="/css/slimmenu.min.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="/css/jquery.arcticmodal-0.3.css">
	<link rel="stylesheet" type="text/css" href="/css/simple.css">
	<link rel="stylesheet" type="text/css" href="/css/fonts/fonts.css?v=154"/>	
	<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox.css" media="screen" />
	
	<style>
        .b9-banners {
			text-align: center;
		}
		.number_head {
			text-align: center;
			margin-top: 5px;
			color: #B94E62;
			font-size: 18px;
			font-weight: bold;
			margin-right: 15px;
			text-decoration: none;
		}

		.modal2 {
		    background: rgba(0, 0, 0, .5);
		    position: fixed;
		    top: 0;
		    left: 0;
		    right: 0;
		    bottom: 0;
		    z-index: 100;
		    display: none
		}

		.modal2.\--show {
		    display: -webkit-box;
		    display: -ms-flexbox;
		    display: flex
		}

		.modal2 .col-xl-12, .modal2 .container, .modal2 .row {
		    height: 100%
		}

		.modal2 .col-xl-12 {
		    display: -webkit-box;
		    display: -ms-flexbox;
		    display: flex
		}

		.modal2__wrap {
		    margin: auto;
		    background: #fff;
		    border-radius: 5px;
		    position: relative
		}

		.modal2__close {
		    width: 30px;
		    height: 30px;
		    border-radius: 50%;
		    position: absolute;
		    top: -15px;
		    right: -15px;
		    background: #fff
		}

		.modal2__close:after {
		    content: "";
		    display: block;
		    cursor: pointer;
		    background: url(/images/close.svg) no-repeat 50%;
		    width: 10px;
		    height: 10px;
		    position: absolute;
		    top: 10px;
		    left: 10px
		}
		/*
		.modal2__body {
			width: 700px;
			height: 350px;
		}
		*/
		.mscbWindow2 {
		    all: initial;
		    position: fixed;
		    left: 0; top: 0;
		    width: 100%;
		    height: 100%;
		    background: rgba(0,0,0,.75);
		    display:none;
		    z-index: 20000 !important;
		}

		.mscbWindow_layout2 {
		    all: initial;
		    display: table-cell;
		    text-align: center;
		}

		.ab-a-textarea input{
			color: #363636;
		    font-size: 16px;
		    font-family: 'Marmelad', sans-serif;
		    resize: none;
		    border: 1px solid #878787;
		    border-radius: 5px;
		    /*width: calc(100% - 32px);*/
		    padding: 10px;
		    outline: 0;
		    margin-top: 10px;
		    margin-left: 15px;
		}

		.ab-a-send {
			padding-top: 0px;
			padding-bottom: 15px;
		}

		.b1-image-in .b1-search {
			padding-top: 50px;
		}

		@media (max-width: 992px) {
			#logo_mobile {
				display: block !important;
			}
		}

		.b1-image-in {
		    height: 275px !important;
		}

		.nb-search_art{
			display: inline-block;
		    vertical-align: top;
			position: relative;
		}
		.nb-search_art input{
			font-size: 16px;
		    color: #363636;
		    font-family: 'Marmelad', sans-serif;
		    display: block;
		    width: 582px;
		    height: 42px;
		    outline: 0;
		    background: #fff;
		    border: 1px solid #878787;
		    border-radius: 2px;
		    padding: 0 47px 0 22px;
		}
		.nb-search_art>a{
			position: absolute;
		    right: 3px;
		    top: 4px;
		}
		.nb-drop_art{
			display: none;
			position: absolute;
		    width: calc(100% - 32px);
		    top: 43px;
		    background: #fff;
		    border-right: 1px solid #878787;
		    border-left: 1px solid #878787;
		    border-bottom: 1px solid #878787;
		    border-radius: 0 0 2px 2px;
		    padding: 0 15px;
		    font-size: 0;
		}
    </style>
</head>
<body>
	<div class="top-banner">
		<a onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();">
<video autoplay muted loop id="myVideo3" style="width: 100%;">
	<source src="https://www.1show.kz/main_top_banner.mp4" type="video/mp4">
</video>
		</a>
	</div>
	<div class="main-block-in">
	<div class="block0">
    <div class="wrap">
			<div class="b1-up">
				<div class="b1-logo"><a href="/"><img src="/images/b1-logo.png" alt="" id="fix-logo" />
					<div class="b1-desc" id="fix-desc">
						<b style="display: none;" id="logo_mobile">
							<a onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();" class="mindsalesTrunkNumber"></a>
						</b>
					</div>
				</div>
				<div class="b1-center">
					<div class="b1-menu">
						<ul>
							<li><a href="/spasibo_chto_interesuetes_nami">О нас</a></li>
							<!-- <li><a href="/reviews">Отзывы</a></li> -->
							<li><a href="/catalogs">Каталог</a></li>
							<li><a href="/portfolio_1show_kz">Наши Работы</a></li>
							<!--
								<li><a href="/articles">Статьи</a></li>
								<li><a href="/forum">Форум</a></li>
							-->
							<li><a href="/contacts">Контакты</a></li>
							<!--
								<li><a style="color: #e68a00" href="/reklama_na_saite_1show_kz">Рекламодателям</a></li> 
								<li><a style="color: #2eb7dd" href="/news/2323/luchshie_svadby_2018_goda_s_1show_kz">Шоурум 1show.kz</a></li>
							-->

							<li><a href="/reviews">Отзывы</a></li>
							
						</ul>
					</div>
					<div class="number_head">
						<a onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();" class="number_head mindsalesTrunkNumber"></a>
					</div>
					<div class="b1-soc">
						<!--
						<a href="https://vk.com/1showkz"><img src="/images/vk.png" alt="вконтакте" /></a>
						<a href="https://www.facebook.com/1showkz"><img src="/images/fb.png" alt="facebook" /></a>
						<a href="https://twitter.com/1showkz"><img src="/images/tw.png" alt="twitter" /></a>
						-->
						<a href="https://www.youtube.com/user/1showkz"><img src="/images/yt.png" alt="youtube" /></a>
						<a href="https://instagram.com/1show_kz/"><img src="/images/inst.png" alt="instagram" /></a>
					</div>
				</div>
				<div class="b1-login">
				<!--
					<a href="https://www.1show.kz/news/2377/vy-artist-i-vam-nuzhny-zakazy-v-astane-vy-po-adresu">Подать анкету</a>
				-->
					<span class="login-bt">Вход</span>
					<a href="/signup">Создать анкету</a>
				</div>
				<div class="b1-log mob"><a class="login-bt"><img src="/images/log-mob.png" alt="" /></a></div>
				<div class="mob">
					<ul class="slimmenu">
						<li><a href="/spasibo_chto_interesuetes_nami">О нас</a></li>
							<!-- <li><a href="/reviews">Отзывы</a></li> -->
							<li><a href="/catalogs">Каталог</a></li>
							<li><a href="/portfolio_1show_kz">Наши Работы</a></li>
							<!--
								<li><a href="/articles">Статьи</a></li>
								<li><a href="/forum">Форум</a></li>
							-->
							<li><a href="/contacts">Контакты</a></li>
							<!--
								<li><a style="color: #e68a00" href="/reklama_na_saite_1show_kz">Рекламодателям</a></li> 
								<li><a style="color: #2eb7dd" href="/news/2323/luchshie_svadby_2018_goda_s_1show_kz">Шоурум 1show.kz</a></li>
							-->

							<li><a href="/reviews">Отзывы</a></li>
							
						<li class="bsm-soc">
							<a href="https://vk.com/1showkz"><img src="/images/vk.png" alt="вконтакте" /></a>
							<a href="https://www.facebook.com/1showkz"><img src="/images/fb.png" alt="facebook" /></a>
							<a href="https://twitter.com/1showkz"><img src="/images/tw.png" alt="twitter" /></a>
							<a href="https://www.youtube.com/user/1showkz"><img src="/images/yt.png" alt="youtube" /></a>
							<a href="https://instagram.com/1show_kz/"><img src="/images/inst.png" alt="instagram" /></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="block1">
		<div class="b1-image-in hide-sm">
			<div class="wrap">
				<div class="b1-search">Поиск исполнителя в каталоге</div>
				<div class="b1-form">
				<form action="/catalog" method="GET">
					<select name="city_id" class="b1-s2" id="cc">
						<option value="0">Все города</option>
						<optgroup label="Акмолинская область">
	<option value="67">Акмол</option><option value="51">Кокшетау</option><option value="35">Нур-Султан</option>
</optgroup><optgroup label="Алматинская область">
	<option value="36">Алматы</option><option value="52">Талдыкорган</option>
</optgroup><optgroup label="Актюбинская область">
	<option value="39">Актобе</option>
</optgroup><optgroup label="Атырауская область">
	<option value="47">Атырау</option>
</optgroup><optgroup label="ВКО">
	<option value="42">Семей</option><option value="43">Усть-Каменогорск</option>
</optgroup><optgroup label="Жамбылская область">
	<option value="40">Тараз</option>
</optgroup><optgroup label="ЗКО">
	<option value="45">Уральск</option>
</optgroup><optgroup label="Карагандинская область">
	<option value="63">Жезказган</option><option value="38">Караганда</option><option value="50">Темиртау</option>
</optgroup><optgroup label="Костанайская область">
	<option value="46">Костанай</option>
</optgroup><optgroup label="Кызылординская область">
	<option value="44">Кызылорда</option>
</optgroup><optgroup label="Мангистауская область">
	<option value="49">Актау</option>
</optgroup><optgroup label="Павлодарская область">
	<option value="41">Павлодар</option><option value="64">Экибастуз</option>
</optgroup><optgroup label="СКО">
	<option value="48">Петропавловск</option>
</optgroup><optgroup label="ЮКО">
	<option value="37">Шымкент</option>
</optgroup><optgroup label="Другие страны">
	<option value="69">Австрия</option><option value="71">Бишкек</option><option value="72">Великобритания</option><option value="55">Екатеринбург (Россия)</option><option value="70">Кения</option><option value="53">Киев (Украина)</option><option value="73">Милан</option><option value="61">Минск (Беларусь)</option><option value="54">Москва (Россия)</option><option value="68">Нидерланды</option><option value="60">Новосибирск (Россия)</option><option value="62">Омск (Россия)</option><option value="58">Самара (Россия)</option><option value="59">Санкт-Петербург (Россия)</option><option value="56">Ташкент (Узбекистан)</option><option value="57">Харьков (Украина)</option>
</optgroup>
					</select>
					<select name="cat_id" id="ct">
						<option value="0">Все категории</option>
						<optgroup label="Артисты">
	<option value="1">Ведущие</option><option value="2">Танцевальные коллективы</option><option value="3">Оригинальный жанр</option><option value="4">ВИА</option><option value="5">Инструменталисты</option><option value="6">Вокалисты</option><option value="7">Детям</option><option value="8">DJ (Диджеи)</option><option value="10">Звезды</option><option value="30">Блоггеры</option>
</optgroup><optgroup label="Услуги">
	<option value="9">Фото и видео</option><option value="11">Рестораны</option><option value="12">Режиссеры</option><option value="13">Транспортные услуги</option><option value="14">Аренда оборудования</option><option value="15">Ателье</option><option value="16">Выездная регистрация</option><option value="17">Национальные обряды</option><option value="18">Оформление </option><option value="19">Салоны красоты</option><option value="20">Кондитерские изделия</option><option value="21">Свадебные салоны</option><option value="22">Студии звукозаписи</option><option value="23">Ювелирные салоны</option><option value="24">Event компании</option>
</optgroup>
					</select>
					<button>Найти</button>
				</form>

				<div class="b1-dropsearch">
	            <div class="nb-search">
	              <input type="text" name="search" class="drop-search" id="drop-search" placeholder="Поиск по имени или названию анкеты" autocomplete="off">
	              <span><img src="/images/news/spisok_icon_poisk.png" alt="поиск"></span>
	              <div class="nb-drop" style="display: none;"></div>
	            </div>
	          </div>

				</div>
			</div>
		</div>
	</div>
	<div class="sidebar">
		<div class="wrap">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная<span></a><meta itemprop="position" content="0" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/catalogs"><span itemprop="name">Каталог</span></a><meta itemprop="position" content="1" /></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/catalog/instrumentalisty"><span itemprop="name">{{ $artist->category_id ?? 'Artist group' }}</span></a><meta itemprop="position" content="2" /></li><li><span>{{ $artist->title ?? 'Artist name' }}</span></li>
			</ul>
		</div>
	</div>
<div itemscope itemtype="http://schema.org/Product">
	<div class="anketa-block">


		<div class="wrap" style="display: flex; justify-content: flex-end">
      
      
            
      
    <div style="float:right;margin:  0 0 20px;">
    <div class="nb-search">
              <input type="text" name="search" id="drop-search" placeholder="Поиск по каталогу" autocomplete="off" style="width: auto;">
              <a><img src="/images/news/spisok_icon_poisk.png" alt=""></a>
              <style>
              .nb-d-link {
                max-width: calc(100% - 85px);
                color: #ea6780;
                text-decoration: none;
                font-size: 16px;
              }
              .nb-drop {
                z-index: 1;
              }

            	@media (max-width: 992px) {
					#drop-search {
						margin-top: 35px;
					}
				}
              </style>
              <div class="nb-drop" style="display: none;"></div>
              
            </div>
    </div>
    </div>


		<div class="wrap">
			<div class="ab-card">
				<div class="ab-up">
					<div class="ab-name mob">{{ $artist->title ?? 'Artist name' }}</div>
					<div class="ab-number mob"></div>
					<div class="ab-avatar"><img src='{{ asset($artist->image ?? '/images/artist.png') }}' alt="{{ $artist->title ?? 'Artist name' }}"></div>
					<div class="ab-info">
						<div class="ab-right">
							<div class="ab-number pc"></div>

							<!--
							<div class="ab-cost" onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();">узнать гонорар</div>
							-->

							<div class="ab-cost" onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus(); document.getElementsByClassName('mscbHeader__title')[0].innerText='Хочешь узнать гонорар - мы подскажем!'; document.getElementsByClassName('mscbHeader__subtitle')[0].innerText='';" style="margin-bottom: 75px;"><div class="ab-a-send modal2-button"><button type="button">Узнать гонорар!</button></div></div>

							<div class="ab-rating" style="background:url(/images/star_sprite.png);width:0px;height:15px;"></div>
							<div class="ab-data">
								<div class="ab-view">Просмотров: {{ $artist->views ?? '0' }}</div>
								<div class="ab-age">На сайте: {{ $artist->created_at ?? '1 day' }}</div>
								<div class="ab-comments">Комментариев: 0</div>
							</div>
						</div>
						
						<div class="ab-left">
							<div class="ab-name pc" itemprop="name">{{ $artist->title ?? 'Artist name' }}</div>
							<div class="ab-line">
								<div class="ab-punkt">Локация:</div>
								<div class="ab-answer">{{ $artist->location ?? 'No location' }}</div>
							</div>
							<div class="ab-line"><div class="ab-punkt">Состав</div><div class="ab-answer"><span>соло</span></div></div>
							<div  class="ab-contact"><a>Показать контакты</a></div>
							<!--
							<div class="ab-contact"><a>Не дозвонились нужному артисту?</a></div>
							-->

							<br/>
							
							<br/>
							<div class="ab-ring"><a onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();">Не дозвонились нужному артисту?</a></div>
						</div>
					</div>
				</div>
				<div class="ab-down social" data-url="https://www.1show.kz/ankets/3011" data-title="{{ $artist->title ?? 'Artist name' }}">
					<span>Поделиться анкетой с друзьями:</span>
					<a data-id="vk"><img src="/images/vk.png" alt="" /></a>
					<a data-id="fb"><img src="/images/fb.png" alt="" /></a>
					<a data-id="tw"><img src="/images/tw.png" alt="" /></a>
					<a data-id="ok"><img src="/images/ok.png" alt="" /></a>
					<a data-id="gp"><img src="/images/gp.png" alt="" /></a>
				</div>
			</div>
			
						<div class="ab-description">
				<div class="ab-sub-title">Описание</div>
				<p>{{ $artist->description ?? 'No description yet.' }}</p>
			</div>
			
			
		</div>
	</div>
	<div class="ab-media">
		<div class="wrap">
						<div class="ab-photo">
				<div class="ab-sub-title">Фото</div>
				<div class="ab-gallery grid">
					@foreach($artist->images as $img)
													<div class="grid-item"><a class="fancybox" rel="gallery" href="{{ asset($img->image ?? '/images/artist.png') }}"><img src="{{ asset($img->image ?? '/images/artist.png') }}" alt=""></a></div>
					@endforeach
				</div>
				<!--div class="ab-watch"><a href="#">Показать ещё</a></div-->
			</div>
						<div class="ab-video">
				<div class="ab-sub-title">Видео</div>
				<div class="ab-sbor">
										<div class="ab-mov big"><iframe src="{{ $artist->video ?? 'https://www.youtube.com/embed/OGaS19IyGqE'}}" frameborder="0" allowfullscreen=""></iframe></div>
				</div>
			</div>
			
						<div class="ab-more">
				<div class="ab-title">РЕКОМЕНДУЕМ</div>
				<div class="cb-sep"><img src="/images/b2-sep.png" alt=""></div>
				<div class="ab-m-box">
										<div>
						<a href="/ankets/467">
							<div class="ab-m-block">
								<div class="ab-m-ava"><img src='/data/photos/467/467a.jpg' alt="Трио «АРТ Домбыра»"></div>
								<div class="ab-m-name">Трио «АРТ Домбыра»</div>
							</div>
						</a>
					</div>					<div>
						<a href="/ankets/447">
							<div class="ab-m-block">
								<div class="ab-m-ava"><img src='/data/photos/447/447_igor_saxa.jpg' alt="Тайна саксофона. Игорь SAX"></div>
								<div class="ab-m-name">Тайна саксофона. Игорь SAX</div>
							</div>
						</a>
					</div>					<div>
						<a href="/ankets/460">
							<div class="ab-m-block">
								<div class="ab-m-ava"><img src='/data/photos/460/460a.jpg' alt="Мәжіт Мерей"></div>
								<div class="ab-m-name">Мәжіт Мерей</div>
							</div>
						</a>
					</div>					<div>
						<a href="/ankets/452">
							<div class="ab-m-block">
								<div class="ab-m-ava"><img src='/data/photos/452/452a.jpg' alt="Инструментальный проект «Тумар»"></div>
								<div class="ab-m-name">Инструментальный проект «Тумар»</div>
							</div>
						</a>
					</div>
				</div>
			</div>
				<div class="ab-com">
				<div class="ab-short"><span>Рейтинг анкеты: 0</span><span>Комментариев: 0</span></div>
				<div class="ab-title">Комментарии</div>
				<div class="cb-sep"><img src="/images/b2-sep.png" alt=""></div>
				<div class="ab-c-box">
					<div class="ab-many">В данный момент у анкеты нет отзывов, но вы можете <b>стать первым!</b></div>
				</div>
				<div class="ab-c-add">
					<div class="ab-sub-title">Написать отзыв</div>
					<div id="comments_add" class="ab-a-form">
						<form id="data" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="anket_id" value="3011">
                            <input type="hidden" name="action" value="commentsadd">
                            <input type="hidden" name="token" value="PgU5PIGbc0Rx68AZSCDA2ENoBD8lTy74">
<style>
.ab-a-input{
	color: #363636;
    font-size: 16px;
    font-family: 'Marmelad', sans-serif;
    resize: none;
    border: 1px solid #878787;
    border-radius: 5px;
    width: calc(100% - 32px);
    height: 22px;
    padding: 15px;
    outline: 0;
    margin-bottom: 15px;
}
</style>

							<div class="ab-a-up">
								<div class="ab-a-ava"><img src="/images/otzyvy/text_people_icon_min.png" alt=""></div>
								<div class="ab-a-rating"><span style="float:left;">Ваша <br>оценка:</span> <input name="rating" value="" id="rating-stars" type="hidden"></div>
							</div>					
							<div class="ab-a-down">
								<div>
									<input class="ab-a-input" type="text" name="email" placeholder="Ваша почта">
								</div>
								<div class="ab-a-textarea">
									<textarea placeholder="Ваш комментарий..." name="content" style="box-sizing: content-box;"></textarea>
									<!--a href="#" class="smile"><img src="/images/anketa/smile.png" alt=""></a-->
								</div>
								<div class="message-box"></div>
								<div class="ab-a-last">
									<div class="ab-a-send"><button type="submit">Отправить</button></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>

	<div class="block9">
		<div class="wrap">
			<div class="b9-banners">
				
			</div>
			<div class="b9-cont">
				<div class="b9-left">
					<div class="b9-info">
						<div class="b9-logo"><a href="/"><img src="/images/f-logo.png" alt="" /></a></div>
						<div class="b9-copyright">© 2020 Event агентство 1show.kz<br/>Все права защищены. Копирование, перепечатка, размещение и публикация материалов сайта 1Show.kz без упоминания первоисточника запрещена!</div>
						<div class="b9-full mob"><a href="#">Полная версия сайта</a></div>
					</div>
					<div class="b9-menu1">
						<ul>
							<li><a href="/polzovatelskoe_soglashenie">Пользовательское соглашение</a></li>
							<!-- <li><a href="#">Политика конфиденциальности</a></li> -->
							<li><a href="/news/2485/pochemu-reklamu-zakazyvayut-v-1showkz">Заказать рекламу</a></li>
							<!-- <li><a href="/reklama_na_saite_1show_kz">Рекламодателям</a></li> -->
						</ul>
					</div>
					<div class="b9-menu2">
						<ul>
							<!-- <li><a href="#">Франшиза от 1show.kz</a></li> -->
							<li><a href="/vakansii">Вакансии</a></li>
							<li><a href="/instrukciya_dlya_polzovatelei_portala">Инструкция для пользователей</a></li>
						</ul>
					</div>
				</div>
				<div class="b9-soc">
					<a href="https://vk.com/1showkz"><img src="/images/vk.png" alt="вконтакте" /></a>
					<a href="https://www.facebook.com/1showkz"><img src="/images/fb.png" alt="facebook" /></a>
					<a href="https://twitter.com/1showkz"><img src="/images/tw.png" alt="twitter" /></a>
					<a href="https://www.youtube.com/user/1showkz"><img src="/images/yt.png" alt="youtube" /></a>
					<a href="https://instagram.com/1show.kz/"><img src="/images/inst.png" alt="instagram" /></a>
				</div>
			</div>
		</div>
	</div>

		<div class="popup login-box">
			<div class="auth">
				<div class="pop-box">
					<div class="pop-big-title">Авторизуйтесь!</div>
					<div class="pop-title">Чтобы войти в личный кабинет</div>
					<div class="pop-sep"><img src="/images/b2-sep.png" alt="" /></div>
					<form class="pop-auth">
						<input type="hidden" name="authtoken" value="PgU5PIGbc0Rx68AZSCDA2ENoBD8lTy74">
						<input type="hidden" name="action" value="login">
						<input type="hidden" name="mode" value="1">
						<input type="text" name="login" required="" placeholder="E-mail" />
						<input type="password" name="password" required="" placeholder="Пароль" />
						<div class="info-message"></div>
						<button type="submit" id="submit_auth" onclick="submitauth();return false;">Войти</button>
						<a href="/sendpass" class="back">Восстановить доступ</a>
					</form>
					<div class="pop-nr">
						<div class="pop-nr-title">Еще не зарегистрированы?</div>
						<div class="pop-nr-link"><a href="/signup">Зарегистрироваться</a></div>
					</div>
				</div>
			</div>
		</div>		<div class="popup cropper-box">
			<div class="auth">
				<div class="pop-box">
					<div class="pop-title">Редактирование картинки-аватара</div>
					<div class="pop-edit">
						<div class="img-container">
						  <img id="image" class="image" src="" style="max-height:400px">
						</div>
					</div>
					<div class="pop-success">
						<a id="saveimage"  class="arcticmodal-close">Сохранить</a>
					</div>
				</div>
			</div>
		</div>		<div class="popup contacts-box">
			<div class="auth">
				<div class="pop-box">
					<div class="pop-title">Контакты</div>
					<div class="pop-sep"><img src="/images/b2-sep.png" alt="" /></div>
					<div class="pop-contact">
						<div class="pop-phone mindsalesTrunkNumber"></div>
						<div class="pop-place">Астана, ул. Казанат 1/1, 3 этаж</div>
						<div class="pop-site"><a href="/">www.1show.kz</a></div>
						<div class="pop-email"><a href="mailto:h2a-production@mail.ru">h2a-production@mail.ru</a></div>
					</div>
				</div>
			</div>
		</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/slick.js?v=154"></script>
	<script type="text/javascript" src="/js/slider.js?v=154"></script>
	<script type="text/javascript" src="/js/jquery-ui.js?v=154"></script>
	<script type="text/javascript" src="/js/jquery.slimmenu.min.js?v=154"></script>
	<script type="text/javascript" src="/js/jquery.arcticmodal-0.3.min.js"></script>
	<script type="text/javascript" src="/js/share.js"></script>
	<script type="text/javascript" src="/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="/js/masonry.pkgd.js"></script>
	<script type="text/javascript" src="/js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="/js/rating_simple.js?5"></script>
<link rel="stylesheet" href="/cropperjs-master/dist/cropper.css">
<script src="/cropperjs-master/dist/cropper.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	$(function() {
		$("#rating-stars").webwidget_rating_simple({
			rating_star_length: '5',
			directory: '/images/'
		});
	});
	
	$('.login-bt').on('click', function(){ 
		var c = $('<div class=\'box-modal w420 prazdnik\' />');
		c.html($('.login-box').html());
		c.prepend('<div class=\'box-modal_close arcticmodal-close\'></div>');
		$.arcticmodal({
			content: c
		});
	});

	function submitauth() {
		$.ajax({
		  type : 'POST',
		  url : '/login',
		  data : $('form').serialize(),
		  success : function(e){ 
			var a = $.parseJSON(e);
			if (a.status == 1) $('.pop-box').html('<div class=scon >'+loading+'</div>'), setTimeout(function() { $('.pop-box').html(a.box); $('.b1-login').replaceWith(a.form) }, 1000);
			else $('.info-message').html(a.message);
		  }
		});
	}; 
$(document).ready(function(){
var selectVal = $('#cc option:selected').val();
var selectedCat = $('#ct option:selected').val();

if (selectVal > 0) {
	cat_find(selectVal,selectedCat);
}
	
$('#ct, #ctf').on('change', function (e) {
	$('#ct option[value="'+$(this).val()+'"]').prop('selected', true);
	$('#ctf option[value="'+$(this).val()+'"]').prop('selected', true);
	checklist = [];
});
	
$('#cc, #ccf').on('change', function (e) {
	//alert($(this).val());
	$('#ccf option[value="'+$(this).val()+'"]').prop('selected', true);
	$('#cc option[value="'+$(this).val()+'"]').prop('selected', true);
	var selectVal = $(this).val();
	cat_find(selectVal,$('#ct option:selected').val());
});

function cat_find(city_id, selected_id) {
	$.ajax({
		url: '/city_change',
		type: 'POST',
		dataType: 'JSON',
		data: {
			id: city_id,
			cat: selected_id
		},
		success: function(e) {
			$('#ct, #ctf').html(e.list);
		}
	});
}
});

$('.slimmenu').slimmenu({
	resizeWidth: '1140',
	collapserTitle: ' ',
	animSpeed: 'medium',
	indentChildren: false,
	childrenIndenter: '&nbsp;'
});

var h_hght = 89; // высота шапки
var h_mrg = 0;   // отступ когда шапка уже не видна    
$(function(){
    var elem = $('.block0');
    var top = $(this).scrollTop();
    if(top > h_hght){   
    }
    $(window).scroll(function(){
        top = $(this).scrollTop();
        if (top+h_mrg < h_hght) {
          elem.removeClass('fix-menu');
          if ($(window).width() > 1040) {
		  $('.b1-logo').css('margin-top','-96px');
          $('#fix-logo').attr('src','/images/b1-logo.png');
          $('#fix-desc').css('top', '175px');} else {
		  $('.block1').css('margin-top','-4px');}
        } else {
          elem.addClass('fix-menu');
          if ($(window).width() > 1040) {
		  $('.b1-logo').css('margin-top','0');
          $('#fix-logo').attr('src','/images/logo-fix.png');
          $('#fix-desc').css('top', '48px');} else {
		  $('.block1').css('margin-top','80px');}
		  
		  
        }
    });
});

$(document).ready(function(){
	$('.collapse-button').on('click', function(){
		var attr = $('.slimmenu').css('display');
		if(attr == 'block') {document.getElementsByClassName('mbl-icon')[0].src = '/images/menu-mob.png';$('.block0').css({height: '80px'});} 
		else {document.getElementsByClassName('mbl-icon')[0].src = '/images/menu-mob-h.png';$('.block0').css({height: 'auto'});} 
	});
});

var loading = '<div id=cssload-loader><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div></div>';
$('form#data').submit(function(d){
		d.preventDefault();   
		var formData = new FormData(this);
		
		// Upload cropped image to server if the browser supports `HTMLCanvasElement.toBlob`
		if (image) {
			if (cropper.getCroppedCanvas()) {
				cropper.getCroppedCanvas().toBlob(function (blob) {
					formData.append('croppedImage', blob);
					post_ajax(formData);
				});
			} else {
				post_ajax(formData);
			}
		} else {
			post_ajax(formData);
		}
	});
	
	function post_ajax(datas) {
		// Use `jQuery.ajax` method
		$.ajax('/ajax_commentsadd', {
			method: 'POST',
			dataType: 'json',
			data: datas,
			processData: false,
			contentType: false,
			success: function (e) {
				if (e.status == 0) {
					$('.message-box').html(e.message);
				} else if (e.status == 1) {
					$('.ab-c-add').html('<div class=scon >'+loading+'</div>'), setTimeout(function() { $('.ab-c-add').html(e.message); $('.ab-c-box').append(e.html); }, 1000);
				}
			},
			error: function () {
				console.log('Upload error');
			}
		});
	}
	
	$(window).load(function() {
		$('.grid').masonry({
		  itemSelector: '.grid-item',
		  columnWidth: 262,
		  gutter: 23
		});
	});$('.ab-contact a').on('click', function(){

		$.ajax({
			type: 'POST',
			url: '/ajax_phone',
			data: {id: 3011},
			success: function(e) {
				var a = $.parseJSON(e);
				if (a.status == 1) $('.pop-phone').html(a.phone), $('.pop-email').html(a.email), $('.pop-site').html(a.site), $('.pop-place').html(a.place);
				
				var c = $('<div class=\'box-modal w420\' />');
				c.html($('.contacts-box').html());
				c.prepend('<div class=\'box-modal_close arcticmodal-close\'></div>');
				$.arcticmodal({
					content: c
				});
			}
		});
	}); 
	</script>



<!--cropper-->
<script>
	var inputImage = $("#uploade-file"),blobURL,
		image = document.getElementById('image'),
		preview = document.getElementById('preview'),
		cropper = new Cropper(image);
	if (window.URL) {
		inputImage.change(function() {
			//$(".overlay, .cropper-box").addClass('active');
			var c = $('<div class=\'box-modal w420\' />');
			c.html($('.cropper-box').html());
			c.prepend('<div class=\'box-modal_close arcticmodal-close\'></div>');
			$.arcticmodal({
				content: c
			});
			
			cropper = new Cropper(document.getElementsByClassName('image').item(1), {
				ready: function () {
				
				var clone = this.cloneNode();

				clone.className = ''
				clone.style.cssText = (
				  'display: block;' +
				  'width: 100%;' +
				  'min-width: 0;' +
				  'min-height: 0;' +
				  'max-width: none;' +
				  'max-height: none;'
				);

				preview.replaceChild(clone.cloneNode(),preview.getElementsByTagName('img').item(0));
			  },
			  aspectRatio: 1 / 1,
			  crop: function(e) {
				var data = e.detail;
				var cropper = this.cropper;
				var imageData = cropper.getImageData();
				var previewAspectRatio = data.width / data.height;

				var previewImage = preview.getElementsByTagName('img').item(0);
				var previewWidth = preview.offsetWidth;
				var previewHeight = previewWidth / previewAspectRatio;
				var imageScaledRatio = data.width / previewWidth;

				previewImage.style.width = imageData.naturalWidth / imageScaledRatio + 'px';
				previewImage.style.height = imageData.naturalHeight / imageScaledRatio + 'px';
				previewImage.style.marginLeft = -data.x / imageScaledRatio + 'px';
				previewImage.style.marginTop = -data.y / imageScaledRatio + 'px';
			  }
			});
			
			var files = this.files,file;
			if (files && files.length) {
				file = files[0];

				if (/^image\/\w+$/.test(file.type)) {
					if (blobURL) {
						URL.revokeObjectURL(blobURL); // Revoke the old one
					}

					blobURL = URL.createObjectURL(file);
					cropper.replace(blobURL);
					inputImage.val("");
				} else {
					showMessage("Please choose an image file.");
				}
			}
		});		 
	} else {
		inputImage.parent().remove();
	}
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(49531279, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49531279" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121456724-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  //gtag('config', 'UA-121456724-1');
  gtag('config', 'AW-660093670');
</script>
<script type="text/javascript">

	$(document).ready(function () {

	$('.modal2-button').on('click', function () {
		$('.modal2[data-id="main"]').addClass('--show')
    });

	$('#mscbCloseBtn2').on('click', function () {
		$('.modal2[data-id="main"]').removeClass('--show')
    });

	$('#mscbCloseBtn2').on('click', function () {
		mscbWindow.style.display = "none";
    });

	$('#md_send').on('click', function () {
		console.log('send to telegram');
		mb_name_inp=$('#md_name_inp').val();
		mb_tel_inp=$('#md_tel_inp').val();
		console.log(mb_name_inp);
		console.log(mb_tel_inp);
		$.get("https://1show.mindsales.kz/oneshowsend/"+mb_name_inp+"/"+mb_tel_inp, function( data ) {
			$('.modal2[data-id="main"]').removeClass('--show')
			alert('Спасибо за заявку!');
        });
    });

	 });
    //console.log(123);

    $('.modal2__close').on('click', function () {
      $('.modal2').removeClass('--show')
    })
    $('#md_close').on('click', function () {
      $('.modal2').removeClass('--show')
    })


    mscbCloseBtn2

</script>
<script type="text/javascript">
	var delay = (function(){
	  var timer = 0;
	  return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	  };
	})();

	$( '#drop-search' ).focus(function() {
		$('.nb-drop').show();
	});
	
	$( '#drop-search' ).focusout(function() {
		
		setTimeout(function() { $('.nb-drop').hide('fast') }, 1000)
	});
$( '#drop-search' ).focus(function() {
		$('.nb-drop').show();
	});
	
	$( '#drop-search' ).focusout(function() {
		
		setTimeout(function() { $('.nb-drop').hide('fast') }, 1000)
	});

	
	$('#drop-search').on('input keyup', function() {
		var text = $('#drop-search').val();
		if (text.length>0 && $('.scon').children().length==0) {
			$('.nb-drop').html('<div class=scon>'+loading+'</div>');
		}
		delay(function(){
			$.ajax({
				url: '/ajax_search',
				type: 'POST',
				data: {
					words: text
				},
				success: function(e) {
					$('.nb-drop').html(e);
				}
			});
		}, 500 );
	});
</script>
<script src="https://1show.kz/widget.js"></script>
<script>
	console.log('this page');
</script>
</body>
</html>