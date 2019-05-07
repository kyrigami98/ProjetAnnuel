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
<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/superfish/hoverIntent.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/superfish/superfish.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/wow/wow.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/touchSwipe/jquery.touchSwipe.min.js'); ?>"></script>
<!-- Contact Form JavaScript File -->
<script src="<?php echo base_url('assets/js/contactform/contactform.js'); ?>"></script>


<!-- Template Main Javascript File -->
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

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
