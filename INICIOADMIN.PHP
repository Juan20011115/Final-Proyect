<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img-LOGO.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./INICIOADMIN.css">
    <title>Inicio</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="" style="color: white;">INICIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="PAGINAERROR404ADMIN.PHP" style="color: white;">INVENTARIO</a>
              </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cliente.php" style="color: white;">CLIENTES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" style="color: yellow;">LIFE S.D.B</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<body>
<a class="btn btn-primary" href="LOGINADMIN.PHP" role="button" style="margin-top:20px; margin-left:1280px;">Cerrar Sesion</a>
<div class="container" style="margin-top: 100px; padding: auto; overflow: hidden; align-items: center;">
      <div class="Item" style="margin: 1em; padding: 1em; float: left;" id="Item1">
        <a href="PAGINAERROR404ADMIN.PHP"><img src="img-estadisticas.jpeg" alt="" width="350px" height="350px"></a>
      </div>
      <div class="Item" style="margin: 1em; padding: 1em; float: left; margin-top:100px;" id="Item2">
      <h1 style="color: brown; font-size: 25px; margin-left: 150px;">PUEDES VER LOS BALANCES DE LAS VENTAS ACA</h1>
        <P style="font-size: 30px; margin-left: 250px;  margin-top: 50px">Aqui puedes ver los balances<br>
        tanto del mes actual, como<br>
        los meses anteriores.</P>
      </div>
      <br>
      <br>
      <br>
  </div>
  <div class="container" style="margin-top: 100px; padding: auto; overflow: hidden; align-items: center;">
      
      <div class="Item" style="margin: 1em; padding: 1em; float: left; margin-top:100px; margin-left: 1px" id="Item2">
      <h1 style="color: brown; font-size: 25px; margin-left: 150px;">PUEDES CONSULTAR LOS PROVEEDORES ACA</h1>
        <P style="font-size: 30px; margin-left: 200px;  margin-top: 50px">Aqui puedes ver los proveedores,<br>
        gestionarlos y contactarlos</P>
      </div>
      <div class="Item" style="margin: 1em; padding: 1em; float: left; margin-left: 100px" id="Item1">
        <a href="PAGINAERROR404ADMIN.PHP"><img src="img-proveedores.jpeg" alt="" width="350px" height="350px"></a>
      </div>
      <br>
      <br>
      <br>
  </div>
</body>