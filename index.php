<?php

$compteur =fopen('statistique/compteur.txt','r+');

$pages_vue = fgets($compteur);
$pages_vue += 1;
define ("pagevues", $pages_vue);
fseek($compteur,0);
fputs($compteur, $pages_vue);

fclose($compteur)
?>




<!DOCTYPE html>
<html lang="fr">
        <head>
            <!--meta tag-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="securité privee reunion ">
    <!--favicon-->
    <link rel="shortcut icon" href="médias/favicon-ironshield-image.png" type="image/x-icon">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--css animation -->
    <link rel="stylesheet" href="css/wickedcss.min.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--setting css-->
    <link rel="stylesheet" href="./css/styles.css">

    <title>Groupe Sinapin |la sécurité privée notre priorité</title>
 

</head>
    <body>
        <video class="min-vh-100 min-vw-100" preload autoplay loop muted>
            <source src="./medias/background.mp4" type="video/mp4">
        </video>
        <section class="section-1">
            <div id=part-1 class="container">
                <div class="row ">
                    <div  class="col-12 col-sm-12 col-md-12 col-xl-4 d-sm-flex d-md-flex d-xl-block justify-content-center my-5">
<<<<<<< HEAD
                        <img id="logo" class="img-fluid" src="./medias/logo-detouré.png" alt="logo entreprise">
                    </div>
                        <div class="col-auto col-sm-12 col-md-12 col-xl-8 my-xl-5 mt-0 ">
                        <!-- <h1>GROUPE SINAPIN</h1> -->
                            <h5 class=" font1 display-6 mt-0 mt-xl-4  text-center text-uppercase"> Le site est en cours de construction </h5>
                             <p class=" font1 fs-3 text-center ">Patientez nous serons bientot en ligne  </p>  
                             <div>
=======
                        <img id="logo" class="pulse img-fluid " src="./medias/logo-detouré.png" alt="logo entreprise">
                    </div>
                        <div class="col-auto col-sm-12 col-md-12 col-xl-8 my-xl-5 mt-0 ">
                        <!-- <h1>GROUPE SINAPIN</h1> -->
                            <h5 class=" font1 display-6 mt-0 mt-xl-4  text-center text-uppercase"> Nous travaillons sur la conception du <span >site internet </span> </h5>
                             <p class=" font1 fs-3 text-center ">Rendez-vous à l'ouverture: prochaine ... </p>  
                             <div id=part-timer class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-xl-12" >
                                        <!--<h1 id="headline"></h1>-->
                                        <div class="text-center" id="countdown">
                                            <ul >
                                                <li><span id="days"></span>Jours</li>
                                                <li><span id="hours"></span>Heures</li>
                                                <li><span id="minutes"></span>Minutes</li>
                                                <li><span id="seconds"></span>Secondes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                        </div>
                           
                </div>
            </div>

               
        </section>
<!--section two-->
        <section class="section-2">
            <div class="container font1 ">
                <div class="row ">
                    
<<<<<<< HEAD
                    <div class="col col-sm-12 col-md-12 col-xl-4 text-center">
                        <a  href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" aria-controls="offcanvasLeft"><i class="fas fa-phone-square-alt"></i></a>
                    </div>
                
                   <div class="col col-sm-12 col-md-12 col-xl-4 text-center ">  
                        <a  href="#"><i class="fas fa-envelope" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-2" aria-controls="offcanvasRight"  ></i></a>
=======
                    <div class="col col-sm-12 col-md-12 col-xl-4 text-center ">
                        <a  href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" aria-controls="offcanvasLeft"><i class="fas fa-info"></i></a>
                    </div>
                
                   <div class="col col-sm-12 col-md-12 col-xl-4 text-center ">  
                        <a  href="mailto:groupesinapin@gmail.com?subject=prise de contact"><i class="fas fa-envelope"></i></a>
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                    </div>
               
             
                        <div class="col col-sm-12 col-md-12 col-xl-4 text-center ">
<<<<<<< HEAD
                        <a  href="https://www.linkedin.com/in/christophe-sinapin-%F0%9F%8C%8D-57bb42182/"><i class="fab fa-linkedin text-primary"></i></a>
=======
                        <a  href="https://www.linkedin.com/company/groupesinapin/?viewAsMember=true"><i class="fab fa-linkedin text-primary"></i></a>
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                        </div>
                </div>
            </div>

        </section>

         <!--Scrollspy part info-->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-1" aria-labelledby="offcanvasLeftLabel">
            <div class="offcanvas-header font1">
                    <h5 id="offcanvasLeftLabel">Nos coordonnées</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>  
            </div>
                    <div class="offcanvas-body font1">
                        <div class="container mb-1">
                            <i class="fas fa-home d-block text-center display-3 mb-3"></i> 
                            <p>289 Chem. Riviere du Mat les Hauts, Saint-André 97440, La Réunion</p>
                        </div>
                            <div class="container text-center mb-1">
                                <i class="fas fa-clock display-3 mb-3"></i>
                                <ul class="list-unstyled">
                                    <li>Lundi 08:00–20:00</li>
                                    <li>Mardi 08:00–20:00</li>
                                    <li>Mercredi 08:00–20:00</li>
                                    <li>Jeudi 08:00–20:00</li>
                                    <li>Vendredi 08:00–20:00</li>
                                    <li>Samedi	08:00–20:00</li>
                                    <li>Dimanche 08:00–20:00</li>
                                </ul>
                            </div>
                        <div class="container mb-1">
                            <i class="fas fa-phone text-center d-block display-3 mb-3"></i>
                            <h2 class="text-center">(+262) 0692 44 71 86</h2>
                            
                        </div>
                    </div>
                    <!--end of scrollspy-->
        </div>
         <!--Scrollspy 2 email form-->
         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-2" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                    <h5 id="offcanvasLeftLabel">Envoyez votre message</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>  
            </div>
                    <div class="offcanvas-body">
                        
                        <div class="container font1">
 
                            <div class="row">
                     
                                <div>
                     
<<<<<<< HEAD
                                    <form id="contact-form" method="post" action="php/contact.php" role="form">
=======
                                    <form id="contact-form" method="post" role="form">
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                     
                                        <div class="messages"></div>
                     
                                        <div class="controls">
                     
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name">Nom *</label>
<<<<<<< HEAD
                                                        <input name="form_name" type="text" name="name" class="form-control" placeholder="Votre nom *" required="required" data-error="Nom est obligatoire.">
=======
                                                        <input name="form_name" type="text" class="form-control" placeholder="Votre nom *" required="required" data-error="Nom est obligatoire.">
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Prénom *</label>
<<<<<<< HEAD
                                                        <input name="form_lastname" type="text" name="surname" class="form-control" placeholder="Votre prénom *" required="required" data-error="Prénom est obligatoire.">
=======
                                                        <input name="form_lastname" type="text" class="form-control" placeholder="Votre prénom *" required="required" data-error="Prénom est obligatoire.">
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_email">Email *</label>
<<<<<<< HEAD
                                                        <input name="form_email" type="email" name="email" class="form-control" placeholder="Votre email *" required="required" data-error="Un email valide est obligatoire.">
=======
                                                        <input name="form_email" type="email"  class="form-control" placeholder="Votre email *" required="required" data-error="Un email valide est obligatoire.">
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_need">Comment pouvons nous vous aidez ?</label>
<<<<<<< HEAD
                                                        <select name="form_need" name="need" class="form-control" required="required" data-error=" ?">
=======
                                                        <select name="form_need" class="form-control" required="required" data-error=" ?">
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                                                            <option value="Demande de devis">Demande de devis</option>
                                                            <option value="Demander une facture">Demande dd'intervention</option>
                                                            <option value="Autre">Autre</option>
                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_message">Message *</label>
<<<<<<< HEAD
                                                        <textarea name="form_message" name="message" class="form-control" placeholder="Votre Message *" rows="4" required="required" data-error="Veuillez remplir le champ Message." maxlength=""></textarea>
=======
                                                        <textarea name="form_message" class="form-control" placeholder="Votre Message *" rows="4" required data-error="Veuillez remplir le champ Message." maxlength="255"></textarea>
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
<<<<<<< HEAD
                                                    <input type="submit" class="btn btn-success  btn-send" value="Envoyer" onclick="this.form.submit()">
=======
                                                    <input type="submit" class="btn btn-success  btn-send" value="Envoyer" ">
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="text-muted">
                                                        <strong>*</strong> Ces champs sont obligatoires.</p>
                                                </div>
                                            </div>
                                        </div>
                     
                                    </form>
                     
                                </div>
                                <!-- /.8 -->
                     
                            </div>
                            <!-- /.row-->
                     
                        </div>
                        
                    </div>
<<<<<<< HEAD
                 
        <!--end of scrollspy-->
=======
       <!--end of scrollspy-->
>>>>>>> a46b6ca769982152be453ac1f9ae6b26927f266d
        </div>
<footer>
    <p class="text-end"><?php echo pagevues ?></p>
</footer>


<!--script part-->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/animation.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/timer.js"></script>



</body>     
</html>