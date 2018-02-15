<?php include 'header.php';
 $pagetitle = "Om oss";
?>
<form action="omoss.php" method="GET">
    <input type="submit" name="pensionär" value="pensionär">
</form>
<a href="omoss.php"><button>standard</button></a>


<?php

$text = "
<div class ='divbox'>
<h1> Om oss: </h1>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id diam justo. Etiam bibendum erat tortor, cursus lobortis est finibus et. Vestibulum porta dolor et molestie luctus. Ut vitae volutpat mi. Nunc et diam eu elit tempor fermentum. Maecenas vel lectus vitae velit lacinia ultricies. Nulla facilisis urna non odio venenatis porttitor.

Cras ullamcorper vulputate mollis. Ut malesuada convallis lacus non ornare. Aenean porta enim non lectus bibendum, quis placerat nisi pulvinar. Maecenas sagittis vestibulum mi non vestibulum. Aenean a nisi non purus tristique laoreet. Suspendisse in condimentum justo, ut consectetur odio. Vivamus eget tellus ut dui consequat lobortis. Maecenas luctus venenatis aliquet. Nulla vel mauris quis lacus cursus condimentum eget ut tellus.

Sed quis bibendum urna. Phasellus sed aliquam tortor. Cras mattis blandit libero in accumsan. Fusce hendrerit libero tellus, at dictum magna tempus vel. Nunc sit amet libero faucibus, pulvinar nunc id, interdum elit. Aliquam tristique quis lacus interdum lacinia. Curabitur augue ligula, egestas eget feugiat ac, condimentum et augue. Integer eros tortor, ultrices vitae orci non, interdum dapibus nibh. Ut ornare orci id lacinia consequat. Vivamus tristique, diam in consequat venenatis, dolor nisl mattis odio, eget luctus lorem arcu id mauris. Duis posuere venenatis porta. Curabitur ultrices nec ligula nec aliquam. Morbi nunc purus, tincidunt vitae luctus nec, dapibus id magna.

Aenean pretium faucibus finibus. Fusce sed velit pellentesque, tincidunt dolor quis, pellentesque velit. Duis sit amet faucibus erat, eget varius elit. Nunc quis sollicitudin ex. Aenean pellentesque a urna bibendum imperdiet. Nullam tincidunt magna vitae magna ullamcorper, eget sodales sem posuere. Integer pharetra eros arcu, in placerat lorem ultrices id. Maecenas sodales erat eget sem congue, ut sagittis orci fermentum. Donec malesuada fermentum urna, sed semper arcu. Maecenas vestibulum libero quis turpis interdum pretium. Donec viverra at lectus id elementum. Fusce egestas, mi non convallis pharetra, ex nibh suscipit purus, sed accumsan ex urna quis mi. Donec finibus pulvinar magna vitae consectetur. Donec malesuada porttitor odio, quis consectetur elit dictum maximus. Donec tincidunt arcu sit amet mi laoreet scelerisque. Fusce feugiat vulputate dignissim.
</div>";



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