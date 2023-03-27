<?php 
	    include("conexion.php");
	    $con=conectar();
	

	    $sql="SELECT *  FROM cliente";
	    $query=mysqli_query($con,$sql);
	

	    $row=mysqli_fetch_array($query);
	?>
	<!DOCTYPE html>
	<html lang="en">
	    <head>
	        <title>Clientes</title>
	        <meta charset="UTF-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="shortcut icon" href="./img-LOGO.jpg" type="image/x-icon">
	        <link href="cliente.css" rel="stylesheet">
	        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	        <title>Clientes</title>
	    </head>
		<header>  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="INICIOADMIN.PHP" style="color: white;">INICIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="PAGINAERROR404ADMIN.PHP" style="color: white;">INVENTARIO</a>
              </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="" style="color: white;">CLIENTES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" style="color: yellow;">LIFE S.D.B</a>
            </li>
          </ul>
        </div>
      </div>
    </nav></header>
	    <body>
	            <div class="container mt-5">
	                    <div class="row"> 
	                        
	                    <div class="col-md-3">
	                         <h1>Ingrese datos</h1>
	                            <form action="insert.php" method="POST">
	

	                                <input type="text" class="form-control mb-3" name="id" placeholder="Cedula">
	                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
	                                <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
	                                <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="password" class="form-control mb-3" name="contraseña" placeholder="Contraseña">


	                                    
	                                <input type="submit" class="btn btn-primary">
	                                </form>
	                        </div>
	

	                        <div class="col-md-8">
	                            <table class="table" >
	                                <thead class="table-success table-striped" >
	                                    <tr>
	                                        <th>CEDULA</th>
	                                        <th>NOMBRES</th>
	                                        <th>APELLIDOS</th>
	                                        <th>CORREO</th>
	                                        <th>CONTRASEÑA</th>
                                          <th></th>
	                                        <th></th>
	                                    </tr>
	                                </thead>
	

	                                <tbody>
	                                        <?php
	                                            while($row=mysqli_fetch_array($query)){
	                                        ?>
	                                            <tr>
	                                                <th><?php  echo $row['id']?></th>
	                                                <th><?php  echo $row['nombre']?></th>
	                                                <th><?php  echo $row['apellido']?></th>
	                                                <th><?php  echo $row['correo']?></th>    
													<th><?php  echo $row['contraseña']?></th>    
	                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
	                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
	                                            </tr>
	                                        <?php 
	                                            }
	                                        ?>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>  
	            </div>
	    </body>
	</html>
