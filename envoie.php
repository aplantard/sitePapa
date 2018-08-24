<?php
if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])){
$mail = 'roland.plantard@yahoo.fr'; // D�claration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.

{

    $passage_ligne = "\r\n";

}

else

{

    $passage_ligne = "\n";

}

//=====D�claration des messages au format texte et au format HTML.

$message_txt = $_POST['message'];

$message_html = "<html><head></head><body>".$_POST['message']."</body></html>";

//==========

 

//=====Cr�ation de la boundary

$boundary = "-----=".md5(rand());

//==========

 

//=====D�finition du sujet.

$sujet = "Mail provenant du site";

//=========

 

//=====Cr�ation du header de l'e-mail.

$header = "From: \"".$_POST['nom']."\"<".$_POST['email'].">".$passage_ligne;

$header.= "Reply-to: \"".$_POST['nom']."\"<".$_POST['email'].">".$passage_ligne;


$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========

 

//=====Cr�ation du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========

 

//=====Envoi de l'e-mail.

mail($mail,$sujet,$message,$header);

header('Location: http://www.depannage-pc-saintes.fr/contact.php');

//==========
}
else{
     echo "<p>Votre email n'a pas �t� envoy�, veuillez remplir tous les champs</p>";
     echo "<a style=\"text-decoration:none; color:black;\" href=\"http://www.depannage-pc-saintes.fr/contact.html\">retour au site</a>";
}

?>