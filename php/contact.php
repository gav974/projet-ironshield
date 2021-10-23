<?php

    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['form_email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['form_name'] .' <b>Prénom : </b>' . $_POST['form_lastname'] .'<br>
        <b>Email : </b>' . $_POST['form_email'] . '<br>
        <b>objet : </b>' . $_POST['form_need'] . '<br><br><br>
        
        <b>Message : </b>' . $_POST['form_message'] . '</p>';

        $retour = mail('eclapierjtotograf@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }else {
            echo '<p>une erreur est survenue veuillez réessayer plus tard</p>';
        };
        
        header('refresh:3, index.php');
    }
    ?>