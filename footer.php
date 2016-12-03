
<footer>
	<div class="footer-element">
		<b>«Алл Грин»</b><span> — производство моющих и чистящих средств</span>
	</div>

	<div class="footer-element">
		<span class="space">|</span> телефон: <span id="select_phone_footer" onclick="selectText('select_phone_footer');"><? if ($is_mobile) {?><a href="tel:+78632035599" title="Позвонить">+7 863 203-55-99</a><?}else{?>+7 863 203-55-99<?}?></span>
	</div>

	<div class="footer-element">
		<span class="space"></span> e-mail: <a href="mailto:allgreen@allgreen-russia.ru" title="Написать на почту">allgreen@all<span class="hidden">is</span>green-russia.ru</a>
	</div>


	<?/* Микроразметка контактов на всех страницах, неотображаемая */?>
	<div class="hidden-contacts" itemscope itemtype="https://schema.org/Organization">
		<span itemprop="name">«Алл Грин» — производство моющих и чистящих средств</span>
		<div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
			<span itemprop="streetAddress">Ленина х, 1081 км. автомагистрали "Дон"</span>
			<span itemprop="postalCode">346703</span>
			<span itemprop="addressLocality">Ростовская обл, Аксайский р-н</span>,
		</div>
		<span itemprop="telephone">+78632035599</span>,
		<a href="mailto:allgreen@allgreen-russia.ru" itemprop="email">allgreen@allgreen-russia.ru</a>
	</div>

</footer>


</div><!-- //container -->

<!-- fonts -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- //fonts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="/js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Yandex.Map -->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<script src="/js/main.js?ver=0.003" type="text/javascript"></script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter40917884 = new Ya.Metrika({
					id:40917884,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40917884" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>
</html>
