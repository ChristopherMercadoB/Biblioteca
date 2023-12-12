<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="icono.png">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">B1B</a>
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
<br><br><br><br><br><br>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <div class="text-center"><h1>Contactanos!</h1></div>
        <br><br>
        <?php 
        include "modelo/conexion.php";
        include "controlador/insertar_contacto.php";
        ?>
        <form class="needs-validation" method="Post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre">
             
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Fecha</label>
              <input type="date" class="form-control" name="fecha">
              
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com">
              
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Asunto</label>
              <input type="text" class="form-control" name="asunto"  >
              
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Comentario</label>
              <input type="text" class="form-control" name="comentario">
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" name="enviar" value = "ok">Enviar</button>
        </form>
      </div>
    </div>
</body>
</html>