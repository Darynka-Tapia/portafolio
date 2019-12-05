<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="estilo.css">
      <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet"> 

    <title>Darynka Tapia</title>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153543156-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-153543156-1');
    </script>

  </head>
  <body>

    <?php include 'modales.php'; ?>
    <div class="container-fluid styleNav">
      <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="index.php">Darynka</a>
        <button class="navbar-toggler styleNav-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon ">&#9776;</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav mr-auto" >
            <li class="nav-item active" >
              <a class="nav-link" href="index.php">Sobre mi <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#proyectos">Portafolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#certificados">Certificados</a>
            </li> -->
          </ul>
        </div>
      </nav>
    </div>
    


    <div class="container pt-5">
      <h1 class="mt-5 mb-5">Todos mis proyectos</h1>
      <h2>
        En construcción
        <div class="spinner-grow text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </h2> 
    </div>


<div class="container">
  <!-- <div class="d-flex justify-content-center">...</div> -->
 <!--  <div class="d-flex justify-content-center">
    <div class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quis, vitae atque praesentium adipisci? Blanditiis provident harum, quam aliquid deserunt explicabo at, fugiat ipsam expedita non earum. Perspiciatis, voluptas quam!</div>
    <div class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis deleniti iure veniam, iste quasi, qui nesciunt ipsa dolorum dicta commodi optio. Earum excepturi aut obcaecati facere ab hic qui in!</div>
    <div class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur quos ipsa, voluptate voluptatibus harum eius omnis nobis officia deserunt commodi totam, ullam aspernatur illum id soluta. Repellendus, et voluptatibus.</div>
    <div class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione consequatur quos ipsa, voluptate voluptatibus harum eius omnis nobis officia deserunt commodi totam, ullam aspernatur illum id soluta. Repellendus, et voluptatibus.</div>
  </div> -->







    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 caja">
          <div class="row">
            <div class="col-12 proyecto">
              <img class="card-img-top" src="proyectos/portafolio.png" alt="" ><br><br>
              <center>
              	<h5>Portafolio</h5>
                <a href="https://github.com/Darynka-Tapia/portafolio" target="_blank"><i class="fab fa-github fa-3x" ></i></a><br><br>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Proyecto1">Más detalles</button>
              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 caja">
          <div class="row">
            <div class="col-12 proyecto">
              <img class="card-img-top" src="proyectos/socialhero.png" alt="" ><br><br>
              <center>
              	<h5>Social Hero</h5>
                <a href="https://github.com/Darynka-Tapia/proyectohero" target="_blank"><i class="fab fa-github fa-3x" ></i></a><br><br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Proyecto2">Más detalles</button>
              </center>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 caja">
          <div class="row">
            <div class="col-12 proyecto">
              <img class="card-img-top" src="proyectos/inventarios.png" alt="" ><br><br>
              <center>
              	<h5>Inventarios Sara</h5>
                <a href="https://github.com/Darynka-Tapia/Inventario" target="_blank"><i class="fab fa-github fa-3x" ></i></a><br><br>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Proyecto3">Más detalles</button>
              </center>
            </div>
          </div>
          
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 caja">
          <div class="row">
            <div class="col-12 proyecto">
              <img class="card-img-top" src="proyectos/gb_ba.png" alt="" ><br><br>
              <center>

              	<h5>Gestion Bibliotecaria</h5>
                <a href="https://github.com/Darynka-Tapia/gb_ba" target="_blank"><i class="fab fa-github fa-3x" ></i></a><br><br>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Proyecto4">Más detalles</button>
              </center>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 caja">
          <div class="row">
            <div class="col-12 proyecto">
              <img class="card-img-top" src="proyectos/zihuala.png" alt="" ><br><br>
              <center>
                <h5>Landing Page - Zihuala</h5>
                <a href="" target="_blank"><i class="fab fa-github fa-3x" ></i></a><br><br>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Proyecto7">Más detalles</button>
              </center>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-12 caja">
          <div class="row">
            <div class="col-12 proyecto">
              <img class="card-img-top" src="proyectos/Horarios.png" alt="" ><br><br>
              <center>
              	<h5>Horarios</h5>
                <a href="" target="_blank"><i class="fab fa-github fa-3x" ></i></a><br><br>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Proyecto5">Más detalles</button>
              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 caja">
          <div class="row">
            <div class="col-12 proyecto">
              <img class="card-img-top" src="proyectos/tetes.png" alt="" ><br><br>
              <center>
              	<h5>Landing Page - Tete´s</h5>
                <a href="" target="_blank"><i class="fab fa-github fa-3x" ></i></a><br><br>
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Proyecto6">Más detalles</button>
              </center>
            </div>
          </div>
        </div>

      </div>
    </div>




  <style>
    .caja{
      padding: 2%;
    }
    .proyecto{
      border-radius: 15px;
      padding-top: 3%; 
      padding-bottom: 3%;
      background: transparent;
      border: 2px solid #f0c9c9;

    }
 
    .protecto img{
      width: 100%;
    }
  </style>

































</div>
    






    


    <footer>
      <div class="container-fluid footer">
        <center>
          <h4>Darynka Tapia</h4>
          <a href="https://www.facebook.com/darynka.tapiaa" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="https://www.twitter.com/darynka_tapia" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="https://www.linkedin.com/in/abril-tapia" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
          <a href="https://github.com/Darynka-Tapia" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        </center>
      </div>
          
    </footer>






<script>  
  
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>