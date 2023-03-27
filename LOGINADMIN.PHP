<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img-LOGO.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./LOGINADMIN.css">
    <title>Inicia Sesión</title>
</head>
<header>
</header>
<body style="background-image: url(img-background.jpg); background-size: cover; background-repeat: no-repeat;">
  <form action="VALIDATEADMIN.php" method="POST">
  <div class="w-50 Section" style="background-color: rgba(221, 203, 203, 0.7);">
		<form>
		<div class="imagen" style="margin-left: 150PX;">
            <img src="img-LOGO.jpg" width="70px" height="70px" style="margin-left: 120px;">
          </div>
		  <br>
		  <div class="w-50 text-black" style="margin-left: 200PX; margin-top: 10px;">	  
			<strong><label for="email">Correo:</label></strong>
			<br>
			<input type="email" id="email" name="correo" placeholder="ejemplo@gmial.com" required>
			</div>
		  <br>
			<div class="w-50 text-black" style="margin-left: 200PX;">	  
			<strong><label for="password">Contraseña:</label></strong>
				<br>
				<input type="password" id="password" name="contraseña" required placeholder="********">
				</div>
				<br>
				<input class="enviar" type="submit" onclick="validate()" value="Iniciar Sesión" style="margin-left: 200PX;">
				<br>
				<br>
				<p><a href="INICIOCLIENTE.php" style="margin-left: 200PX;">Continuar como cliente</a></p>

		</form>
	</div>
 
  <script src="https://kit.fontawesome.com/3fdf3ff91d.js" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
				crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/3fdf3ff91d.js" crossorigin="anonymous"></script>
  </form>
</body>