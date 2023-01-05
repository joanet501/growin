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




<body class="p-3 m-0 border-0 bd-example bd-example-row"  style="background-image: url('{{asset("assets/bg.jpg")}}');">

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
            @foreach ($gardens as $garden)
                <li><a class="dropdown-item" href="#" onclick="cambiarHuerto({{$garden['id']}})">{{$garden['name']}}</a></li>
            @endforeach

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
                @foreach ($gardens as $key=>$garden)
                <li><a class="dropdown-item" href="#" onclick="cambiarHuerto({{$key}})">{{$garden['name']}}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="col-3">
          <form method="POST" action="{{ url('api/garden/create') }}">
            @method("POST")
            @csrf
                 <button class="btn btn-primary btn-xs container-fluid" type="submit">Crear Huerto</button>
        </form>


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
                        <div class="col-4 col-sm-4"><a onclick="chooser()">
                            <img class="card-img-top img-fluid" src=" {{ asset($garden['plants'][$i]['category']['image_url'] ?? 'assets/Huerto.png') }}" alt="{{$key}}" draggable="false" id="{{$i}}" onclick="getImageId(event)">
                            </a>
                        </div>
                    @endfor
                @else
                    @for( $i=$key*9 ; $i<9+$key*9 ; $i++ )
                        <div class="col-4 col-sm-4 d-none"><a onclick="chooser()"><img
                            class="card-img-top img-fluid" src=" {{ asset($garden['plants'][$i-$key*9]['category']['image_url'] ?? 'assets/Huerto.png') }}"  alt="{{$key}}" draggable="false" id="{{$i}}" onclick="getImageId(event)">
                        </a>
                        </div>
                    @endfor
                @endif
            @endforeach
            </div>

          </div>

          <div class="col-sm-3" draggable="false">
            <div class=" d-none d-md-flex flex-column flex-shrink-0 p-3 text-white bg-dark container-fluid" id="lat-bar">

                <img  src="{{ asset("assets/Huerto.png") }}">

              <hr/>

                  <a id="test">
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

                  <a id="prueba">
                    Prueba
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

      <!-- Lightbox con planta -->
<div id="lightboxPlanta" style="display:none">
    <div class="container-fluid">
      <button id="lightbox_close" onclick="closeLightboxPlanta()">&times;</button>
      <div class="row">
        <div class="col-md-6">
         <p id="namePlant"> Nombre planta </p>
        </div>
        <div class="col-md-6">
          <div>
            <img id="lightbox-image" src="" class="d-flex flex-column container-fluid"/>

        </div>

      </div>

        <div class="col-md-6 text-center" id="desc">
          <p class="d-none d-md-block"id="descriptionPlant">
            Descripción de la planta
          </p>
        </div>
        <div class="col-md-6 text-center" id="riego">
          <p id="ultimoRiego">
            Último riego: 00-00-0000<br>
         </p>
         <p id="proximoRiego">
            Próximo riego: 00-00-0000<br>
          </p>
        </div>


        <div class="col-md-4">
            <form method="POST" action="{{ url('/plant/delete') }}">
                @method("POST")
                @csrf
                     <input type="hidden" name="gardenId" id="gardenId">
                     <input type="hidden" name="plantId" id="plantId">

                <button class="btn btn-success container-fluid" type="submit" onclick="pictureDelete()">
                    Borrar
                  </button>
            </form>

        </div>
        <div class="col-md-4">
            <form method="POST" action="{{ url('/plant/water') }}">
                @method("POST")
                @csrf
                <input type="hidden" name="gardenId" id="gardenId3">
                <input type="hidden" name="plantId" id="plantId3">

          <button class="btn btn-warning container-fluid" type="submit" onclick="regar()">
            Regar
          </button>
        </form>

        </div>
        <div class="col-md-4">
         <button class="btn btn-warning container-fluid" type="button" onclick="openLightboxRenombre()">
           Renombrar
         </button>
       </div>

    </div>



    </div>
  </div>


  <div class="modal fade" id="Cambio" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
   aria-hidden="true">
    <!-- Create the popup content -->
    <div class="popup-content">
      <!-- Create a textfield for the user to enter content -->
      <input type="text" id="textfield">
      <br><br>

      <!-- Create a save button -->
      <button onclick="saveContent()">Guardar</button>

      <!-- Create a close button -->
      <button class="close-button" onclick="closePopup()">Cerrar</button>
    </div>
  </div>
<!-- Lighbox huerto vacio -->
<div id="lightbox" style="display:none">
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
            <img id="prod-image" src="assets/Brote.jpg" class="d-flex flex-column container-fluid"/>
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
            <form method="POST" action="{{ url('/plant/create') }}">
                @method("POST")
                @csrf
                     <input type="hidden" name="gardenId" id="gardenId2">
                     <input type="hidden" name="plantType" id="plantType">

                     <button class="btn btn-success container-fluid" type="submit" onclick="pictureChange()">
                        Añadir
                      </button>
            </form>


        </div>
        <div class="col-md-6">
          <button class="btn btn-warning container-fluid" type="button" onclick="closeLightbox()">
            Cerrar
          </button>
        </div>

    </div>



    </div>
  </div>


<!-- Lightbox renombrar planta -->

<div id="lightboxRenombre" style="display:none">

    <input type="text" id="textoRenombrar">
    <!-- Create a button to store the value in the text field -->
    <button id="botonRenombrar">Renombrar</button>
    <!-- Create a button to close the lightbox -->
    <button onclick="closeLightboxRenombre()">Cerrar</button>

  </div>

  <!-- Ventana confirmación -->

  <div class="modal fade" id="ventanaConfirmacion" tabindex="-1" role="dialog" aria-labelledby="tituloVentana"
    aria-hidden="true">
    <div class="modal-dialog" role="document" background-color="#3c3c3c" color="white">
      <div class="modal-content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12 text-center" id="desc">
              <p>
                ¿Qué huerto quieres borrar?

            </p>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle container-fluid" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Elige un huerto
                </button>
                <form method="POST" action="{{url("/garden/delete")}}">
                    @csrf
                    <input type="hidden" name="garden_id" id="gardenIdDelete">
                    <ul class="dropdown-menu container-fluid">
                      @foreach ($gardens as $garden)
                        <li>
                          <button type="submit" onclick="deleteGardenId({{$garden['id']}})" class="dropdown-item text-dark">
                            {{ $garden['name'] }}
                          </button>
                        </li>
                      @endforeach
                    </ul>
                  </form>

              </div>

            </div>
        </div>



        </div>
      </div>
    </div>
  </div>

  <!--cambiar id huerto borrado -->

<script>
function deleteGardenId(gardenId) {
  document.getElementById('gardenIdDelete').value = gardenId;
}

</script>


<!-- Script Lightbox -->

<script>
    function openLightbox() {
      // Show the lightbox and add a dark background
      document.getElementById("lightbox").style.display = "block";

    }
    function closeLightbox() {
      // Hide the lightbox and remove the dark background
      document.getElementById("lightbox").style.display = "none";

    }
  </script>

  <!-- Fin Script Lightbox-->

  <!-- Script Lightbox huerto vacio-->

  <script>
    function openLightboxPlanta() {
      document.getElementById("lightboxPlanta").style.display = "block";
      updateLightboxImage();
      updateWaterDate();
    }

    function updateWaterDate(){
      var plant_id2 = parseInt(document.getElementById(window.imageId).id);
      var garden_id = parseInt(document.getElementById(window.imageId).alt);
      var datos = @json($gardens);
        if (plant_id2 >8){

        document.getElementById("proximoRiego").innerHTML = datos[garden_id].plants[plant_id2%9].next_water_date;
        document.getElementById("ultimoRiego").innerHTML = datos[garden_id].plants[plant_id2%9].water_date;

        }else{

      document.getElementById("proximoRiego").innerHTML = datos[garden_id].plants[plant_id2].next_water_date;
      document.getElementById("ultimoRiego").innerHTML = datos[garden_id].plants[plant_id2].water_date;
        }
      plant_id2 = 0;
      garden_id = 0;
    }

    function closeLightboxPlanta() {
      // Hide the lightbox and remove the dark background
      document.getElementById("lightboxPlanta").style.display = "none";

    }
  </script>

  <!-- Fin Script Lightbox huerto vacio-->

  <!-- Scripts Lightbox Renombrar Planta -->

  <script>
    function openLightboxRenombre() {

      document.getElementById("lightboxRenombre").style.display = "block";

    }
    function closeLightboxRenombre() {

      document.getElementById("lightboxRenombre").style.display = "none";

    }
  </script>

  <script>
  var textField = document.getElementById('textoRenombrar');

  // Get the button in lightbox 2
  var button = document.getElementById('botonRenombrar');

  // Add an event listener to the button that will run when it is clicked
  button.addEventListener("click", function() {
    // Get the value of the text field
    var text = textField.value;

    var a = text.toString();
    // Get the element in lightbox 1 that contains the text you want to update
    document.getElementById('name').innerHTML = text;

  });
  </script>

  <!-- Fin Scripts Lightbox Renombrar Planta-->

  <!--  Script renombrar -->


  <!-- Fin script renombrar -->



  <script>
    function getImageId(event) {
      var image = event.target;
      var imageId = image.id;

      window.imageId = imageId

    }
    </script>
  <script>
  function pictureChange()
  {
    var dropdown = document.getElementById("selector");
    var selectedValue = dropdown.value;
    var $gardenId = document.getElementById(window.imageId).alt;
    document.getElementById('gardenId2').value = $gardenId;

    if (selectedValue === "1") {
        document.getElementById('plantType').value = 1;
    } else if (selectedValue === "2") {
        document.getElementById('plantType').value = 2;
    } else if (selectedValue === "3") {
        document.getElementById('plantType').value = 3;
    }

  }



  </script>

  <script>
    function pictureDelete()
    {
        var $gardenId = document.getElementById(window.imageId).alt;
        var $plantId = document.getElementById(window.imageId).id;
        document.getElementById('gardenId').value = $gardenId;
        document.getElementById('plantId').value = $plantId%9;

    }
    function regar()
    {
        var $gardenId = document.getElementById(window.imageId).alt;
        var $plantId = document.getElementById(window.imageId).id;
        document.getElementById('gardenId3').value = $gardenId;
        if ($plantId>8){
          document.getElementById('plantId3').value = $plantId%9;
        }else{
          document.getElementById('plantId3').value = $plantId;
        }
    }
  </script>

  <!-- Script para actualizar riegos -->

<script>
    function chooser() {
      // Get the image element
      var ruta = document.getElementById(window.imageId).src

      // Check the src of the image
      if (ruta.includes("tomate") || ruta.includes("patata") || ruta.includes("cebolla")) {
        // If the src is "image1.jpg", open lightbox 1
        openLightboxPlanta();


      } else {
        // If the src is "image2.jpg", open lightbox 2
        openLightbox();
      }
    }
  </script>
  <!-- Fin Chooser funcional -->

<!-- Cambiar de huerto -->

<script>

function cambiarHuerto(id) {
  const elements = document.querySelectorAll('[alt]');
  elements.forEach(element => {
    if (element.getAttribute('alt') === String(id)) {
      element.parentElement.parentElement.classList.remove('d-none');
      element.parentElement.parentElement.classList.add('d-block');
    } else if (!isNaN(element.getAttribute('alt'))) {
        element.parentElement.parentElement.classList.remove('d-block');
      element.parentElement.parentElement.classList.add('d-none');
    }
  });
}




</script>


<!-- Cambiar de huerto fin -->



  <!-- Script Update Imagen -->

  <script>
  function updateLightboxImage() {

    var foto = document.getElementById('lightbox-image');
    var ruta = document.getElementById(window.imageId).src;

    if(ruta.includes("tomate")){
    foto.src="{{asset("assets/Tomate.jpg")}}";
    updateLightboxDescriptionTomate();
    }
    else if (ruta.includes("patata")){
    foto.src="{{asset("assets/Patata.jpg")}}";
    updateLightboxDescriptionPatata();
    }
    else if(ruta.includes("cebolla")){
    foto.src="{{asset("assets/Cebolla.jpg")}}";
    updateLightboxDescriptionCebolla();
    }

  }
    function updateLightboxDescriptionTomate() {
        document.getElementById('descriptionPlant').innerHTML = "El tomate es una fruta comestible de la familia de las solanáceas, de la que existen cientos de variedades de diferentes tamaños, formas y colores. Se consumen principalmente en la cocina como ingrediente en diversos platos, y también se pueden comer frescos como fruta."
        document.getElementById('namePlant').innerHTML = "Tomate";
    }
    function updateLightboxDescriptionPatata() {
        document.getElementById('descriptionPlant').innerHTML = "La patata es un tubérculo comestible perteneciente a la familia de las solanáceas. Hay muchas variedades de patatas, que se diferencian en tamaño, forma, color y sabor. Las patatas se consumen cocidas, fritas o al horno y son una fuente importante de energía y nutrientes, como el hierro, el potasio y el calcio."
        document.getElementById('namePlant').innerHTML = "Patata";
    }
    function updateLightboxDescriptionCebolla() {
        document.getElementById('descriptionPlant').innerHTML = "La cebolla es una hortaliza bulbosa de la familia de las liliáceas, que se cultiva principalmente por su bulbo que es comestible. La cebolla se utiliza a menudo en la cocina como ingrediente base en diversos platos y salsas. También se puede comer cruda o cocida y es rica en vitamina C y otros nutrientes."
        document.getElementById('namePlant').innerHTML = "Cebolla";

    }



  </script>
  <!-- Fin Script Update Imagen -->
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/jquery-3.2.1.slim.min.js")}}"></script>
  <script src="{{asset("js/popper.min.js")}}"></script>
  <script src="{{asset("js/selector.js")}}"></script>
  <script src="{{asset("js/sort.js")}}"></script>


</body>

</html>
