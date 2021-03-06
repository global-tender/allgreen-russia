<?php
	$title = "«Алл Грин» — производство моющих и чистящих средств";
	$title = (isset($page_title) && $page_title != "") ? $page_title." - ".$title : $title;
?>
<!doctype html>
<html class="no-js" lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<meta name="keywords" content="моющие средства, моющий концентрат, автомашпунь, косметические средства, бытовая химия, автохимия, стм, своя торговая марка">
	<meta name="description" content="моющие средства, моющий концентрат, автомашпунь, косметические средства, бытовая химия, автохимия, стм, своя торговая марка">

	<title><?=$title?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="/favicon.png">
	<link href="/favicon.png" rel="shortcut icon" type="image/x-icon">

	<!-- fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600&amp;subset=cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,600,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!-- //fonts -->

	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css?ver=0.027">

	<!-- Open Graph -->
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://allgreen-russia.ru<?=$_SERVER['PHP_SELF']?>">
	<meta property="og:image" content="https://allgreen-russia.ru/img/all_products_small-min.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:site_name" content="«Алл Грин» — производство моющих и чистящих средств">
	<meta property="og:description" content="Производство высококачественных моющих и чистящих средств, разработанных профессионалами в сотрудничестве со специалистами в области экологии.">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:description" content="Производство высококачественных моющих и чистящих средств, разработанных профессионалами в сотрудничестве со специалистами в области экологии.">

</head>

<?php
	$is_mobile = true;
	
	if (isset($_SERVER['HTTP_USER_AGENT']))
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
		{
			$is_mobile = false;
		}
	}
?>

<body>

<div class="container">

	<header class="<?if (isset($header_inner) && $header_inner === True) { echo 'header-inner'; }?>">
		<div class="header">
			<div class="header-element-logo">
				<a href="/" class="<? if ($_SERVER['PHP_SELF'] == '/index.php') { echo 'href-off'; }?>" title="«Алл Грин» — производство моющих и чистящих средств"><img src="/img/logo.gif" alt="allgreen"></a>
			</div>

			<div class="header-element-right">
				<div class="header-contacts">
					<span class="phone" id="select_phone_top" onclick="selectText('select_phone_top');"><? if ($is_mobile) {?><a href="tel:+78632035599" title="Позвонить">+7 863 203-55-99</a><?}else{?>+7 863 203-55-99<?}?></span><span class="space">|</span> <a href="mailto:allgreen@allgreen-russia.ru" title="Написать на почту">allgreen@allgreen-russia.ru</a>
				</div>


				<div class="top-line">
					<form method="POST" action="/request/" name="request">
						<input type="text" name="allgreen_name" placeholder="Ваше имя" title="Ваше имя" required>
						<input type="text" name="allgreen_phone" placeholder="Номер телефона" title="Номер телефона" required>
						<input type="text" name="allgreen_message" placeholder="Комментарий" title="Комментарий">

						<input type="submit" value="Оставить заявку" name="request_submit">
					</form>
				</div>
			</div>

		</div>
	</header>