<!DOCTYPE html>



<html>
<?php
	include "includes/db.php";
?>
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


  	<?php include "includes/header.php";
				 	$tags_q = mysqli_query($connection, "SELECT * FROM `tagss`");
					$tags = array();
					while($tags_result = mysqli_fetch_assoc($tags_q))
					{
						$tags[] = $tags_result;
					}
		?>


	<div class="row-fluid">
		<div class= "col-md-2"></div>

			<div class= "col-md-1">
			<?php include "includes/menu.php"; ?>
			</div>

		<div class= "wow animated fadeInUp col-xs-12 col-sm-12 col-md-6"	data-wow-duration="1s" >
			<table id = "table" border="0" width="100%" height="100%"  cellpadding="10" align="center">
				<tr><th>
						<h3 style="margin:10px;color: #d1d1d1;">Новое:</h3>
					<?php $article = mysqli_query($connection, "SELECT * FROM `Articles`"); ?>
					<?php while($art_res = mysqli_fetch_assoc($article))
					{
					?>
					<article class = "article">

						<div class ="article_image" style=" background:
						url(img/<?php echo $art_res['img'];?>); "></div>
						<div class ="article_info">
							<h4 class="article_name"><a href="/article.php?id=<?php echo $art_res['id']; ?>"><?php echo $art_res['titles'];?></a></h4>
								<div class ="article_info_meta">
									<?php foreach($tags as $tags_result)
									{
										if($art_res['categorie_id'] == $tags_result['id']) {$art_tag = $tags_result; break;}
									}
									?>


									<small>Теги: <a class ="tags_des" style="font-size: 10pt;" href ="/categorie.php?id=<?php echo $art_tag['id'];?>"> <?php echo $art_tag['titles'];?> </a></small>
								</div>
								<div class ="article_info_preview"><?php echo mb_substr($art_res['text'],
								0, 200, 'utf-8');?>

								</div>
					</div>
						<div class="data">
							<small><?php echo $art_res['pubdate'];?></small>
						</div>

					<hr style="margin-right: 10px; margin-left: 10px;">
					 </article>

					 <?php
				 	}
					?>

        </th></tr></table>
		</div>

			<div class = "wow animated fadeInRight col-xs-12 col-sm-12 col-md-3 tags" data-wow-duration="1s">
				<?php
 							foreach($tags as $tags_result)
						{
							?>
							<a  class="tags_des" href="/categorie.php?id=<?php echo $tags_result['id']; ?>"><?php	echo $tags_result['titles']; ?><a>
						<?php
						}
						?>
			</div>

	</div>

	<?php include "includes/footer.php"; ?>


</body>

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</html>
