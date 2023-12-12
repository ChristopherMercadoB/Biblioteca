<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="icono.png">
</head>
<body>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Autores</h1>
        <hr>
  </section>

  <?php
  include "modelo/conexion.php";
  ?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#navbar">B1B</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" id="navbarToggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="libros.php">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="autores.php">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
            <form class="d-flex flex-md-row flex-column me-md-2" role="search" action="autores.php" method="GET">
                <input class="form-control me-2 mb-2 mb-md-0" type="search" placeholder="Buscar" aria-label="Search"
                    name="busqueda">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<script>
    document.getElementById('navbarToggler').addEventListener('click', function () {
        var navbarCollapse = document.getElementById('navbarCollapse');
        if (navbarCollapse.classList.contains('show')) {
            navbarCollapse.classList.remove('show');
        } else {
            navbarCollapse.classList.add('show');
        }
    });
</script>


  <div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-3">
    <?php
    
    include "modelo/conexion.php";
    $sql = "select * from autores";
    if (isset($_GET['busqueda'])) {
      $busqueda = $_GET['busqueda'];
      $sql = "SELECT * FROM autores WHERE nombre LIKE '%$busqueda%'";
  }

  $result = $conexion->query($sql);
    while ($data = $result->fetch_object()) {
     $id = $data->id_autor;
      $nombreAutor = $data->nombre;
      $apellido = $data->apellido;
      $telefono = $data->telefono;
      $direccion = $data->direccion;
      $ciudad = $data->ciudad;
      $estado = $data->estado;
      $pais = $data->pais;
      $url = $data->url;
    ?>
      <div class="col">
        <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top text-center" src="<?= $url ?>" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="card-body">
          <p class="card-text"><b><?=$nombreAutor?> <?=$apellido?></b></p>
            <p class="card-text"></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="table table-">
              <table class="table">

    <thead class="thead-dark">
      <tr>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Estado</th>
        <th>País</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?=$telefono?></td>
        <td><?=$direccion?></td>
        <td><?=$ciudad?></td>
        <td><?=$estado?></td>
        <td><?=$pais?></td>
      </tr>
    </tbody>
  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>

</body>
</html>