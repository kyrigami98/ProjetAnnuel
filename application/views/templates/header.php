<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Projet Annuel</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
        <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		
        <!-- Libraries CSS Files -->
        <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css');?>" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

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
        <!--==========================
           Header
         ============================-->
        <header id="header"  style="background-color:black;">

            <div class="container-fluid">

                <div id="logo" class="pull-left">
                    <h1><a href="<?php echo base_url(); ?>" class="scrollto">Réservation de salle</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>

                <nav id="nav-menu-container">
                    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="<?php echo base_url('Reservation/accueil'); ?>" >Accueil</a></li>
                            <li class="menu-has-children"  data-toggle="modal" data-target="#myMod">
                                <a href="#">Notifications 
                                    <span class='badge-success circle' style="padding:3px;"> 10 </span>
                                </a>
                            </li>
                            <li class="menu-has-children"><a href=""> <?= $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></a>
                                <ul>
                                    <li  data-toggle="modal" data-target="#rdv"><a href="#">Mes rendez-vous</a></li>
                                    <li class="">
                                        <form method="POST" action="<?php echo base_url('Reservation/deconnection'); ?> ">
                                            <button class="btn btn-block" type="submit"  ><i class='fa fa-1x fa-power-off'></i> Déconnexion</button>
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
	 Modal de notification
	============================-->
	<!-- Modal -->
	<div id="myMod" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Notifications</h4>
				</div>
				<div class="modal-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Numéro de salle</th>
								<th scope="col">Membres du groupe</th>
								<th scope="col">Date</th>
								<th scope="col">Heure de début</th>
								<th scope="col" class="">Rejoindre le groupe </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">A1</th>
								<td>@Kyriel, @Brain @Kev</td>
								<td>12/05/2019</td>
								<td>12:00</td>
								<td>
									<button class='btn btn-success'> <i class='fa fa-play'></i> oui </button>
									<button class='btn btn-danger'> <i class='fa fa-stop'></i> non </button>
								</td>
							</tr>
							<tr>
								<th scope="row">A2</th>
								<td>@Kyriel, @Brain @Kev</td>
								<td>12/05/2019</td>
								<td>09:20</td>
								<td>
									<button class='btn btn-success'> <i class='fa fa-play'></i> oui </button>
									<button class='btn btn-danger'> <i class='fa fa-stop'></i> non </button>
								</td>
							</tr>

						</tbody>
					</table>    
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

	<!--==========================
	 Modal de notification
	============================-->
	<div id="rdv" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Mes rendez-vous</h4>
				</div>
				<div class="modal-body">

					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Numéro de salle</th>
								<th scope="col">Membres du groupe</th>
								<th scope="col">Date</th>
								<th scope="col">Heure de début</th>
								<th scope="col" class="">Rejoindre le groupe </th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<th scope="row">A2</th>
								<td>@Kyriel, @Brain @Kev</td>
								<td>12/05/2019</td>
								<td>09:20</td>
								<td>
									<button class='btn btn-danger'> <i class='fa fa-stop'></i> Annuler </button>
								</td>
							</tr>

						</tbody>
					</table>    

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>