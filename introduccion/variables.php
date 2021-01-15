<?php 
//Variable tipo numero
$numero = 10; 
echo 'Esto es un numero: '.$numero; 
echo '<br><br>';

//Variable tipo texto
$texto = "Esto es una Cadena de Texto";
echo 'Mi cadena: '.$texto;
echo '<br><br>';

//Varible tipo boleana
$booleana = true ; 
echo 'Esto es una variable booleana'. $booleana;
echo '<br><br>';

//Varible tipo arreglo
$arreglo = array("Alejandro", "Maria") ; 
echo  $arreglo [0];
echo '<br><br>';

//Varible tipo arreglo con propiedades
$colores = array("color1" =>"Rojo", "color2" =>"Azul") ; 
echo  $colores ["color1"];
echo '<br><br>';

//Varible tipo objeto
$objeto = (object)["mueble1"=> "armario" , "mueble2"=> "escritorio"] ; 
echo $objeto->mueble2;


?>