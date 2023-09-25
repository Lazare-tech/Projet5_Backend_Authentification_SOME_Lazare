<?php 
include("config.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$messag=$_POST['message'];

if(isset($_POST['submit'])) {
    if(empty($_POST['firstname'])
      OR empty($_POST['lastname'])
      OR empty($_POST['email'])
       OR empty($_POST['phone'])
       OR empty($_POST['message'])){
           echo "Veuillez renseigner tous les champs";
       } else{
        $reponse=$bdd->prepare("INSERT  INTO contact (firstname,lastname,email,phone,messag) VALUES (:firstname,
        :lastname,:email,:phone,:messag)");
$reponse->execute([
':firstname' => $firstname,
':lastname' => $lastname,
':email' => $email,
':phone' => $phone,
':messag' => $messag,
]);

       }
}













?>
