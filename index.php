<?php 
$pdo = new PDO('mysql:host=den1.mysql4.gear.host;dbname=training2','training2','Ij28If6!?G9e');
$rando=$pdo->query("SELECT*FROM hiking");

require "create.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
    <tr>
    <th>nom</th>
    <th>Difficulté</th>
    <th>distance</th>
    <th>durée</th>
    <th>dénivelé</th>
    </tr>
      <?php 
    foreach ($rando as $ligne){
      //print_r($ligne);
      echo '<br>';
      echo'<tr>'.'<td>'. $ligne['name'].'</td>';
      echo '<td>'.$ligne['difficulty'].'</td>';
      echo '<td>'.$ligne['distance'].'</td>';
      echo '<td>'.$ligne['duration'].'</td>';
      echo '<td>'.$ligne['height_difference'].'</td>'.'</tr>';

    }

      
      ?>

    </table>
  </body>
</html>


