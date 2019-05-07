<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header"> <br> <br>
                <h3>Welcome <?= $_SESSION['prenom']." ".$_SESSION['nom'] ?></h3>
                <br>
            </header>

            <p class="wow"> <?= var_dump($_SESSION) ?></p>


            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp"  data-toggle="modal" data-target="#myModal">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo base_url('assets/img/about-mission.jpg'); ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Réserver une salle</a></h2>
                        <p>
                            On pourra connaître le nombre de places dispo dans la salle et dire si on
                            est d'accord ou non pour que d'autres groupes travaillent aussi dans la même salle que nous.   </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s" data-toggle="modal" data-target="#rdv">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo base_url('assets/img/about-plan.jpg'); ?>" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Voir mes rendez-vous</a></h2>
                        <p>
                            Pouvoir faire une demande de prise de rdv avec un prof ou des étudiants: si le prof exepte de vous recevoir la salle sera réserver </p>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img" id="scanner">
                            <video id="preview" class="img-fluid cacher"></video>
                            <div class="img" >
                                <img src="<?php echo base_url('assets/img/about-vision.jpg'); ?>" id="normal" alt="" class="img-fluid">
                                <div class="icon" id="startscan"><i class="fa fa-qrcode"></i></div>
                                <div class="icon cacher" id="stopscan"><i class="fa fa-stop"></i></div>
                            </div>
                        </div>
                        <h2 class="title"><a href="#">Scannez un code QR</a></h2>
                        <p>Si je scanne une salle occupée par des gens qui ne m'ont pas invité : message m'indiquant 
                            jusqu'à quelle heure la salle est occupée,
                            ou si elle est occupée toute la journée.  </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">

    </section><!-- #services -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Team</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                        <img src="<?php echo base_url('assets/img/team-1.jpg'); ?>" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="<?php echo base_url('assets/img/team-2.jpg'); ?>" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="<?php echo base_url('assets/img/team-3.jpg'); ?>" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member">
                        <img src="<?php echo base_url('assets/img/team-4.jpg'); ?>" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #team -->
	
	<!--==========================
	 Listes des salles
	============================-->
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">

				<div class="modal-body">
					<div class="container">

						<header class="section-header wow fadeInUp">
							<h3>Listes des salles</h3>

							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">Numéro de salle
											<input class="form-control" type="text" name="searchnum" value="" placeholder="Rechercher" required=""/><br>
										</th>
										<th scope="col">Date
											<input class="form-control" type="date" name="date" value="" placeholder="Rechercher a une date" required=""/><br>

										</th>
										<th scope="col">Heure de début
											<input class="form-control" type="time" name="time  " value="" placeholder="Rechercher a une date" required=""/><br>
										</th>
										<th scope="col" class="">Option </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">A1</th>
										<td>12/05/2019</td>
										<td>12:00</td>
										<td>
											<button class='btn btn-success'> <i class='fa fa-play'></i> Réserver</button>
										</td>
									</tr>
									<tr>
										<th scope="row">A2</th>
										<td>12/05/2019</td>
										<td>09:20</td>
										<td class="text-danger">Se libère à <b>08:45</b></td>
									</tr>
									<tr>
										<th scope="row">A3</th>
										<td>12/05/2019</td>
										<td>08:45</td>
										<td class="text-danger">Se libère à <b>08:45</b></td>
									</tr>
								</tbody>
							</table>
						</header>

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	<div id="ok" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Scanner un code</h4>
				</div>
				<div class="modal-body img-fluid">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>


</main>