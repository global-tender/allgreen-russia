<?php

	include_once("../settings.php");

	global $page_title;
	$page_title = "";
	include_once("../header.php");
?>
<?php
if ( isset($_POST['allgreen_name']) && isset($_POST['allgreen_phone']) ) {

	$name = $_POST['allgreen_name'];
	$message = $_POST['allgreen_message'];
	$phone = isset($_POST['allgreen_phone']) ? $_POST['allgreen_phone'] : "";

	if (trim($phone) === "+7" || trim($phone) === "")
	{
		header('Location: /');
		return False;
	}

	if (trim($name) === "")
	{
		header('Location: /');
		return False;
	}


	/* ========== */
	$content = "Вам отправлена заявка с сайта allgreen-russia.ru.\n\nИмя: {$name}\nТелефон: {$phone}\nКомментарий:\n{$message}\n\n\nСообщение сформировано автоматически.\n";
	$from_user = '=?UTF-8?B?'.base64_encode('allgreen-russia.ru').'?=';
	$subject = '=?UTF-8?B?'.base64_encode('Заявка с сайта allgreen-russia.ru').'?=';

	$headers = 'From: '.$from_user.' <'.$noreply_email.'>' . "\r\n" .
	'Reply-To: ' . $noreply_email . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" .
	'Content-type: text/plain; charset=utf-8' . "\r\n" .
	'Return-Path: ' . $noreply_email . ".\r\n";

	$params = "-f" . $noreply_email;

	mail($admin_email, $subject, $content, $headers, $params);

	/* ========== */
	?>

	<div class="content request">

		<div class="info">
			<h1>Спасибо - <span class="info-green">Ваша заявка принята!</span></h1>

			<h2>Менеджер свяжется с Вами в ближайшее время!</h2>

			<a href="/" title="Перейти на главную страницу">Перейти на главную страницу</a>
		</div>

	</div>
	<?
	return True;
}
else {
	header('Location: /');
	return False;
}
?>
<?php
	include_once("../footer.php");
?>
