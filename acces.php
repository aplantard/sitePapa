<?php 
	$page = "acces"
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2171.1368011100844!2d-0.6100053851471391!3d45.752574522176886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4800e2ad7e06da0b%3A0xf61cbc7597b56f1d!2s32+Chemin+du+Chaillot%2C+17100+Saintes!5e1!3m2!1sfr!2sfr!4v1466292478380" width="700" height="450" style="border:0" allowfullscreen></iframe>
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