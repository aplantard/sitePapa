<?php 
	$page = "index";
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
					<h2 class="border">Un dépannage sérieux et rapide</h2>
					<div>
						<h4>Dépannage de votre PC</h4>
						<p>Réparation toutes marques</p>
						<p>A domicile ou par télémaintenance</p>
						<p class="marge">Atelier de dépannage à votre service</p>
						<img alt="clavier" src="Images/clavier.jpg"/>
					</div>
					<div id="colonne_droite">
						<p>Grace à notre logiciel de télémaintenance, nous vous assistons ou que vous soyez dans le monde</p>
						<a id="teamviewer" href="sos_informatique.zip" >Télécharger</a>
					</div>
				</section>
			
				<section>
					<h2>Vente matériel - logiciels</h2>
					<p>Conseils et fourniture de matériels informatiques et logiciels</p>
					<img alt="ordinateur n°2" src="Images/ordi2.jpg"/>
					<img id="tablette" alt="tablette" src="Images/tablette.jpg"/>
                    <a href="partenaires.php"><img alt="eset" src="Images/eset.jpg"/></a>
					<div id="eset">
						<p class="marge">Ne cherchez plus un antivirus performant</p>
						<p>Nous sommes  revendeur ESET Antivirus</p>
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