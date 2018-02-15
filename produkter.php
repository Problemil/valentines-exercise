<?php 
include 'header.php';
$produktDiv = '<div class="produktDiv">Hej</div>';
?>

<html>
<div class="produktContent">
<?php
for($i = 0; $i < 15; $i++){
    echo $produktDiv;
}
?>
</div>


<?php include 'footer.php'; ?>