<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icono.png">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" height = "100px" id = "navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#navbar"> B1B</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
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

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>

    <div class="carousel-item" style="height: 500px;">
        <img class="bd-placeholder-img" src = "imgBib.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="carousel-caption text-lg-center text-white" style = "padding-bottom: 190px">
            <h1> <B>Bienvenidos a B1B</B></h1>
        </div>
      </div>

    <div class="carousel-inner" style="height: 500px;">
      <div class="carousel-item active" style="height: 500px;">
      <img class="bd-placeholder-img" src="imgAutores.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-start">
          <h1>Variedad de autores</h1>
            <p>Puede acceder a la informacion de cada autor e informarte mas sobre ellos</p>
            <p><a class="btn btn-lg btn-outline-info" href="autores.php">Ver autores</a></p>
        </div>
        </div>
      </div>
     
      <div class="carousel-item" style="height: 500px;">
      <img class="bd-placeholder-img" src="imgBooks.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>

        <div class="container">
          <div class="carousel-caption text-end">
          <h1>Variedad de libros</h1>
            <p>Puede acceder a la seccion de libros</p>
            <p><a class="btn btn-lg btn-outline-info" href="libros.php">Ver libros</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

 <br>
 <br>
 <br><br><br><br>
 <br>
 <div class = "text-center">    
        <h1>Datos sobre la lectura</h1>
        <br><br><br>
    </div>
 <hr>
 <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0"><b>Importancia de la lectura</b></h3>
          <div class="mb-1 text-body-secondary"></div>
          <p class="card-text mb-auto">La lectura es un hábito de comunicación que permite desarrollar los pensamientos cognitivos e interactivos de cualquier lector, el leer permite construir con facilidad nuevos conocimientos. Ayuda al desarrollo y perfeccionamiento del lenguaje. </p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="importanciaLeer.jpg" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
          <h3 class="mb-0"><b>Buenos habitos</b></h3>
          <p class="mb-auto">Establece un horario fijo de lectura.
Evita las distracciones.
Lleva siempre un libro guardado.
Abandona libros sin miedo.
Utiliza las herramientas de Goodreads.
Evita el estrés.
Escoge un libro que te incite a leer.</p>
          
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="habitosLeer.jpg" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
        </div>
      </div>
    </div>
  </div>
<br>
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0"><b>Beneficios</b></h3>
          <p class="card-text mb-auto">Ayuda a ejercitar el cerebro.
Fomenta la curiosidad.
Aumenta la concentración.
Mejora la capacidad de comprensión.
Desarrolla la creatividad.
Entretiene.
Ayuda a desarrollar mejor el lenguaje.
Aumenta la capacidad de memorizar.</p>
          
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="beneficiosLeer.jpg" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Desventajas</h3>
          <p class="mb-auto">Puede ser adictivo. Cuando te sumerges en un buen libro, es fácil perder la noción del tiempo y del lugar. ...
Puede ser caro. Los libros pueden ser caros, especialmente si quieres leer libros nuevos. ...
Puede ser lento. ...
Puede ser aburrido.</p>
          
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="desventajaLeer.jpg" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
        </div>
      </div>
    </div>
  </div>

    <br>
    <br>
    <br><br><br>
    <div class = "text-center">    
        <h1>¿Por que o no hacerlo?</h1>
        
        <br><br><br>
        <hr>
    </div>
  <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>¿Por que se recomienda leer?</h2>
          <p>Nos permite conectar y ponernos en la piel de otras personas / personajes. Ejercita a nuestro cerebro: despierta vías neuronales, activa la memoria… Nos hace recordar, conocer y aprender. Libera nuestras emociones: alegría, tristeza, cólera, miedo, sorpresa, amor…</p>
          <a href="libros.php" class="btn btn-outline-light" type="button">Ir a libros</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2>¿Por que no se recomienda leer?</h2>
          <p>Al no saber leer existe consecuencia en el aprendizaje como es una mala ortografía, la falta de cultura y la pérdida de habilidades comunicativa.</p>
          <a href="libros.php" class="btn btn-outline-secondary" type="button">Ir a libros</a>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
    <hr>
    <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>© 2017–2023 B1B, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>