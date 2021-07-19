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
      <h1>Actualizar datos</h1>
      <div class="row">
        <div class="col-sm-12">
          <form method="POST" action="<?php echo base_url().'/actualizar'?>">

          <?php print_r($respuesta); ?>
            <input type="text" id="idUsuario" name="idUsuario" hidden=""
              value="<?php echo $idUsuario; ?>">
            
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre"
              value="<?php echo $nombre; ?>">

            <label for="apaterno">Apellido Paterno</label>
            <input class="form-control" type="text" name="apaterno" id="apaterno" 
              value="<?php echo $apaterno; ?>">

            <label for="amaterno">Apellido Materno</label>
            <input class="form-control" type="text" name="amaterno" id="amaterno" 
              value="<?php echo $amaterno; ?>">
            <br>
            <button class="btn btn-warning">Actualizar datos</button>
          </form>
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
  </body>
</html>