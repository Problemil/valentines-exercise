<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
<?php
include 'header.php';

?>

<style>
  .produkth1 {
  text-align: center;
  }

  .productTable {
    margin: auto;
  }
 </style>
</head>
<body>


  <h1 class = "produkth1"> Här är en tabell på våra produkter med pris och uppskattningsnivå! </h1>
  
  <div class = "tabell"> 
    <?php
  $produkter = array(
    array("name" => "Chokladask", "pris" => "40kr", "details" => "4/10"),
    array("name" => "Nallebjörn", "pris" => "60kr", "details" => "5/10"),
    array("name" => "Blombukett", "pris" => "90kr", "details" => "7/10"),
    array("name" => "Surprise Gift", "pris" => "130kr", "details" => "10/10"),
    
  );
 ?>

 <table border="1px;" class="productTable">
 <th>Produktnamn</th> <th>Pris</th> <th> Uppskattningsnivå </th>
 <?php
  foreach($produkter as $a)
  {
    echo "<tr><td>".$a["name"]."</td><td>".$a["pris"]."</td> <td>".$a["details"]."</td></tr>";
  }
?>

</table>

</div>
<?php 
include 'footer.php';

    ?>

    
</body>
</html>