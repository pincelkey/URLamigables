<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
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
			width: 70%;
			position: relative;
			left: 15%;
			padding-top: 25px;
			display: flex;
			justify-content: space-between;

		}

		#principal > article{
			border-radius: 5px;
		}

		#principal > article > #img-producto > img{
			border-radius: 5px 5px 0px 0px;
		}

		#principal > article > #name-producto{
			color: white;
			display: block;
			padding: 5px;
			background: #360389;
			font-weight: 400;
			text-decoration: none;
			text-align: center;
			transition: all .2s;
		}

		#principal > article > #name-producto:hover{
			background: blue;
		}

	</style>
</head>
<body>
	<?php include_once "comp.header.php" ?>
	<section id="principal">
		<article>
			<figure id="img-producto">
				<img src="<?php echo RUTA_IMG ?>/min-papa.png">
			</figure>
			<a href="<?php echo RUTA_PRODUCTOS."papa/" ?>" id="name-producto">papa</a>
		</article>
		<article>
			<figure id="img-producto">
				<img src="<?php echo RUTA_IMG ?>/min-carne.png">
			</figure>
			<a href="<?php echo RUTA_PRODUCTOS."carne/" ?>" id="name-producto">carne</a>			
		</article>
		<article>
			<figure id="img-producto">
				<img src="<?php echo RUTA_IMG ?>/min-manzana.png">
			</figure>
			<a href="<?php echo RUTA_PRODUCTOS."manzana/" ?>" id="name-producto">manzana</a>			
		</article>		
	</section>
</body>
</html>