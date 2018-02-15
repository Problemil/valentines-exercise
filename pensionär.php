<?php

print_r($_GET["test2"]);

$text = "
<div style='width:100%; height:400px; border:1px solid black;'>
jhalskjdhfjkashdfkjhsadkjhflasdöflkjaskdjflkajsdflasdfl
</div";


if(!isset($_GET["standard"])){
    echo "<h1 style='font-size:60px'>".$text."</h1>";
}
else{
     echo $text;
}
?>


<form action="pensionär.php" method="get" name="hej">

  <input type="submit" value="pensionär" name="pensionär">
  <input type="submit" value="standard" name="standard">
</form>

