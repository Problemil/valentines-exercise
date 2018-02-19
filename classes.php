<?php

// class Menuitem{
//     public $name = "Olof";
//     public $favorite = false;
//     public function __construct($favorite){
//         $this->favorite = $favorite;
//     }
//     public function $name{
//         $this->name = $name;
//     }
// }


// $products = new MenuItem("tobbe");
// $favorite = new MenuItem("true");


// print_r ($products);
// echo "<br/>";
// print_r ($favorite);

class Menuitems{
    $this->favorite = false;
    $this->sida;
}

$menuitems = new Menuitems();
$menuitems->sida = "om oss";
$menuitems->sida = "produkter";



// om oss, produkter, recept

class Volvo{
    function Volvo() {
        $this->comp = "Volvo";
        $this->color;
        $this->modell;
    }
}
class v70 extends Volvo{

}

// create an object
$volvo = new Volvo();
$volvo->modell = "v70";
$volvo->color = "";


// show object properties
echo $volvo->comp;
echo $volvo->modell;
