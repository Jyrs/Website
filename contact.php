<!DOCTYPE html>
<html>

<head>
	<title>GJ SOFTWARE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href = "style.css" rel = "stylesheet" type = "text/css" >
	<link rel="stylesheet" href="css/animate.css">

</head>

<body>

	<?php include "includes/header.php"; ?>


	<div class="row-fluid">
		<div class= "col-md-2"></div>

			<div class= "col-md-1">
				<?php include "includes/menu.php"; ?>
			</div>

		<div class= "wow animated fadeInUp col-md-6"	data-wow-duration="1s" >
			<table id = "table" border="0" width="100%" height="100%"  cellpadding="10" align="center">
				<tr><th>
					<div class="contactus">
					<h2 style="color: #d1d1d1; display:inline-block;">Обратная связь</h2>
					<p style="padding-left: 15px;">По заказам, вопросам и предложениям вы можете связаться с нами через форму обратной связи, социальные сети или почту.</p>
						<div id="inline">
							<form id="contact" action="#" method="post" name="contact">
								<input id="name" class="txt" name="name" type="name" placeholder="Ваше имя">
								<input id="email" class="txt" name="email" type="email" placeholder="Ваш e-mail">
								<textarea id="msg" class="txtarea" name="msg" placeholder="Ваше сообщение:"></textarea>
								<button id="send">Отправить</button>
							</form>
						</div>
				</div>

					</th></tr></table>
		</div>
		<div class = "wow animated fadeInRight col-xs-12 col-sm-12 col-md-3 contact" data-wow-duration="1s">
			<p class="contacts-info" style="display:inline-block; color:rgba(111, 179, 222, 0.9); font-size:17pt;"> <i class="far fa-envelope"></i> Emails: </p>
			<p class="contacts-info"><a class="mail" href="mailto:gj-krsnv@ya.ru">gj-krsnv@ya.ru</a></p>
			<p class="contacts-info"><a class="mail" href="mailto:gj-buldakov@ya.ru">gj-buldakov@ya.ru</a></p>
			<hr style="margin-bottom:5px;">
			<p class="contacts-info" style="color:rgba(111, 179, 222, 0.9); font-size:17pt;"> <i class="far fa-share-square"></i> Мы в социальный сетях: </p>

			<div class="shares">
			<a href="https://vk.com/gj_company" target="_blank" class="link"><i class="fab fa-vk fa-2x"></i></a>
			<a href="https://github.com/Jyrs/Website" target="_blank" class="link"><i class="fab fa-github fa-2x"></i></a>
			<a href="https://t.me/gj_software" target="_blank" class="link"><i class="fab fa-telegram fa-2x"></i></i></a>
			</div>

	</div>


	</div>

	<?php include "includes/footer.php"; ?>


</body>

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</html>
