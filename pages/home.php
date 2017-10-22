<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>/estilos.css">
	<style type="text/css">

		body{
			background: url("http://localhost/app/img/wallpaper.png");
			background-size: cover;
		}

		header{
			display: flex;
			align-content: center;
			justify-content: center;
		}	

		#principal{
			height: 90vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		#principal > h1{
			font-size: 2.5em;
			color: white;
		}
	</style>
</head>
<body>
	<?php include_once "comp.header.php" ?>
	<section id="principal">
		<h1>Bienvenido a mi página web</h1>
	</section>
</body>
</html>