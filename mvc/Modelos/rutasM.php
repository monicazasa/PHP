<?php


class Modelo{


	static public function RutasModelo($rutas){

		if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" || $rutas == "editar" || $rutas == "salir"){

			$pagina = "Vistas/Modulos/".$rutas.".php";
		}elseif ($rutas == "index") {
			
			$pagina = "Vistas/Modulos/ingreso.php"; 
		}else{

			$pagina = "Vistas/Modulos/ingreso.php"; 

		}

		
		return $pagina; 

	}


}