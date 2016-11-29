<?php
	global $page_title;
	$page_title = "О компании";
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
				<h1>О компании</h1>
			</div>

			<div class="hidden">
				<p>Компания «Алл Грин» основана в 2006 году как производственная фирма по производству моющих и чистящих средств бытового и промышленного назначения.</p>

				<p>Специализация предприятия направлена на производство моющих и чистящих средств , которое находит обширное применение в различных отраслях промышленности , а также в быту.</p>

				<p>Одно из направлений компании «Алл Грин», является производство бытовой химии под торговой маркой наших партнеров (СТМ - своя торговая марка).</p>

				<p>Продукция «Алл Грин» отвечает высочайшему европейскому качеству, безопасна для окружающей среды и человека, экономична в использовании.</p>
			</div>

			<div class="hidden">
				«Алл Грин» - производитель высококачественных моющих средств. Специализация предприятия направлена на производство товаров бытовой химии, косметических средств и средств по уходу за автомобилем. Продукты Компании находят широкое применение в быту, клининговых компаниях, различных отраслях промышленности, общественных и производственных помещениях, ресторанах, кафе и гостиницах.

				Основа деятельности Компании «Алл Грин» - служение потребителю. Специалисты Компании постоянно совершенствуют, разрабатывают и производят новые виды продукции, расширяя ассортимент предлагаемых товаров. Продукция «Алл Грин» отвечает самым высоким стандартам качества, безопасна для человека и окружающей среды, экономична в использовании.

				Преимущества использования моющих средств «Алл Грин»:

				возможность использования на поверхностях, выполненных из любых материалов, без риска их повреждения;
				моющие средства могут использоваться без дополнительных средств защиты, не представляя угрозы здоровью человека;
				концентрация позволяет достигать желаемого результата при применении минимального количества средства;
				продукция "Алл Грин" биологически разлагаема в условиях окружающей среды;
				высокое качество сочетается с приемлемыми ценами.
				Производство

				Мы располагаем:
				Производственными мощностями, оснащенными современным и высокопроизводительным оборудованием;
				Типографией, позволяющей производить любые виды и тиражи этикеток;
				Производством ПЭТ тары объемом от 0,2 л. до 5,0 л. ;
				Складским комплексом, рассчитанным на обеспечение бесперебойной работы предприятия.
				Наша миссия — производство высококачественных и доступных по цене продуктов, улучшающих жизнь потребителя. Компания «Алл Грин» - производитель высококачественных моющих средств.

				Высокое качество производимой продукции гарантировано отлаженным процессом производства с использованием современного оборудования, высококачественного сырья и закреплено опытом высококвалифицированных специалистов Компании.

				Компания располагает собственной лабораторией, позволяющей осуществлять непрерывный контроль качества продукции во время и после процесса производства, отбирать, испытывать и давать оценку качеству и свойствам используемого сырья, проводить исследования и разрабатывать новые продукты.

				«Алл Грин» в процессе производства продукции использует сырье ведущих зарубежных и отечественных производителей, которое отвечает самым высоким мировым стандартам.

				Производственный комплекс компании способен удовлетворить потребности самого требовательного заказчика.

				Компания «Алл Грин» производит продукты, как под собственной торговой маркой, так и предлагает своим партнерам контрактное производство под частными торговыми марками (СТМ).
			</div>


			<div class="about-company-text">
				<p>Хотите узнать о нас больше?</p>
				<p>Приезжайте и <u>взгляните на производство</u> своими глазами!</p>

				<a href="/contacts/" title="Адрес, контакты, схема проезда">Адрес и схема проезда</a>
				<br /><br />


				<p><b>AllGreen</b> - это больше чем предприятие по производству моющих и чистящих средств!</p>
				<p><b>AllGreen</b> - это история!</p>
				<p>Которая длится с 2006 года!</p>
				<p>10 лет продукция AllGreen отвечает <u>высочайшему европейскому качеству</u>!</p>
				<p><b>Безопасна</b> для окружающей среды и человека!</p>
				<p>Экономична в использовании!<p>
				<br />
				<p>Сохраним наш мир чистым - <b><u>AllGreen!</u></b></p>

				<a class="factory-img" href="/img/factory-min.jpg"><img src="/img/factory-min.jpg" alt="Завод"></a>
			</div>

		</div>
	</div>
</div>

<?php
	include_once("../footer.php");
?>

<script>

	$(document).ready(function(){
		$('.factory-img').fancybox();
	});

</script>