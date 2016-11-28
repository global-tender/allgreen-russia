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

				<h2>Общество с ограниченной ответственностью «Алл Грин»</h2>

				<p><b>Адрес:</b> 346703, Ростовская обл, Аксайский р-н, Ленина х, 1081 км. автомагистрали "Дон".</p>

				<p><b>Тел/факс:</b> +7 (863) 203-55-89, +7 (863) 203-55-90, +7 (863) 203-55-91, +7 (863) 203-55-99</p>

				<p><b>E-mail:</b><br />
					<b>Генеральный директор</b> – <a href="mailto:gendir@allgreen-russia.ru" title="Написать на эту почту">gendir@all<span class="hidden">is</span>green-russia.ru</a><br />
					<b>Главный бухгалтер</b> – <a href="mailto:glavbuh@allgreen-russia.ru" title="Написать на эту почту">glavbuh@all<span class="hidden">is</span>green-russia.ru</a><br />
					<b>Общая почта</b> – <a href="mailto:allgreen@allgreen-russia.ru" title="Написать на общую почту">allgreen@all<span class="hidden">is</span>green-russia.ru</a>
				</p>
			</div>


		</div>
	</div>
</div>

<?php
	include_once("../footer.php");
?>
