<?php

$nom = $_POST['form_name'];
$prenom = $_POST['form_lastname'];
$demande=$_POST['form-need'];
$email = $_POST['form_email'];
$message = $_POST['form_message'];


$msg = "Demande = $civilite
Nom = $nom
Prénom= $prenom
Adresse email= $email
Message= $message";
$recipient = "fepil85127@rebation.com"; //On met l'adresse email ou on veut recevoire le mail
$subject = "Formulaire de  contact"; //On met le sujet du mail
$mailheaders = "From: Mon site Perso<> \n"; //depuis où il a été posté
mail($recipient, $subject, $msg, $mailheaders); // message confirmation que le mail a bien été envoyé
echo "<HTML><HEAD>";
echo "<TITLE> CONTACT</TITLE></HEAD><BODY>";
echo "<H3 align=center><br>Merci $nom,<br> Votre formulaire est envoyé.<br> Nous faisons le nécessaire pour vous répondre dans les meilleurs délai<br><br> Vous allez être redirigé sur l'accueil </H3>";
echo "<P align=center>";
echo "</P>";
echo "</BODY></HTML>";
header('Refresh: 7; index.html');

?> 