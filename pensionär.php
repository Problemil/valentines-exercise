<?php include 'header.php';

?>
<form action="pensionär.php" method="GET">
    <input type="submit" name="pensionär" value="pensionär">
</form>
<a href="pensionär.php"><button>standard</button></a>

<?php

$text = "
<div style='width:100%; height:400px;'>
jhalskjdhfjkashdfkjhsadkjhflasdöflkjaskdjflkajsdflasdfl
</div";



if(isset($_GET["pensionär"])){
    echo "<h1 style='font-size:60px'>".$text."</h1>";
}
else{
    echo $text;
}




?>

<?php 
include 'footer.php';

    ?>

