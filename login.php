<?php
require_once "pdo.php";
$login = "";
$pwd = "";
$errorMsg = ""; // Variable pour stocker le message d'erreur

if (isset($_POST['login'])) {
  $login = $_POST["login"];
  $pwd = $_POST["pwd"];
  try {
    $req = "SELECT * FROM visiteur WHERE user='$login' AND pwd='$pwd'";
    $reqa = "SELECT * FROM administrateur WHERE user='$login' AND password='$pwd'";
    $res = $pdo->query($req);
    $res1 = $pdo->query($reqa);
    if ($data = $res->fetchAll(PDO::FETCH_ASSOC)) {
      $_SESSION["connecte"] = "1";
      $_SESSION["user"] = $data[0]["user"];
      header("location:indexuser.php");
      exit();
    } else if ($data = $res1->fetchAll(PDO::FETCH_ASSOC)) {
      $_SESSION["connecte"] = "1";
      $_SESSION["user"] = $data[0]["user"];
      header("location:indexadmin.php");
      exit();
    } else {
      $errorMsg = "Aucun utilisateur trouvé."; // Message d'erreur
    }
  } catch (PDOException $e) {
    echo "ERREUR: " . $e->getMessage() . " LIGNE: " . $e->getLine();
  }
}

// Affichage du message d'erreur
if (!empty($errorMsg)) {
  echo '<p class="message" style="color:  red;">' . $errorMsg . '</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
      .table {
        border: 1px solid black;
      }
    </style>
</head>
<body>
  <header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>
    <div id="menu-bar" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="login.php">connexion</a>
        <a href="compte.php">créer un compte</a>
    </nav>
  </header>

  <section class="home" id="home">
    <div class="content">
      <form action="login.php" method="post" enctype="multipart/form-data">
        <table class="table">
          <tr>
            <td><label class="heading" for="login">Utilisateur:</label></td>
            <td><input class="table" type="text" name="login" id="login"></td>
          </tr>
          <tr>
            <td><label class="heading" for="pwd">Mot de Passe:</label></td>
            <td><input class="table" type="password" name="pwd" id="pwd"></td>
          </tr>
          <tr>
            <td></td>
            <td><input class="btn" type="submit" value="Connecter" class="btn btn-primary"></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="image">
      <img src="images/home-img.png" alt="">
    </div>
  </section>
</body>
</html>
