<?php 
	include_once 'php/config.php';

	// ---> http://www.idea.com/productos/iphone/

	$componentes_url=parse_url($_SERVER['REQUEST_URI']);

	/* 
		{
			"scheme":"http",
			"host":"www.idea.com",
			"path":"/productos/iphone/"
		}
	*/

	$ruta=$componentes_url['path'];

	// ----> /productos/iphone/

	$partes_ruta=explode('/',$ruta);

	// ----> ["","productos","iphone",""]

	$partes_ruta=array_filter($partes_ruta);

	// ----> [-,"productos","iphone",-] -> 2

	$partes_ruta=array_slice($partes_ruta,0);

	// ----> ["productos","iphone"]

	$ruta_elegida='pages/404.php';

	/*Analisis*/
	/********************/
	if(count($partes_ruta)==1){
		//No pedimos nada
		$ruta_elegida='pages/home.php';
	}else if(count($partes_ruta)==2){
		//Estamos pidiendo secciones
		switch ($partes_ruta[1]) {
			case 'inicio':
				$ruta_elegida='pages/home.php';
				break;	
			case 'productos':
				$ruta_elegida='pages/productos.php';
				break;															
		}
	}else if(count($partes_ruta)==3){
		//Estamos pidiendo elementos
		switch ($partes_ruta[1]) {
			case 'productos':
				$producto=$partes_ruta[2];
				$ruta_elegida='pages/producto.php';
				break;														
		}
	}
		
	/***/
	include $ruta_elegida;
?>