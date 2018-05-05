<?php 
	$page = "contact";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Particuliers - RP Informatique dépannage et services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="Assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--<link rel="icon" type="image/png" href="Images/logo.jpg" />-->
		<link rel="stylesheet" href="./Assets/js/dist/slicknav.css">
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	</head>
	<body>
		<?php
			require('header.php');
		?>

		<!-- Main -->
		<div id="main-wrapper">
			<article class="partenaires">
			<section>
				<h2>Contactez-nous</h2>
				<form id="contact_form" action="envoie.php" method="POST" enctype="multipart/form-data">
					<label for="nom">Nom</label>
					<input id="nom" class="input" name="nom" type="text" size="30" requiered="requiered"/>
					<label for="email">E-mail</label>
					<input id="email" class="input" name="email" type="text" size="30"  requiered="requiered"/>
					<label for="message">Message</label>
					<textarea id="message" class="input" name="message" rows="7" cols="30" requiered="requiered"></textarea>
					<input id="submit_button" name="envoi" type="submit" value="Envoyer" />
				</form>
				<p id="fin_de_form"><span class="gras">Note : </span> veuillez remplir les champs marqués d'un </p>						
			</section>
		</article>
			<?php
				require('aside.php');
			?>
		</div>

		<!-- Footer -->
		<?php
				require('footer.php');
			?>

		<!-- Scripts -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="./Assets/js/dist/jquery.slicknav.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#menu').slicknav();
		});
	</script>
	</body>
</html>