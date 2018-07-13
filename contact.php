<!DOCTYPE html>
<html>

<head>
	<title>GJ SOFTWARE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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
				<tr><th><p>	Тут контакты <p>	</th></tr></table>
		</div>
	</div>

	<?php include "includes/footer.php"; ?>


</body>

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</html>
