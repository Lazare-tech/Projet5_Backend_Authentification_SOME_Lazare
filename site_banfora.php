<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="features.css">
    <title>Site touristique Banfora</title>
</head>

<body>
    <?php include("navbar.php");?>
    <!-- hero debut -->
    <div id="hero_banf" class="p-5 text-center bg-image">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white mt-5">
                    <h1 class="mb-5 bienvenue_banf text-white">Bienvenue</h1>
                    <h2 class="mb-4 card-title  cascade">
                        Dans les Cascades
                    </h2>

                </div>
            </div>
        </div>
    </div>

    <!-- fin hero -->
    <!-- section one -->
    <section class="container p-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0">
                    <div class="card-text">
                        <h1 class="card-title">Que savoir sur Banfora?</h1>
                        Avec une population proche des 100 000 habitants, Banfora, capitale de la région des Cascades et
                        de la vaste province de la Comoé, est la deuxième ville du Sud-Ouest. Banfo signifie « espace
                        clair », car, avant 1903, l’endroit était encore sauvage et inhabité. Idéalement située dans la
                        partie la plus verte du pays, Banfora n’a été créée qu’au début du XXe siècle, par les Karaboro,
                        les Turka et les Goin arrivés du Ghana.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section carte maps -->
    <section class="container">
        <div class="row">
            <h1 class="card-title">Faites bon sejour!!</h1>
        </div>
    </section>

    <section class="container">

        <div class="row">
            <div class="col-lg-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15684.685925692444!2d-4.763280836365077!3d10.64378279428308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbf!4v1695643141383!5m2!1sfr!2sbf"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="carte ">

                </iframe>

            </div>
            <div class="col-lg-6">
                <div id="carouselExampleCaptions" class="carousel slide" >
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="height: 25rem;">
                        <div class="carousel-item active">
                            <img src="images/cascadePalace.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>CASCADES PALACE</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/restaurant1.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>LE TROPICANA</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/restaurant2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>LE CALYPSO </h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/auberge1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>AUBERGES SAINT-DAVID DJATIGUI</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hotel.webp" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>HOTEL JACKSON</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/campement.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>CAMPEMENT SIAKADOUGOU</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/bar.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>LE 226</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- fin section carte maps -->

    <section class="container">


    </section>
    <section class="container pt-5">
        <div class="row">
            <h2 class="card-title">A voir Absolument ces sites touristique</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-3">
            <?php $reponse=$bdd->query("SELECT * FROM site_touristiq WHERE id_ville=2");
                    while($donnees= $reponse->fetch()){
                ?>

            <div class="col-lg-4">
                <div class="card">
                    <img src="images/<?php echo $donnees['photo'];?>" class="card-img-top"
                        alt="Hollywood Sign on The Hill" style="height:18rem" />
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $donnees['titre'];?>
                        </h5>
                        <p class="card-text">

                            <?php echo $donnees['contenu'];?>
                        </p>

                    </div>
                </div>
            </div>
            <?php }?>

        </div>

    </section>
    <!-- fin section one -->
    <!-- footer party include-->
    <?php include("footer.php");?>
    <!-- fin footer  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>