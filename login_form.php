<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programme D-CLIC</title>
  <link rel="stylesheet" href="style_log.css">
  <script defer src="/script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


</head>

<body>
  <div class="bg-light">

    <?php include("navbar.php")?>
  </div>
  <h3 class="mb-5 p-5 text-center">Connexion Compte Utilisateur</h3>
  <div class="container ">
    <form action="login.php" method="post" class="dim">
      <!-- Email input -->
      <div class="row justify-content-center">
        <div class="col-lg-5 col-xs-12 col-sm-12 col-md-6">
          <div class="form-outline mb-4">
            <input type="email" id="form1Example1" class="form-control" name="Adress" />
            <label class="form-label" for="form1Example1">Adress email</label>
          </div>
        </div>

        <!-- Password input -->
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-5 col-xs-12 col-sm-12 col-md-6">
          <div class="form-outline mb-4">
            <input type="password" id="form1Example2" class="form-control" name="Mot_de_passe" />
            <label class="form-label" for="form1Example2">Mot de passe</label>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <button type="submit" class="btn btn-primary btn-block" name="submit">Se connecte</button>
            </div>
            <div class="col-lg-4">
              <a href="#!">Mot de passe oublié?</a>

            </div>
          </div>

        </div>

      </div>
      <!-- 2 column grid layout for inline styling -->

  </div>

  <!-- Submit button -->
  </form>
  </div>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>