<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img-LOGO.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./SING-UP.css">
    <title>Registrate</title>
</head>
<body style="background-image: url(img-background.jpg); background-size: cover; background-repeat: no-repeat;">
	<div class="capa" ></div>


	<div class="w-50 Section" style="background-color: rgba(221, 203, 203, 0.7); border: 0cap;">
		<form name="form" action="register.php" method="post">
			<h2 style="margin-left: 150PX;">REGISTRAR</h2>
			<br>
    <div class="w-50 text-black" style="margin-left: 150PX; margin-top: 10px;">	  
		  <strong><label for="ID">Cedula:</label></strong>
		  <br>
		  <input type="text" id="cedula" name="id" placeholder="Ingresa tu cedula" onclick="Registrarse()" required>
		  </div>
		  <br>
      <div class="w-50 text-black" style="margin-left: 150PX;">	  
	  <strong><label for="apellido">Nombre:</label></strong>
        <br>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" onclick="Registrarse()" required>
      </div>
      <br>
		  <div class="w-50 text-black" style="margin-left: 150PX;">	  
		  <strong><label for="apellido">Apellido:</label></strong>
		  <br>
		  <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido" onclick="Registrarse()" required>
		  </div>
		  <br>
		  <div class="w-50 text-black" style="margin-left: 150PX;">	  
		  <strong><label for="Correo">Correo:</label></strong>
			<br>
			<input type="email" id="email" name="correo" placeholder="ejemplo@gmial.com" onclick="Registrarse()" required>
			</div>
		  <br>
			<div class="w-50 text-black" style="margin-left: 150PX;">	  
			<strong><label for="Contraseña">Contraseña:</label></strong>
				<br>
				<input type="password" id="password" name="contraseña" placeholder="********" onclick="Registrarse()" required>
				</div>
				<br>
				<input type="submit" name="registro "value="Enviar" onclick="Registrarse()" style="margin-left: 210PX;"><a href="LOGIN.php">
        <br>
				<br>
				<p><a href="LOGIN.php" style="margin-left: 120PX;">Ya tienes cuenta, inicia sesión aqui.
				<br>
				</a></p>
		</form>
  </div>
</body>
</html>