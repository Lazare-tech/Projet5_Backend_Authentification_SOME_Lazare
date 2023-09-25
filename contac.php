<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Contacts</title>
</head>
<body>
<?php include("navbar.php");?>
<section class="container">
<form method="post"" action="formContact.php" class="justify-content-center">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="firstname" />
        <label class="form-label" for="form6Example1">First name</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="lastname" />
        <label class="form-label" for="form6Example2">Last name</label>
      </div>
    </div>
  </div>


  <!-- Email input -->
  <div class="form-outline mb-4 col-md-8">
    <input type="email" id="form6Example5" class="form-control" name="email" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4 col-md-8">
    <input type="number" id="form6Example6" class="form-control" name="phone" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-2 col-md-8">
    <textarea class="form-control" id="form6Example7" rows="4" name="message"></textarea>
    <label class="form-label" for="form6Example7">Message</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
    <label class="form-check-label" for="form6Example8"> Create an account? </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Envoyer</button>
</form>
</section>
<?php include("footer.php");?>
</body>
</html>