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
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row ">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                    Bienvenue au Burkina
                    Une destination a ne manquer
                </h1>
                <p class="lead">
                    Les richesses culturelles du Burkina alliées à sa situation géographique fait du Burkina Faso l’une
                    des principales destinations touristiques de l’Afrique de l’Ouest.
                    Situé au cœur de l’Afrique occidentale à la lisière de la savane et du sahel, le Burkina Faso est un
                    pôle d’attraction touristique pour des milliers de personnes.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Decouvrir</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
            <div class=" col-sm-12 col-lg-6 col-xs-12 car">
                <!-- <img src="images/ousga.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/ousga.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                                <p class="card-text ">
                                    Place des cineastes , Ouagadougou, Burkina Faso, secteur 3 (place des Cinéastes
                                    africains) entre les avenues Gamal A. Nasser, Mgr Thévenoud et la rue du Marché. Des
                                    éléments liés au cinéma (bobines, caméras, téléobjectifs, pellicules) sont
                                    structurés en forme de V, signe de la victoire du cinéma africain.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/sya.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="card-text ">
                                    La mosquée, qui porte le nom du quartier Dioulasso-bâ, a été construite vers 1880
                                    par l’iman Sidiki Sanou1. Samory Touré y aurait prié lors de son passage à
                                    Bobo-Dioulasso2,3 avant de poursuive son combat contre les colons.
                                </p>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img src="images/banfora.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="card-text ">

                                    Situées à environ 12 km au nord-ouest de Banfora, elles tiennent leur nom de la
                                    commune de Karfiguéla. Elles constituent l'un des sites touristiques les plus
                                    importants au Burkina Faso. La région des Cascades tire son nom de ces chutes d'eau.
                                </p>
                            </div>

                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
    <!-- fin section hero -->
    <!-- section dispositions pour un bon sejour -->
    <section class="container">
        <div class="row p-5 mb-4">
            <h1 class="card-title fw-bold sejournez">Sejournez tranquillement</h1>
            <div class="card-body">
                <div class="card-text sejour">
                    Nous disposons de tout ce qu'il faut pour vous accompagner dans votre sejour.<br>
                    <button class="btn btn-primary btn-lg" type="button">Voir plus</button>

                </div>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="row row-cols-1 row-cols-md-3 ">

                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 border-0">
                        <img src="images/a5740.jpeg" class="card-img-top" alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Sante</h5>
                            <p class="card-text">

                                S'informer sur les vaccins obligatoires, les traitements préventifs contre le
                                paludisme...
                            </p>
                        </div>
                        <div class="card-footer border-0">
                            <button class="btn btn-success">Voir plus</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 border-0">
                        <img src="images/airBrukina.jpg" class="card-img-top" alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Voyage</h5>
                            <p class="card-text">

                                Organiser votre séjour, les formalités, précautions de santé, agence de voyages... </p>
                        </div>
                        <div class="card-footer border-0">
                            <button class="btn btn-success">Voir plus</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 border-0">
                        <img src="images/Bravia_Hote1.jpg" class="card-img-top" alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Sejour</h5>
                            <p class="card-text">

                                Le pays dispose d'hôtels, de maisons d'hôtes, d'auberges, de campements, de villas...
                            <div class="card-footer border-0">
                                <button class="btn btn-success">Voir plus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 border-0">
                        <img src="images/Soupe-de-bœuf-pimenté.jpg" class="card-img-top" alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title">Gastronomie</h5>
                            <p class="card-text">

                                La diversité culturelle donne naissance à une gastronomie riche et variée à
                                découvrir...
                        </div>
                        <div class="card-footer border-0">
                            <button class="btn btn-success">Voir plus</button>
                        </div>
                    </div>
                </div>
            </div>
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

            <div class="col-lg-8">
                <div class="row  row-cols-sm-2 g-4">
                    <?php $reponse=$bdd->query("SELECT * FROM evenement");
                    while($donnees=$reponse->fetch()){
                    ?>
                    <div class="col d-flex flex-column gap-2">
                        <div>
                            <img src="images/<?php echo $donnees['photo'];?>" alt="" class="logo_evenement">

                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis"><?php echo $donnees['titre'];?></h4>
                        <p class="text-body-secondary">
                         <?php echo $donnees['contenu'];?>
                        </p>
                    </div>
                    <?php }?>

                    
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">
                    Parmi les évènements incontournables au Burkina, on peut citer :
                </h2>
                <p class="text-body-secondary">
                    Le Burkina Faso regorge plusieurs evenements culturels : Festivals culturels, biennales d’artistes,
                    salons, manifestations sportives…..
                    Le voyageur peut découvrir le Burkina Faso à travers ces manifestations traditionnelles ou modernes,
                    très riches de couleurs et de sons.

                </p>
                <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
            </div>

        </div>
    </section>
    <!-- fin section evenement a venir -->
    <!-- footer party include-->
    <?php include("footer.php");?>
    <!-- fin footer  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>