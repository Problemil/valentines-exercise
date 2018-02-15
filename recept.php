<?php 
    session_start();
    $pagetitle = "Produkter";
    include 'header.php';
   
?>
 


<body>


  <h1 class = "produkth1"> Här är en tabell på våra bästa recept! </h1>
  
  <div class = "tabell"> 
    <?php
  $produkter = array(
    array("name" => "Nutellacheesecake", "betyg" => "7/10", "details" => "50g Smör,5 gelatinblad 3 dl vispgrädde 100 g naturell färskost 3 dl nutella (3 dl motsvarar ca 300 g) färska hallon
    hackade nötter, citronmeliss "),
    array("name" => "Chokladfondue med saltlakrits", "betyg" => "8/10", "details" => "1 dl vispgrädde 180 g mjölkchoklad (gärna med saltlakritssmak) valfria frukter"),
    array("name" => "Rosa maränghjärtan", "betyg" => "9/10", "details" => "3 äggvitor, 1 krm ättiksprit (12 %), 1 dl strösocker, 1 dl florsocker, 1 1/2 krm röd hushållsfärg"),
    array("name" => "Chokladkaka med apelsintwist", "betyg" => "10/10", "details" => "3/4 dl vetemjöl, 2 1/2 msk kakao, 1 tsk bakpulver, 140 g mörk choklad, 3 ägg, 2 3/4 dl socker ,1 tsk vaniljsocker"),
    
  );
 ?>

 <table border="1px;" class="productTable">
 <th>Receptnamn</th> <th>Betyg</th> <th> Ingredienser </th>
 <?php
  foreach($produkter as $a)
  {
    echo "<tr><td>".$a["name"]."</td><td>".$a["betyg"]."</td> <td>".$a["details"]."</td></tr>";
  }
?>

</table>

</div>
<?php 
include 'footer.php';

    ?>

    
