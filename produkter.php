<?php 
include 'header.php';
include 'data.php';



?>

<html>
<div class="produktContent">
<?php
foreach($produkter as $key => $value){
    echo '<div class="card"><img class="card-img-top" src="' . $value["image"] . '"><div class="card-body"><h4 class="card-title">' . $value["name"] . '</h4><p class="card-text">' . $value["desc"] . '</p><p class="card-text">' . $value["price"] . '</p><a href="#" class="btn btn-primary">Buy product</a></div><button>Add as favorite</button><div class="card-footer">Show more +</div></div>';
}


?>
</div>


<?php include 'footer.php'; ?>