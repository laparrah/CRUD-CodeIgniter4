<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD en Codeigniter 4</title>
  </head>
  <body>

    <main class="container">
		<h1>CRUD en Codeigniter 4</h1>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<form method="POST" action="<?php echo base_url().'/crear'?>">
					<label for="nombre">Nombre</label>
					<input class="form-control" type="text" name="nombre" id="nombre">

					<label for="apaterno">Apellido Paterno</label>
					<input class="form-control" type="text" name="apaterno" id="apaterno">

					<label for="amaterno">Apellido Materno</label>
					<input class="form-control" type="text" name="amaterno" id="amaterno">
					<br>
					<button class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
		<br>
		<hr>
		<h2>Usuarios registrados</h2>
		<?php //print_r($datos); ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="table table-responsive">
					<table class="table table-hover table-bordered">
						<tr>
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
						<?php foreach($datos as $key): ?>
							<tr>
								<td><?php echo $key->nombre ?></td>
								<td><?php echo $key->apaterno ?></td>
								<td><?php echo $key->amaterno ?></td>
								<td><a href="<?php echo base_url().'/obtenerNombre/$key->idUsuario'?>" class="btn btn-warning btn-sm">Editar</a></td>
								<td><a href="" class="btn btn-danger btn-sm">eliminar</a></td>
						</tr>
						<?php endforeach;?>
					</table>
				</div>
			</div>
		</div>
	</main>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<script type="text/javascript">
		let mensaje = '<?php echo $mensaje?>';
		
		if(mensaje == '1'){
			swal(':)', 'Usuario registrado con éxito', 'success');
			//alert("Usuario registrado con éxito");
		} else if(mensaje == 0 ){
			swal(':(', '¡Ops! Ocurrió un error al registrar el usuario', 'error');
			//alert("¡Ops! Ocurrió un error al registrar el usuario");
		}
	</script>
  </body>
</html>