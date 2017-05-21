<!DOCTYPE html>
<html lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Administration</title>

    <!-- Bootstrap core CSS -->
   
    <style type="text/css">
          
    body { background: #f2f2f2 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */

    </style>
 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css1.css">
  <link rel="stylesheet" href="assets/menu.css">


<!-- jQuery library -->
  <script src="assets/js1.js"></script>

<!-- Latest compiled JavaScript -->
  <script src="assets/js2.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">Menu</a>
                </li>

                <li>
                    <a href="index.php">Accueil</a>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion du portail<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Gestion portail</li>
                    <li><a href="mode_portail.php">Gestion globale</a></li>
                    <li><a href="gestion_ouverture.php">Régler heures d'ouvertures</a></li>
                    <li><a href="gestion_fermeture.php">Régler heures de fermetures</a></li>
                  </ul>
                </li>

                <li>
                    <a href="camera.php">Gestion des caméras</a>
                </li>

                <li>
                    <a href="localisation.php">Localisation du Parc</a>
                </li>

            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <img src="images/fiche_valide.png"><br><br>

<br>
                     <center><b><p>Solène PRIEUR est en charge de : </p></b></center>
                     <ul class="list-group">
                       <li class="list-group-item">Réaliser un état des lieux des différentes entrée existantes</li>
                       <li class="list-group-item">Faire des recherhes sur : <br>
                             
                            <center>
                              Les éléments caractérisant les différents types d'entrée<br>
                              Les éléments architecturaux<br>
                              Les éléments techniques<br> 
                            </center>
                        </li>

                        <li class="list-group-item">Etablir un statut pour chacune d'elle (entrée principale, entrée de service,...)</li>
                        <li class="list-group-item">Intégrer les normes de sécurité dans la conception</li>
                        <li class="list-group-item">Proposer des aménagement pour les différentes entrées</li> 
                      </ul>

<br>
                      <center><b><p>Gaëtan MARMILLON est en charge de : </p></b></center>
                     <ul class="list-group">
                      <li class="list-group-item">Choisir et dimensionner la motorisation d'un portail</li>
                      <li class="list-group-item">Choisir et dimensionner l'éclairage de l'entrée<br></li>
                      <li class="list-group-item">Dimensionner un système de production de l'énergie d'énergie autonome pour l'entrée</li>
                      <li class="list-group-item">Assurer le stockage de l'énergie</li>
                       <li class="list-group-item">Assurer la sécurité électrique de l'ensemble</li> 
                      </ul>

                      <ln>
<br>
                      <center><b><p>Aurélien LALOUETTE est en charge de : </p></b></center>
                    <ul class="list-group">
                      <li class="list-group-item">Assurer l'ouverture et la fermeture automatiqu ed'un portail selon des horaires prédéfinis par le respaonsable</li>
                      <li class="list-group-item">Alerter le reponsable du parc en cas de  détection de défauts sur l'installation<br></li>
                      <li class="list-group-item">Créer un site web permettrant de visualiser en temps réel et différé les entrées/sorties du Parc des Moulins</li>
                    </ul>


                   
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Starter%20Template%20for%20Bootstrap_fichiers/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="Starter%20Template%20for%20Bootstrap_fichiers/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Starter%20Template%20for%20Bootstrap_fichiers/ie10-viewport-bug-workaround.js"></script>
  
    <script type="text/javascript">
        $(document).ready(function () {
          var trigger = $('.hamburger'),
              overlay = $('.overlay'),
             isClosed = false;

            trigger.click(function () {
              hamburger_cross();      
            });

            function hamburger_cross() {

              if (isClosed == true) {          
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
              } else {   
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
              }
          }
          
          $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
          });  
        });

    </script>
</body></html>