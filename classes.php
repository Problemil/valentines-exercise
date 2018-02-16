<?php

class Menuitem{
    public $name = "Olof";
    public $favorite = false;
    // public function __construct($name){
    //     $this->name = $name;
    // }
    public function __construct($favorite){
        $this->favorite = $favorite;
    }
}


$products = new MenuItem("tobbe");
$favorite = new MenuItem("true");


print_r ($products);
echo "<br/>";
print_r ($favorite);