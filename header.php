<header>
	<a href="index.html"><img alt="mon logo" src="Images/logo.gif"></a>
	<nav>
		<ul id="menu">
			<li<?php if ($page == "index") { echo " class=\"current\"";} ?>><a href="./index.php">Particuliers</a></li>
			<li<?php if ($page == "partenaires") { echo " class=\"current\"";} ?>><a href="./partenaires.php">Partenaires</a></li>
			<li<?php if ($page == "acces") { echo " class=\"current\"";} ?>><a href="./acces.php">Accès</a></li>
			<li<?php if ($page == "contact") { echo " class=\"current\"";} ?>><a href="./contact.php">Contact</a></li>
		</ul>
	</nav>
</header>