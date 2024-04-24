<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<?php
  require_once "pdo.php";

  // Check if the database connection is established
 
  if ($_POST["select"] == "visiteur"){

    $login = $_POST["login"];
    $pwd = $_POST["pwd"];
  if (!empty($login) && !empty($pwd)) {
      $sql = "INSERT INTO visiteur (user, pwd) VALUES ('$login', '$pwd')";
      $pdo->exec($sql);}
   
      // Les champs sont vides, afficher un message d'erreur ou prendre une autre action
 
    }
   else {
    
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];
    if (!empty($login) && !empty($pwd)) {
      $sql1 = "INSERT INTO administrateur (user, password) VALUES ('$login', '$pwd')";
      $pdo->exec($sql1);}
    
  }
  
?>
<body>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="">
    <form action="compte.php" method="post" >
    <table class="table"  >
    <style>
  .table {
    border: 1px solid black;
  }
</style>
      <tr>
        <td><label class="heading" for="login">entrer votre nom:</label></td>
        <td><input class="table" type="text" name="login" id="login"></td>
      </tr>
      <tr>
        <td><label class="heading"for="pwd">entrer votre mot de Passe:</label></td>
        <td><input class="table" type="password" name="pwd" id="pwd"></td>
      </tr>
      <tr>
      <td>
      
      <select id="select" name="select">
      <option value="" disabled selected>Select un compte</option>
    <option >visiteur</option>
    <option>admin</option>
    
    </select></td></tr>
        <td><input href="#" class="btn" type="submit" value="créer un compte" class="btn btn-primary"></td>
      </tr>
    </table>
  </form>
    
    </div>
    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>
  
</body>
</html>
