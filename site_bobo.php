<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="features.css">
    <title>Site touristique Bobo-Dioulasso</title>
</head>

<body>
    <?php include("navbar.php");?>
    <!-- hero debut -->
    <div id="intro-example" class="p-5 text-center bg-image">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white mt-5">
                    <h1 class="mb-5 bienvenue">Bienvenue</h1>
                    <h2 class="mb-4 card-title sya">
                        Dans la belle cite de Sya
                    </h2>

                </div>
            </div>
        </div>
    </div>
    <!-- fin hero -->
    <!-- section desc bobo -->
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 pt-5">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                    Bobo(peuple)
                </h1>
                <p class="lead">
                    Les Bobo sont une population d'Afrique de l'Ouest vivant principalement au nord-ouest du Burkina Faso, également de l'autre côté de la frontière au Mali. Le nom de la ville de Bobo-Dioulasso – baptisée ainsi en 1904 –, signifie « la maison des Bobo-Dioula. Les Bwas, à la différence de la plupart des autres peuples du Burkina Faso et du Mali, n'ont pas d'autorité politique centralisée. 
                </p>
                
            </div>
        </div>
    </section>
    <!-- section site a voir -->
    <section class="container pt-5">
        <div class="row">
            <h2 class="card-title">A voir Absolument ces sites touristique</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-3">
            <?php $reponse=$bdd->query("SELECT * FROM site_touristiq WHERE id_ville=1");
                while($donnees= $reponse->fetch()){
            ?>
            
            <div class="col-lg-4">
                <div class="card">
                    <img src="images/<?php echo $donnees['photo'];?>" class="card-img-top" alt="Hollywood Sign on The Hill" />
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
    <!-- section evenement debut -->
    <section class="container pt-5">
        <div class="row">
            <h1 class="card-title evenement_bobo">Evenements culturelles</h1>
        </div>
        <div class="row">
        
            <div class="col-lg-6 evenement_culturel">
            <?php $reponse=$bdd->query("SELECT * FROM evenement WHERE id_ville=1 ");
        while($donnees=$reponse->fetch()){
            ?>    
                <div class="card border-0">
                    <a href="#"><img src="images/<?php echo $donnees['photo'];?>" alt="bobo art" class="image_evenement"></a>
                    <div class="card-body">
                        <h5 class="card-title">
                        </h5>
                    </div>
                </div>
                <?php } ?>

               
            </div>
            <div class="col-lg-6">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/bolo.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                                <p class="card-text ">
                                    Le projet du festival Bolo’Arts est initié dans le cadre des activités de
                                    sensibilisation et de développement socioculturelles et artistiques de l’association
                                    Bolo’Arts.
                                </p>
                            </div>
                        </div>
                       
                        <div class="carousel-item">
                            <img src="images/Visuel-snc-2023.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="card-text ">
                                    La Semaine nationale de la culture (SNC) est un biennal culturel qui se tient chaque
                                    deux ans à Bobo-Dioulasso depuis 1990. L'évènement a été créé en 1983.
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
    </section>
    <!-- fin section evenement -->
    <!-- fin site -->
    <!-- footer party include-->
    <?php include("footer.php");?>
    <!-- fin footer  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>