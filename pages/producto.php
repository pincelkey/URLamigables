<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_CSS ?>estilos.css">
	<style type="text/css">

		body{
			background-size: cover;
			font-family: "Montserrat";
		}

		header{
			display: flex;
			align-content: center;
			justify-content: center;
			background: url("http://localhost/app/img/wallpaper.png");
		}

		#principal{
			width: 60%;
			position: relative;
			left: 20%;
			padding-top: 25px;
			display: flex;
			justify-content: space-between;

		}

		#principal > article{
			display: flex;
		}

		#img-producto{
			margin-right: 10px;
		}

		#date-producto{
			display: flex;
			flex-direction: column;
		}

		#name-producto{
			padding: 5px;
			font-weight: 500;
			background: #3304A5;
			color: white;
		}
		#des-producto{
			font-size: 0.85em;
			padding: 10px 5px;
			
		}

		#des-producto > p{
			margin-bottom: 5px;
		}

	</style>
</head>
<body>
	<?php include_once "comp.header.php" ?>
	<section id="principal">
		<article>
			<figure id="img-producto">
				<img src="<?php echo RUTA_IMG.$producto.".png" ?>">
			</figure>
			<div id="date-producto">
				<div id="name-producto"><?php echo $producto ?></div>
				<div id="des-producto">
					<p>
						La papa o patata (Solanum tuberosum) es una especie de planta herbácea perteneciente al género Solanum de la familia de las solanáceas originaria de Sudamérica1​ y cultivada por todo el mundo por sus tubérculos comestibles.
					</p> 

					<p>
						Fue domesticada en el altiplano andino por sus habitantes hace unos 8000 años,1​2​ y más tarde fue llevada a Europa por los conquistadores españoles como una curiosidad botánica más que como una planta alimenticia. 
					</p>
				</div>
			</div>
		</article>	
	</section>
</body>
</html>