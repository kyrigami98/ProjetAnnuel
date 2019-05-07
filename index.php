<?php
include_once 'Pages/header.php';
include_once("traitement/connect.php");
?>

<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
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
                    <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
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
</section><!-- #intro -->


<!--p>
                     <form class="form" action="traitement/user.php">      
                     <input class="form-control" type="text" name="" value="" placeholder="Nom" />
                     <input class="form-control" type="text" name="" value="" placeholder="Prénom" />
                     <input class="form-control" type="email" name="" value="" placeholder="Mail" />
                     <input class="btn btn-success active " type="submit" value="Connexion" />
                 </form>
                 </p-->


<?php include_once 'Pages/footer.php'; ?>
