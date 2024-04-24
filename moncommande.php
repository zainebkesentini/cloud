
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
 
 require_once "pdo.php";
 

                
                $sql="SELECT numéro,nom_user,email,date,addresse,nom_food,photo from commande order by numéro desc";
                $res=$pdo->query($sql);
                
                ?>
<div class="col-md-6 col-xs-12 ">  
<div class="panel panel-info"> 
    <h1 class= 'panel-heading'>mon commande</h1>
    <div class= 'panel-body'> 
        

                <table border=1 class='table table-striped'>
                <tr> <td> numéro </td> <td> nom_user </td> <td> email </td><td> date </td><td>addresse</td> <td> nom_food </td><td>photo</td> </tr>
                  <?php foreach ($res as $row):?>
                           <tr>
                          <td><?=$row['numéro']?></td>
                          <td><?=$row['nom_user']?></td>
                          <td><?=$row['email']?></td>
                          <td><?=$row['date']?></td>
                          <td><?=$row['addresse']?></td>
                          <td><?=$row['nom_food']?></td>
                          <td>  <img src= "images/<?=$row['photo']?>" width="50" height="50">     </td>
                          <td><a href="delete.php?numéro_etd=<?php echo $row['numéro'];?>">Supprimer</a> 
                           <a href="modifForm.php?numéro_etd=<?php echo $row['numéro'];?>">Modifier</a> </td>
                           </tr> <?php endforeach;?>                 
                </table>
                </div>   </div></div>
               
                </body>
                </html>