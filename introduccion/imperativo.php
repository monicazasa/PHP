<?php

$color1 = (object)["remera"=>"Roja", "gorra"=> "azul"];
$color2 = (object)["remera"=>"negra", "gorra"=> "blanca"];

function Ropa($color){
	
	echo "<p>Ropa de Color Remera: $color->remera, Gorra: $color->gorra</p>";
}

Ropa($color1);
Ropa($color2);