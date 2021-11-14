<?php

    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['form_email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['form_name'] .' <b>Prénom : </b>' . $_POST['form_lastname'] .'<br>
        <b>Email : </b>' . $_POST['form_email'] . '<br>
<<<<<<< HEAD
        <b>objet : </b>' . $_POST['form_need'] . '<br>
=======
        <b>objet : </b>' . $_POST['form_need'] . '<br><br><br>
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
        
        <b>Message : </b>' . $_POST['form_message'] . '</p>';

        $retour = mail('eclapierjtotograf@gmail.com', 'Envoi depuis page Contact', $message, $entete);
<<<<<<< HEAD
=======
        
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }else {
            echo '<p>une erreur est survenue veuillez réessayer plus tard</p>';
        };
<<<<<<< HEAD
=======
        
        header('refresh:3, index.php');
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
    }
    ?>