<?php 
	$page = "partenaires";
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
				<section class="border">
					<h2 class="invisible">header</h2>
					<a href="https://a4818.boutique-eset.com/"><img id="eset2" alt="gif eset" src="Images/eset2.png"/></a>
					<div id="texteeset" class="colonne_droite">
						<p class="gras">Découvrez ESET NOD32 Antivirus pour une protection de pointe, contre les menaces Internet dont les virus, spyware et rootkits.</p>
					</div>
				</section>
				<section id="am">
					<h2 class="invisible">header</h2>
					<img alt="Logo Anne-Marie PLANTARD Sophrologue" src="Images/logo_am.jpg"/>
					<div class="colonne_droite">
						<p class="gras">Anne Marie PLANTARD</p>
						<p class="gras">SOPHROLOGUE</p>
						<p class="gras">32 Chemin du Chaillot</p>
						<p class="gras">17100 SAINTES</p>
						<p class="gras">site internet: </p>
						<a id="site_am" href="http://sophro-saintes.fr/">http://sophro-saintes.fr//</a>
					</div>
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