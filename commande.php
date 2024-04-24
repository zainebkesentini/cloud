<?php

    


    
    require_once ("pdo.php");
/* récupération des données du formulaire */
$numéro  = $_POST['numéro'];
$nom_user = $_POST['nom_user'];
$email = $_POST['email'];
$date = $_POST['date'];
$addresse = $_POST['addresse'];
$nom_food = $_POST['nom_food'];
$photo=$_FILES['photo']['name'];
$fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );



$sql= "INSERT INTO commande (numéro,nom_user,email,date,addresse,nom_food, photo) VALUES
('$numéro','$nom_user','$email','$date','$addresse', '$nom_food','$photo')";
$pdo->exec($sql);
header('location:moncommande.php');