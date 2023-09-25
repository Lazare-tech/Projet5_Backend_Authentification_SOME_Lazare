<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="features.css">
    <title>Acceuill</title>
</head>

<body>
    <?php include("navbar.php");?>

    <!-- section hero debut -->


    <div lc-helper="background" class="container-fluid py-5 mb-4 d-flex justify-content-center hero_acc">
        <div class="p-5 mb-4 lc-block col-xxl-7 col-lg-8 col-12" style=" backdrop-filter: blur(6px) saturate(102%);
                -webkit-backdrop-filter: blur(6px) saturate(102%);
                background-color: rgba(255, 255, 255, 0.45);
                border-radius: 12px;
                border: 1px solid rgba(209, 213, 219, 0.3);">
            <div class="lc-block">
                <div editable="rich">
                    <h2 class="fw-bolder display-3">
                        Bienvenue au <span class="b">Bu</span><span class="r">rki</span><span class="na">na</span>
                    </h2>
                    <h4 class="fw-bolder display-6"><span class="b">Une destination</span> a ne <span
                            class="na">manquer</span></h4>
                </div>
            </div>
            <div class="lc-block col-md-8 col-xs-12">
                <div editable="rich">
                    <p class="card-text">
                        Les richesses culturelles du Burkina alliées à sa situation géographique fait du Burkina Faso
                        l’une
                        des principales destinations touristiques de l’Afrique de l’Ouest.
                        Situé au cœur de l’Afrique occidentale à la lisière de la savane et du sahel, le Burkina Faso
                        est un
                        pôle d’attraction touristique pour des milliers de personnes.

                    </p>
                </div>
            </div>
            <div class="lc-block">
                <a class="btn btn-dark" href="#custom-cards" role="button">Decouvrir</a>
            </div>
        </div>
    </div>



    <!-- fin section hero -->
    <!-- section dispositions pour un bon sejour -->
    <section class="container-fluid condition">
        <section class="container ">
            <div class="row pt-5">
                <h1 class="card-title text-white">Planifiez Votre Voyage</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 pb-4 pt-3">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/a5740.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                        <!-- <div class="voir_condition ">
                            <i class="fas fa-plus"></i>
                        </div> -->

                        <div class="card-body">

                            <button class="btn btn-warning float-end plus"><i class="fas fa-plus"></i></button>
                            <h5 class="card-title">
                                Santé et Sécurité
                            </h5>



                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/airBrukina.jpg" class="card-img-top" alt="Palm Springs Road" />
                        <div class="card-body">
                            <button class="btn btn-warning float-end plus"><i class="fas fa-plus"></i></button>

                            <h5 class="card-title">Se rendre au Burkina</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/Bravia_Hote1.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <button class="btn btn-warning float-end plus"><i class="fas fa-plus"></i></button>

                            <h5 class="card-title">Sejour</h5>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/Soupe-de-bœuf-pimenté.jpg" class="card-img-top"
                            alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <button class="btn btn-warning float-end plus"><i class="fas fa-plus"></i></button>

                            <h5 class="card-title">Gastronomie</h5>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/visa.jpeg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <button class="btn btn-warning float-end plus"><i class="fas fa-plus"></i></button>

                            <h5 class="card-title">Visa</h5>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card ">
                        <img src="images/leversoleil.jpeg" class="card-img-top " style="height:14rem"
                            alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <button class="btn btn-warning float-end plus"><i class="fas fa-plus"></i></button>

                            <h5 class="card-title">Meteo</h5>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>
    <!-- section site touristique -->
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Decouvrez nos merveilleux sites</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ouaga_card">

                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h4 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ouagadougou</h4>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="images/ousga.jpg" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>

                            <a href="site_ouaga.php" class="btn btn-light">Decouvrir</a>

                        </ul>
                    </div>

                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg bobo_card">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h4 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                            Bobo-Dioulasso
                        </h4>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="images/sya.jpg" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>

                            <a href="site_bobo.php" class="btn btn-light">Decouvrir</a>


                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg banfora_card">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Banfora</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="images/banfora.jpg" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>

                            <a href="site_banfora.php" class="btn btn-light">Decouvrir</a>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin section site touristique -->
    <!-- fin dispositions pour un bon sejour -->
    <!-- section evenement a venir debut -->
    <section class="container">
        <h2 class="pb-2 border-bottom">Evenements a venir</h2>

        <div class=" row py-5">
            <div class="col-lg-5 d-flex flex-column align-items-start gap-2 pt-5">
                <h2 class="fw-bold text-body-emphasis">
                    Parmi les évènements incontournables au Burkina, on peut citer :
                </h2>
                <p class="text-body-secondary">
                    Le Burkina Faso regorge plusieurs evenements culturels : Festivals culturels, biennales d’artistes,
                    salons, manifestations sportives
                    Le voyageur peut découvrir le Burkina Faso à travers ces manifestations traditionnelles ou modernes,
                    très riches de couleurs et de sons.

                </p>
                <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
            </div>
            <div class="col-lg-7">
                <div class="row  row-cols-sm-2 g-4">
                    <?php $reponse=$bdd->query("SELECT * FROM evenement");
                    while($donnees=$reponse->fetch()){
                    ?>
                    <div class="col-xs-12 d-flex flex-column gap-2">
                        <div>
                            <img src="images/<?php echo $donnees['photo'];?>" alt="" class="logo_evenement">

                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">
                            <?php echo $donnees['titre'];?>
                        </h4>
                        <p class="text-body-secondary">
                            <?php echo $donnees['contenu'];?>
                        </p>
                    </div>
                    <?php }?>


                </div>
            </div>
          

        </div>
    </section>

    <!-- <div id="carouselExampleControls" class="carousel carousel-dark slide container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-wrapper container-sm d-flex  justify-content-around row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title1</h5>
                            <p class="card-text"></p>

                        </div>
                    </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>

                        </div>
                    </div>
                </div>
            </div>
           
           
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</div> -->

        <!-- fin section evenement a venir -->
        <!-- footer party include-->
        <?php include("footer.php");?>
        <!-- fin footer  -->
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>