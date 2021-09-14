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
                    <div class="col-12 col-sm-12 col-md-12 col-xl-4 d-sm-flex d-md-flex d-xl-block justify-content-center">
                        <img class="img-fluid" src="./medias/logo-detouré.png" alt="logo entreprise">
                    </div>
                        <div class="col-auto col-sm-12 col-md-12 col-xl-8 ">
                        <!-- <h1>GROUPE SINAPIN</h1> -->
                            <h2 class=" font1 display-3 mt-0 mt-xl-4  text-center text-uppercase">Nous travaillons à la conception du site </h2>
                             <p class=" font1 fs-3 text-center ">Rendez-vous à l'ouverture </p>
                             <p class=" font1 fs-3 text-center">le 08 octobre </p>  
                             <div id=part-timer class="container-fluid">
                                <div class="row">
                                    <div class="col-11 col-sm-12 col-md-12 col-xl-12" >
                                        <h1 id="headline"></h1>
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
                        </div>
                           
                </div>
            </div>

               
        </section>
<!--section two-->
        <section class="section-2">
            <div class="container font1 ">
                <div class="row d-flex align-content-around">
                    
                <div class="col col-sm-12 col-md-3 col-xl-6 text-center">
                        <a  href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" aria-controls="offcanvasLeft"><i class="fas fa-phone-square-alt"></i></a>
                    </div>
                
                    <div class="col col-sm-12 col-md-3 col-xl-6 text-center">  
                        <a  href="#"><i class="fas fa-envelope" data-bs-toggle="offcanvas
                        " data-bs-target="#offcanvas-1" aria-controls="offcanvasRight"></i></a>
                    </div>
                </div>
            </div>
            

        </section>

         <!--Scrollspy-->
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
         <!--Scrollspy 2-->
         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-2" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                    <h5 id="offcanvasLeftLabel">Envoyez votre message</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>  
            </div>
                    <div class="offcanvas-body">
                        
                        <div class="container font1">
 
                            <div class="row">
                     
                                <div>
                     
                                    <form id="contact-form" method="post" action="/php/contact.php" role="form">
                     
                                        <div class="messages"></div>
                     
                                        <div class="controls">
                     
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name">Nom *</label>
                                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Votre nom *" required="required" data-error="Nom est obligatoire.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Prénom *</label>
                                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Votre prénom *" required="required" data-error="Prénom est obligatoire.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_email">Email *</label>
                                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Votre email *" required="required" data-error="Un email valide est obligatoire.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_need">Comment pouvons nous vous aidez ?</label>
                                                        <select id="form_need" name="need" class="form-control" required="required" data-error=" ?">
                                                            <option value="qfdqsqsd" disabled></option>
                                                            <option value="Demande générale">Demande générale</option>
                                                            <option value="Demande de devis">Demande de devis</option>
                                                            <option value="Demander une facture">Demander une facture</option>
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
                                                        <textarea id="form_message" name="message" class="form-control" placeholder="Votre Message *" rows="4" required="required" data-error="Veuillez remplir le champ Message." maxlength=""></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <input type="submit" class="btn  btn-send" value="Envoyer">
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
        <!--end of scrollspy-->
        </div>

<!--script part-->
    <script src="js/contact.js"></script>
    <script src="js/timer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>