<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión Alumnos</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

<?php
  require_once 'conexion.php';
  ?>

    
      <div class="col-md-9 w-100">
        <div class="content">
          <div class="container">

            <!-- Encabezado -->
            <h3 class="bg-dark text-white text-center p-3 mb-5">Alumnos</h3>
                      
              <!-- Formulario para insertar datos -->
              <div class="row">
                <h3 class="my-4">Agregar Alumno</h3>
                <div class="col-md-12 bg-white p-3">

                  <form action="" method="post" id="frm">       
                    <div class="form-group">
                      <label for="nombre" class="form-label fw-bold"><i class="fas fa-user"></i> Nombre</label>
                      <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label for="telefono" class="form-label fw-bold"><i class="fas fa-building"></i> Teléfono</label>
                      <input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="correo" class="form-label fw-bold"><i class="fas fa-building"></i> Correo</label>
                      <input type="text" name="correo" id="correo" placeholder="Correo" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <input type="button" value="Registrar" id="registrar" class="btn btn-dark my-4">
                    </div>
                  </form>

                </div>
              </div>

              <!-- Listado de datos -->
              <div class="container mt-5">
                <div class="col-md-6">
                  <h3>Alumnos</h3>
                </div>
              <!-- Contenedor de la tabla -->
              <div class="row">
                <div class="col-md-12 bg-white">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Teléfono</th>
                          <th>Correo</th>
                        </tr>
                      </thead>
                      <tbody id="resultado">

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>           
            </div>
          </div>
        </div>
      </div>


  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

  <!-- Scripts de manejo de datos y alertas -->
  <script src="../js/alumnos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>