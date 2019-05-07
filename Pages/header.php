<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Projet Annuel</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">

        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <!-- =======================================================
          Theme Name: BizPage
          Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

    <body>

        <style>
            .circle{
                border-radius:50px
            }
            .cacher{
                display: none;
            }
        </style>

        <?php
        session_start();
        include_once("traitement/connect.php");
        ?>
        <!--==========================
           Header
         ============================-->
        <header id="header"  style="background-color:black;">

            <div class="container-fluid">

                <div id="logo" class="pull-left">
                    <h1><a href="index.php" class="scrollto">Réservation de salle</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>

                <nav id="nav-menu-container">
                    <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) { ?>
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="accueil.php">Accueil</a></li>
                            <li class="menu-has-children"  data-toggle="modal" data-target="#myMod">
                                <a href="#">Notifications 
                                    <span class='badge-success circle' style="padding:3px;"> 10 </span>
                                </a>
                            </li>
                            <li class="menu-has-children"><a href=""> <?= $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></a>
                                <ul>
                                    <li  data-toggle="modal" data-target="#rdv"><a href="#">Mes rendez-vous</a></li>
                                    <li class="">
                                        <form method="POST" action="traitement/deconnexion.php">
                                            <button class="btn btn-block" type="submit"  ><i class='fa fa-1x fa-power-off'></i> Deconnexion</button>
                                        </form>  
                                    </li>
                                </ul>
                            </li>
                        </ul> 
                    <?php } ?>
                </nav><!-- #nav-menu-container -->

            </div>
        </header><!-- #header -->

        <!--==========================
          Intro Section
        ============================-->