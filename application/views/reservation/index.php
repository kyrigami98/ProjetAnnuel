<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="<?php echo base_url('assets/img/intro-carousel/1.jpg'); ?>" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Je suis étudiant</h2>
                            <a id="inscrire" class="btn-get-started scrollto" 
                               data-toggle="modal" data-target="#exampleModalCenter">S'inscrire</a>
                            <a id="connectEtud" href="#featured-services" class="btn-get-started scrollto"
                               data-toggle="modal" data-target="#exampleModalCenter">Se connecter</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="<?php echo base_url('assets/img/intro-carousel/2.jpg'); ?>" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Je suis professeur</h2>
                            <a id="connectProf" class="btn-get-started scrollto"
                               data-toggle="modal" data-target="#exampleModalCenter">Se connecter</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
	
<!--==========================
Modal des formulaires
============================-->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<?php if (isset($_SESSION['error'])) { ?>
						<p class="btn btn-block btn-danger"><?= $_SESSION['error'] ?></p>
					<?php $_SESSION = array(); session_destroy(); } ?>

					<div class="cacher" id="Incriptionform">
						<form class="form" action="<?php echo base_url("Reservation/inscription_etudiant");?>" method="post">    
							<input type="hidden" name="statut" value="etudiant"/>
							<input class="form-control" type="text" name="nom" value="" placeholder="Nom" required=""/><br>
							<input class="form-control" type="text" name="prenom" value="" placeholder="Prénom" required=""/><br>
							<input class="form-control" type="email" name="email" value="" placeholder="Mail" required=""/><br>
							<input class="form-control" type="password" name="pass" value="" placeholder="Mot de passe" required=""/><br>                      
							<input class="btn btn-block btn-success active " type="submit" value="S'inscrire" /><br>
						</form>
					</div>

					<div class="cacher" id="connectEtudform">
						<form class="form" action="<?php echo base_url("Reservation/connect_etudiant");?>" method="post">    
							<input type="hidden" name="statut" value="etudiant"/>
							<input class="form-control" type="email" name="mail" value="" placeholder="Mail de l'etudiant" required=""/><br>
							<input class="form-control" type="password" name="pass" value="" placeholder="Mot de passe" required=""/><br>
							<input class="btn btn-block btn-success active " type="submit" value="Connexion"/><br>
						</form>
					</div>

					<div class="cacher" id="connectProfform">
						<form class="form" action="traitement/identifier.php" method="post">  
							<input type="hidden" name="statut" value="professeur"/>
							<input class="form-control" type="email" name="mail" value="" placeholder="Mail du professeur" required=""/><br>
							<input class="form-control" type="password" name="pass" value="" placeholder="Mot de passe" required=""/><br>
							<input class="btn btn-block btn-success active " type="submit" value="Connexion"/><br>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>


</section>