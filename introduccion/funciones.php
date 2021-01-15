<?php

//Funciones sin parametro
function bienvenida () {

echo "Bienvenido al curso de PHP";
}

bienvenida ();
echo "<br><br>";

//Funciones con parametros
function saludar($hola){
	echo "$hola";
}

saludar("Hola a todos");
echo "<br><br>";

//Funcion con retorno
function retorno($retornar){
	return $retornar;
}
echo retorno ("Retornando la funcion");

?>