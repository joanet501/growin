<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href = {{ asset("css/bootstrap.min.css") }} rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href = {{ asset("css/jardin-css.css") }} type="text/css" rel="stylesheet" />


  <!-- Optional theme -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>GrowIn'</title>
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
            <a data-toggle="modal" data-target="#ventanaConfirmacion"><button class="btn btn-primary btn-xs container-fluid" type="button">Borrar Huerto</button></a>
        </div>
      </div>
  </div>



    <div class="card-block">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-9">
            <div class="row " id="sortable">
                @foreach ($gardens as $key => $garden)
                @if ($key == 0)
                    @for ( $i=0 ; $i < 9; $i++ )
                        <div class="col-4 col-sm-4"><a data-toggle="modal" data-target="#ventanaModal"><img
                            class="card-img-top img-fluid" src=" {{ asset($garden['plants'][$i]['category']['image_url'] ?? 'assets/Huerto.png') }}" alt="Card image cap" draggable="false" id="celda1" onclick="getImageId(event)">
                        </a></div>
                    @endfor
                @else
                    @for( $i=0 ; $i<9 ; $i++ )
                        <div class="col-4 col-sm-4 d-none"><a data-toggle="modal" data-target="#ventanaModal"><img
                            class="card-img-top img-fluid" src=" {{ asset($garden['plants'][$i]['category']['image_url'] ?? 'assets/Huerto.png') }}" alt="Card image cap" draggable="false" id="celda1" onclick="getImageId(event)">
                        </a></div>
                    @endfor
                @endif
            @endforeach
            </div>

          </div>

          <div class="col-sm-3" draggable="false">
            <div class=" d-none d-md-flex flex-column flex-shrink-0 p-3 text-white bg-dark container-fluid" id="lat-bar">

                <img  src="{{ asset("assets/Huerto.png") }}" alt="Test">

              <hr/>

                  <a>
                    Descripción: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Id cursus metus aliquam eleifend mi in nulla posuere.

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
    </div>
  </div>
  </div>




  <!-- Ventana modal -->
  <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- <div class="dropdown">

                <button class="btn btn-primary dropdown-toggle container-fluid " type="button" id="dropdownMenuButton" data-toggle="dropdown">
                  Plantas
                </button>
                <div class="dropdown-menu container-fluid" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item disabled" href="#">Tomate</a> <a class="dropdown-item" href="#">Patata</a> <a class="dropdown-item" href="#">Cebolla</a>
                </div>
              </div> -->
              <select id="selector" class="container-fluid">
                <option value="0">Selecciona una planta</option>
                <option value="1">Tomate</option>
                <option value="2">Patata</option>
                <option value="3">Cebolla</option>
            </select>

            </div>
            <div class="col-md-6">
              <div>
                <img id="prod-image" src="{{ asset('assets/Brote.jpg') }}" class="d-flex flex-column container-fluid"/>
            </div>

          </div>

            <div class="col-md-6 text-center" id="desc">
              <p>
                Selecciona una planta en el menú superior para ver su información y añadirla a tu huerto.
              </p>
            </div>
            <div class="col-md-6 text-center" id="riego">
              <p>

              </p>
            </div>


            <div class="col-md-6">
              <button class="btn btn-success container-fluid" type="button" data-dismiss="modal" onclick="pictureChange()">
                Aceptar
              </button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-warning container-fluid" type="button" data-dismiss="modal">
                Cerrar
              </button>
            </div>

        </div>



        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- <div class="dropdown">

                <button class="btn btn-primary dropdown-toggle container-fluid " type="button" id="dropdownMenuButton" data-toggle="dropdown">
                  Plantas
                </button>
                <div class="dropdown-menu container-fluid" aria-labelledby="dropdownMenuButton">
                   <a class="dropdown-item disabled" href="#">Tomate</a> <a class="dropdown-item" href="#">Patata</a> <a class="dropdown-item" href="#">Cebolla</a>
                </div>
              </div> -->
              <select id="selector" class="container-fluid">
                <option value="0">Selecciona una planta</option>
                <option value="1">Tomate</option>
                <option value="2">Patata</option>
                <option value="3">Cebolla</option>
            </select>

            </div>
            <div class="col-md-6">
              <div>
                <img id="prod-image" src="{{ asset('assets/Brote.jpg') }}" class="d-flex flex-column container-fluid"/>
            </div>

          </div>

            <div class="col-md-6 text-center" id="desc">
              <p>
                Selecciona una planta en el menú superior para ver su información y añadirla a tu huerto.
              </p>
            </div>
            <div class="col-md-6 text-center" id="riego">
              <p>

              </p>
            </div>


            <div class="col-md-6">
              <button class="btn btn-success container-fluid" type="button" data-dismiss="modal" onclick="pictureChange()">
                Aceptar
              </button>
            </div>
            <div class="col-md-6">
              <button class="btn btn-warning container-fluid" type="button" data-dismiss="modal">
                Cerrar
              </button>
            </div>

        </div>



        </div>
      </div>
    </div>
  </div>
 <!-- ventana confirmacion -->
 <div class="modal fade" id="ventanaConfirmacion" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12 text-center" id="desc">
           <p>
             ¿Estás seguro que quieres borrar el huerto?
           </p>
         </div>
         <div class="col-md-6">
           <button class="btn btn-danger container-fluid" type="button" data-dismiss="modal">
             Si
           </button>
         </div>
         <div class="col-md-6">
           <button class="btn btn-success container-fluid" type="button" data-dismiss="modal">
             No
           </button>
         </div>

     </div>



     </div>
   </div>
 </div>
</div>


  <script type="text/javascript" src="{{ asset("Scripts/jquery-2.1.1.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("Scripts/bootstrap.min.js")  }}"></script>
  <script type="text/javascript" src="{{ asset("js/sort.js") }}"></script>
  <script type="text/javascript" src="{{ asset("js/popper.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
  <script type="text/javascript" src="{{ asset("js/pictureChange.js") }}"></script>

  <script>
    var data = {
        "0" : { img: "{{ asset('assets/Brote.jpg') }}", text1:"Selecciona una planta en el menú superior para ver su información y añadirla a tu huerto.", text2:""},
        "1" : { img: "{{ asset('assets/Tomate.jpg') }}", text1:"Esto es un tomate", text2:"Su riego es cada 3 semanas"},
        "2" : { img: "{{ asset('assets/Patata.jpg') }}", text1:"Esto es una patata", text2:"Su riego es cada 2 semanas"},
        "3" : { img: "{{ asset('assets/Cebolla.jpg') }}", text1:"Esto es una cebolla", text2:"Su riego es cada semana"},
    };

    $('#selector').change(function() {
        var value = $(this).val();
        if (data[value] != undefined)
        {
            $('#prod-image').attr('src', data[value].img);
            $('#desc').text(data[value].text1);
            $('#riego').text(data[value].text2);

        }
    });

      </script>
    <script>
      function getImageId(event) {
        var image = event.target;
        var imageId = image.id;

        window.imageId = imageId
        // You can now use the imageId variable to do something with the image's id
      }
      </script>
    <script>
        function pictureChange()
        {
            var dropdown = document.getElementById("selector");
            var selectedValue = dropdown.value;

            if (selectedValue === "1") {
                document.getElementById(window.imageId).src = "{{ asset('assets/Tomate.jpg') }}";
            } else if (selectedValue === "2") {
            document.getElementById(window.imageId).src = "{{ asset('assets/Patata.jpg') }}";
            } else if (selectedValue === "3") {
            document.getElementById(window.imageId).src = "{{ asset('assets/Cebolla.jpg') }}";
            }
        }
    </script>

    <script>
        function apiAddPlant($category){
            $position = document.getElementById(window.imageId).id;
            <form method="POST" action="{{ url('api/create/plant') }}">


        }

    </script>
<script>
    function getImageId(event) {
      var image = event.target;
      var imageId = image.id;

      window.imageId = imageId
      // You can now use the imageId variable to do something with the image's id
    }
    </script>
</body>

</html>
