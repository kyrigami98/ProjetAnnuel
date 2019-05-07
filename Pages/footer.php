
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
                    <form class="form" action="traitement/inscription.php" method="post">    
                        <input type="hidden" name="statut" value="etudiant"/>
                        <input class="form-control" type="text" name="nom" value="" placeholder="Nom" required=""/><br>
                        <input class="form-control" type="text" name="prenom" value="" placeholder="Prénom" required=""/><br>
                        <input class="form-control" type="email" name="email" value="" placeholder="Mail" required=""/><br>
                        <input class="form-control" type="password" name="pass" value="" placeholder="Mot de passe" required=""/><br>                      
                        <input class="btn btn-block btn-success active " type="submit" value="S'inscrire" /><br>
                    </form>
                </div>

                <div class="cacher" id="connectEtudform">
                    <form class="form" action="traitement/identifier.php" method="post">    
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


<!--==========================
  Footer
============================-->
<footer id="footer">

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Groupe 4</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
            -->
            Designed by <a href="Admin/index.php">Groupe 4</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#connectProf").click(function () {
            $("#connectEtudform").hide();
            $("#Incriptionform").hide();
            $("#exampleModalLongTitle").text("Se connecter en tant que prof");
            $("#connectProfform").show();
        });

        $("#inscrire").click(function () {
            $("#connectEtudform").hide();
            $("#connectProfform").hide();
            $("#exampleModalLongTitle").text("Inscription étudiant");
            $("#Incriptionform").show();
        });

        $("#connectEtud").click(function () {
            $("#Incriptionform").hide();
            $("#connectProfform").hide();
            $("#exampleModalLongTitle").text("Se connecter en tant qu'étudiant");
            $("#connectEtudform").show();
        });

    });

</script>

<script type="text/javascript">

    let scanner = new Instascan.Scanner({video: document.getElementById('preview')});

    $("#startscan").click(function () {
        $("#normal").hide();
        $("#preview").show();
        $("#stopscan").show();
        $("#startscan").hide();

        scanner.addListener('scan', function (content) {
            alert(content);
        });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function (e) {
            console.error(e);
        });

    });

    $("#stopscan").click(function () {
        $("#preview").hide();
        $("#normal").show();
        $("#stopscan").hide();
        $("#startscan").show();
        scanner.stop();
    });


</script>
</body>
</html>
