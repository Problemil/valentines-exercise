<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
    .stats {
        margin:auto;    
        font-size: 20px;
    }
     </style>
</head>
<body>

    <?php
    $product['Chokladask'] = "50";
    $product['Nallebjörn'] = "75";
    $product['Blombukett'] = "85";
    $product['Surprise Gift'] = "120";

  
    
 
    echo "<table border='4' class='stats' cellspacing='0'>
    
                <tr>
                <td class='hed' colspan='8'>Här är våra produkter:</td>
                  </tr>
                <tr>
            
                <th>Produktnamn</th>
                <th>Pris</th>
                <th>Uppskattningsnivå</th>
               
    
                </tr>";
    
                  echo "<tr>";
                  echo "<td>" . "Chokladask" . "</td>";
                  echo "<td>" . $product['Chokladask']   . "</td>";
                  echo "<td>" . "4/10". "</td>";
      
    
                  echo "</tr>";
    
                  echo "<tr>";
                  echo "<td>" . "Nallebjörn" . "</td>";
                  echo "<td>" .  $product['Nallebjörn']   . "</td>";
                  echo "<td>" . "6/10" . "</td>";
                
    
                  echo "</tr>";
    
                  echo "<tr>";
                  echo "<td>" . "Blombukett" . "</td>";
                  echo "<td>" . $product['Blombukett'] . "</td>";
                  echo "<td>" . "7/10" . "</td>";
       
    
                  echo "</tr>";
                  
                  echo "<tr>";
                  echo "<td>" . "Surprise Gift" . "</td>";
                  echo "<td>" . $product['Surprise Gift'] . "</td>";
                  echo "<td>" . "10/10" . "</td>";
       
    
                  echo "</tr>";
    
        echo "</table>";
    
    

    ?>

    
</body>
</html>