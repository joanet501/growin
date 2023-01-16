<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="assets/Logo-icon.svg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GrowIn'</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 35rem">
      <div class="d-flex justify-content-center">
        <img
          src="assets/Logo_Circulo.png"
          alt="login-icon"
          style="height: 7rem"
        />
      </div>
      <div class="text-center fs-1 fw-bold ">Bienvenido <h1 id="nombre" >usuario</h1></div>
      <h2 class="text-center fs-4">Hoy tienes que regar las siguientes plantas:</h2>

        <div class="border bg-light container-fluid">
          <ul
          style="margin-top: 1rem; margin-bottom:1rem">
            <li id="planta1">Tomate</li>
            <li id="planta2">Cebolla</li>
            <li id="planta3">Patata</li>
        </ul>
      </div>
      <p class="text-center" style="margin-top:1rem">Si ya has regado todas tus plantas haz click en el botón</p>
      <button class="btn btn-dark text-white w-100 mt-4 fw-semibold shadow-sm" type="button">
        <a class="text-decoration-none text-info fw-semibold">
        Regar
        </a>
    </button>
      <div class="text-center" style="margin-top:1rem">
        <p>Equipo de GrowIn'</p>
      </div>
  </body>
</html>
