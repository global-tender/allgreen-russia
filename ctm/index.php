<?php
	global $page_title;
	$page_title = "Бытовая химия СТМ";
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

			<p>
				Основа наших отношений с контрагентами – надежное, доверительное и взаимовыгодное партнерство.<br />
				Мы ценим наших Партнеров и благодарны Вам за сотрудничество.
			</p>
			<br />

			<img src="/img/skidka.jpg" alt="Скидка 10% на все в честь юбилея компании - 10 лет">
			<p class="skidka-info">* Подробнее об акции обращайтесь в офис компании.</p>
		</div>
	</div>

	<div class="col-right">
		<div class="col-right-container">
			<div>
				<h1>Бытовая химия СТМ</h1>
			</div>

			<div class="ctm-info">
				<p>Производство моющих и чистящих средств &nbsp;<b>ПОД СОБСТВЕННОЙ ТОРГОВОЙ МАРКОЙ</b></p>

				<p>Наши химики разработают <u>уникальную формулу продукта</u></p>

				<p>Специалисты по графике создадут <u>этикетку и логотип</u></p>

				<p>А так же, производство <u>флакона <b>любой формы</b></u></p>

				<p><b>AllGreen все сделает за ВАС!</b></p>

				<p>Вы создаете - AllGreen производит!</p>

				<p><u title="Воспользуйтесь формой заявки в верхней части сайта">Оставьте заявку</u> и наш специалист свяжется с вами в ближайшее время!</p>
				<p>Или <a href="/contacts/" title="Контактная информация">позвоните</a> нам сами!</p>
			</div>

			<br />

			<div class="ctm-info">
				<h3>Наши партнеры</h3>

				<div class="partners">
					<div class="partners-element">
						<img src="/img/partners/magnit_logo.gif" alt="Розничная сеть Магнит">
					</div>
					<div class="partners-element">
						<img src="/img/partners/sangi_stil-min.jpg" alt="Санги Стиль">
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php
	include_once("../footer.php");
?>
