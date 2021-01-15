
<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>

</body>
</html>

<?php

class Color {

	public $remera;
	public $gorra;

	public function Ropa(){
		echo "<p>Ropa de Color Remera: $this->remera, Gorra: $this->gorra</p>"; 
	}
}

$a = new Color();
$a -> remera = "roja"; 
$a -> gorra = "azul"; 
$a -> Ropa();

$b = new Color();
$b -> remera = "negra"; 
$b -> gorra = "blanca"; 
$b -> Ropa();



