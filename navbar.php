<?php 
session_start();
include("config.php");?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
      aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Site touristiques
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="site_bobo.php">Bobo-Dioulasso</a></li>
            <li><a class="dropdown-item" href="site_banfora.php">Banfora</a></li>
            <li><a class="dropdown-item" href="site_ouaga.php">Ouagadougou</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contac.php">Contacts</a>
        </li>
      </ul>

      <?php if(isset($_SESSION['nom_utilisateur'])){?>
                                                    
      <?php echo '<a href="#"><button class="btn btn-success">'.''.$_SESSION['nom_utilisateur'].'</button></a>';?>

        <?php echo '<a href="Logout.php"><button class="btn btn-info">Deconnexion</button></a>';?>

      <?php } else { ?>
                    
      <a href="login_form.php"><button class="btn btn-success">Se connecter</button></a>
      <a href="register_form.php"><button class="btn btn-info">S'inscrire</button></a>
      
      <?php }?>

    </div>
  </div>
</nav>