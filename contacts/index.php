<?php
	global $page_title;
	$page_title = "Контактная информация";
	global $header_inner;
	$header_inner = True;
	include_once("../header.php");
?>

<div class="inner-page">
	<div class="col-left">
		<div class="col-left-container">

			<a class="back-to-index" href="/" title="Назад на главную"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

			<?php
				include_once("../inner_menu.php");
			?>

			<br /><br />
			<img src="/img/skidka.jpg" alt="Скидка 10% на все в честь юбилея компании - 10 лет">
			<p class="skidka-info">* Подробнее об акции обращайтесь в офис компании.</p>
		</div>
	</div>

	<div class="col-right">
		<div class="col-right-container">
			<div>
				<h1>Контактная информация</h1>

				<div class="contacts-text">

					<h2>Общество с ограниченной ответственностью «Алл Грин»</h2>

					<p><b>Адрес:</b> 346703, Ростовская обл, Аксайский р-н, Ленина х, 1081 км. автомагистрали "Дон".</p>

					<p>
						<b>Тел/факс:</b><br />
						<span class="tel"><? if ($is_mobile) {?><a href="tel:+78632035589" title="Позвонить">+7 (863) 203-55-89</a><?}else{?>+7 (863) 203-55-89<?}?></span><br />
						<span class="tel"><? if ($is_mobile) {?><a href="tel:+78632035590" title="Позвонить">+7 (863) 203-55-90</a><?}else{?>+7 (863) 203-55-90<?}?></span><br />
						<span class="tel"><? if ($is_mobile) {?><a href="tel:+78632035591" title="Позвонить">+7 (863) 203-55-91</a><?}else{?>+7 (863) 203-55-91<?}?></span><br />
						<span class="tel"><? if ($is_mobile) {?><a href="tel:+78632035599" title="Позвонить">+7 (863) 203-55-99</a><?}else{?>+7 (863) 203-55-99<?}?></span><br />
					</p>

					<p><b>E-mail:</b><br />
						<span class="email_addr"><b>Генеральный директор</b> – <a class="mailto" href="mailto:gendir@allgreen-russia.ru" title="Написать на эту почту">gendir@all<span class="hidden">is</span>green-russia.ru</a></span><br />
						<span class="email_addr"><b>Главный бухгалтер</b> – <a class="mailto" href="mailto:glavbuh@allgreen-russia.ru" title="Написать на эту почту">glavbuh@all<span class="hidden">is</span>green-russia.ru</a></span><br />
						<span class="email_addr"><b>Общая почта</b> – <a class="mailto" href="mailto:allgreen@allgreen-russia.ru" title="Написать на общую почту">allgreen@all<span class="hidden">is</span>green-russia.ru</a></span><br />
					</p>

					<br />

					<div id="map"></div>
				</div>

			</div>


		</div>
	</div>
</div>

<?php
	include_once("../footer.php");
?>

<script>

$(document).ready(function(){
	ymaps.ready(init);
	var myMap, 
	myPlacemark;

	function init(){
		myMap = new ymaps.Map("map", {
			center: [47.093750341111566, 39.81057645749588],
			zoom: 11,
			controls: []
		});

		myPlacemark = new ymaps.Placemark([47.093750341111566, 39.81057645749588], {
			hintContent: '«Алл Грин»',
		}, {
			preset: 'twirl#violetDotIcon'
		});

		myPolyline = new ymaps.Polyline([[47.095393, 39.806440], [47.094123, 39.806386], [47.094409, 39.810613]],
			{balloonContent: "Схема проезда с трассы М-4"},
			{strokeColor: "485B0C", strokeWidth: 5, strokeOpacity: 0.7}
		);

		myMap.geoObjects.add(myPlacemark);
		myMap.geoObjects.add(myPolyline);

		myMap.controls.add(new ymaps.control.TypeSelector(['yandex#map', 'yandex#hybrid', 'yandex#satellite']));
		myMap.controls.add(new ymaps.control.ZoomControl());
	}
});

</script>
