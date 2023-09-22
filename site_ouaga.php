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
    <title>Site touristique Ouagadougou</title>
</head>

<body>
    <?php include("navbar.php");?>
<!-- hero debut -->
<div id="hero_ouaga" class="p-5 text-center bg-image justify-content-center">
        <div class="mask">
            <div class="d-flex justify-content-center">
                <div class="text-white mt-5">
                    <h1 class="card-title mb-5 diversites ">Diversites culturelles</h1>
                    <h3 class="card-title pot">Potentialites touristiques</h3>
            

                </div>
            </div>
        </div>
    </div>
<!-- fin hero -->
<!-- section debut -->
<section class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 pt-5">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                    Ouagadougou origine
                </h1>
                <p class="lead">
                Les Nyonyonsés se soumirent, et la localité fut alors baptisée « Wogdgo » : « Venez m'honorer ». C'est cette appellation qui aurait évolué pour donner Woghodogo, puis Ouagadougou dans sa version occidentalisée. La ville devint capitale de l'Empire mossi en 1441 sous le règne de Naba Niandéfo.
                </p>
                
            </div>
        </div>
    </section>
<!-- fin section -->
<section class="container pt-5">
        <div class="row">
            <h2 class="card-title">A voir Absolument ces sites touristique</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-3">
<?php $reponse=$bdd->query("SELECT * FROM site_touristiq WHERE id_ville=3 ");
while($donnees=$reponse->fetch()){
?>
            <div class="col-lg-4">
                <div class="card">
                    <img src="images/<?php echo $donnees['photo'];?>" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h6 class="card-title">
                            <strong><?php echo $donnees['titre'];?></strong>
                        </h6>
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
            <h1 class="card-title">Evenements culturelles</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 evenement_culturel">
                <?php $reponse=$bdd->query("SELECT * FROM evenement WHERE id_ville=3 ");
                while($donnees=$reponse->fetch()){
                    ?>    
                <div class="card border-0">
                    <a href="#"><img src="images/<?php echo $donnees['photo'];?>" alt="siao" class="image_evenement"></a>
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
                            <img src="images/fes.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                                <p class="card-text ">
                                    Le Festival panafricain du cinéma et de la télévision de Ouagadougou ou FESPACO est l'un des plus grands festivals de cinéma africains. Créé en 1969 sous le nom de « Premier festival de Cinéma Africain de Ouagadougou », il se déroule tous les deux ans à Ouagadougou, la capitale du Burkina Faso.
                                </p>
                            </div>
                        </div>
                       
                        <div class="carousel-item">
                            <img src="images/LOGO-KUNDEac19.jpg" class="d-block w-100" alt="...">
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
    <!-- footer party include-->
    <?php include("footer.php");?>
    <!-- fin footer  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>