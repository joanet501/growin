<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link href="<?php echo e(asset('assets/Huerto.png')); ?>" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/jardin-css.css')); ?>" rel="stylesheet">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <title>GrowIn'</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example bd-example-row" style="background-color:black">
  <div class="container">
    <div class = "row d-flex d-sm-none">
      <div class = "col-12">
      <div class="card bg-secondary" id = "sm-card">
        <div class="card-body">
          <p class="card-title text-white" id="cardtext">                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="container">
    <div class="row d-flex d-sm-none">
      <div class="col-8">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle container-fluid" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Huertos
          </button>
          <ul class="dropdown-menu container-fluid">
            <li><a class="dropdown-item" href="#">Huerto 1</a></li>
          </ul>
        </div>
      </div>
      <div class="col-4">
        <button class="btn btn-primary btn-xs container-fluid" type="button">Opciones
          </button>

      </div>
    </div>

  </div>


  <div class="row">
    <div class="container">
      <div class="row d-none d-sm-flex">
        <div class="col-3">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle container-fluid" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Huertos
            </button>
            <ul class="dropdown-menu container-fluid">
              <li><a class="dropdown-item" href="#">Huerto 1</a></li>
            </ul>
          </div>
        </div>
        <div class="col-3">
          <button class="btn btn-primary btn-xs container-fluid" type="button">Crear Huerto</button>
        </div>
        <div class="col-3">
          <button class="btn btn-primary btn-xs container-fluid" type="button">Modificar
            Huerto</button>
        </div>
        <div class="col-3">
          <button class="btn btn-primary btn-xs container-fluid" type="button">Borrar Huerto</button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-9">
          <div class="row" id="sortable">
            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>
            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>
            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>

            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>
            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>
            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>

            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>
            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>
            <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                  class="card-img-top img-fluid" src="<?php echo e(asset('assets/Huerto.png')); ?>" alt="Card image cap" draggable="false">
              </a></div>
          </div>

        </div>
        <div class="col-sm-3 " draggable="false">
          <div class=" d-none d-md-flex flex-column flex-shrink-0 p-3 text-white bg-dark container-fluid">
            <img src="assets/Huerto.png" alt="Test">
            <hr/>

                <a>
                  Descripción: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Id cursus metus aliquam eleifend mi in nulla posuere.

                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Id cursus metus aliquam eleifend mi in nulla posuere.

                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Id cursus metus aliquam eleifend mi in nulla posuere.
                </a>
              </li>
              <hr>
                <a>
                  Último regado: 10-10-1010
                </a>
              </li>
                <a>
                  Próximo regado: 15-10-1010
                </a>
              </li>
            </ul>
            <hr/>
          </div>
        </div>
      </div>
    </div>


    <div class="card-block">
      <div class="container text-center">

      </div>
    </div>
  </div>
  </div>




  <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/sort.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>


  <!-- Ventana modal -->
  <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="tituloVentana">Título de la ventana</h5>
          <button class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>


          </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-success">
            <h6><strong>Tus datos se han guardado exitosamente</strong></h6>
          </div>

        </div>
        <div class="modal-footer">

          <button class="btn btn-warning" type="button" data-dismiss="modal">
            Cerrar
          </button>
          <button class="btn btn-success" type="button">
            Aceptar
          </button>

        </div>
      </div>
    </div>
  </div>

</body>

</html>
<?php /**PATH /home/joan/Documentos/login/resources/views/jardin.blade.php ENDPATH**/ ?>