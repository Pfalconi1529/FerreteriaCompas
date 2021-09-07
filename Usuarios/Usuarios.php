<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
  	src="https://code.jquery.com/jquery-3.6.0.min.js"
 	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  	crossorigin="anonymous"></script>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<title>Register your date</title>
</head> 
<body class="bg-dark">
	<div class="container p-5 img-fluid  text-light " >
		<div class="row ">
			<div class="col text-center" >
				<img src="../imagenes/fondo2.jpg" width="600" class="rounded float-start" height="800">
				
			</div>
			<div class="col border border-info  ">
				<div class="text-end">
					
				</div>
				<div>
					<h4 class="fw-bold text-center text-success my-4">Registrate para acceder al sistema</h4>


					<form id="form" action="insertar.php" method="post">
						<div class="form-group ">
							<label for="cedula" class="form-label text-info">Ingresa tu cargo</label>
							<input type="text" class="form-control" name="cedula" id="cedula" >
						</div>
						<div class="form-group">
							<label for="nombre" class="form-label text-info">Ingresa tu nombre de usuario</label>
							<input type="text" class="form-control" name="nombre" id="nombre">
						</div>
						<div class="form-group">
							<label for="cedula" class="form-label text-info">Ingresa tu numero de cedula</label>
							<input type="text" class="form-control" name="cedula" id="cedula">
						</div>
						<div class="form-group">
							<label for="email" class="form-label text-info">Ingresa tu email</label>
							<input type="text" class="form-control" name="email" id="email">
						</div>
						<div class="form-group">
							<label for="imagen" class="form-label text-info">Selecciona tu imagen de usuario</label>
							<input type="file" class="form-control" name="imagen" id="imagen">
						</div>
						
						<div class="d-grid">
							<input type="submit" class="btn btn-outline-success btn-block my-2" name="registro">
						</div>
						
					</form id="form">
					<div class="container w-100 my-5">
						<div class="row text-center">
							<div class="col-12">Log in</div>
						</div>
						<div class="row">
							<div class="col">
								<button class="btn btn-outline-primary w-100 my-1">
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/faceboock.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Faceboock
									</div>
								</div>
								</button>
							</div>
							<div class="col">
								
								<button class="btn btn-outline-danger w-100 my-1" >
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/gmail.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Google
									</div>
								</div>
								</button>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>

	</div>



</body>
</html>