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

			<br /><br />
			<img src="/img/skidka.jpg" alt="Скидка 10% на все в честь юбилея компании - 10 лет">
			<p class="skidka-info">* Подробнее об акции обращайтесь в головной офис.</p>
		</div>
	</div>

	<div class="col-right">
		<div class="col-right-container">
			<div>
				<h1>Бытовая химия СТМ</h1>
			</div>

			<div class="ctm-info">
				<p>Производство моющих и чистящих средств ПОД СОБСТВЕННОЙ ТОРГОВОЙ МАРКИ</p>

				<p>Наши химики разработают уникальную формулу продукта</p>

				<p>Специалисты по графике создадут этикетку и логотип</p>

				<p>А так же, производство флакона любой формы</p>

				<p>AllGreen все сделает за ВАС!</p>

				<p>Вы создаете - AllGreen производит!</p>

				<p>Оставьте заявку и наш специалист свяжется с вами в течении 5 минут!</p>
			</div>

		</div>
	</div>
</div>

<?php
	include_once("../footer.php");
?>
